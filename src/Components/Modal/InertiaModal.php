<?php

namespace Laltu\InertiaUi\Components\Modal;

use Closure;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\LazyProp;

class InertiaModal implements Responsable
{
    protected ?string $baseURL = null;
    protected bool $refreshBackdrop = false;
    protected bool $forceBase = false;
    protected array $props = [];

    public function __construct(protected string $component) {}

    public function baseURL(string $url): self
    {
        $this->baseURL = $url;

        return $this;
    }

    public function baseRoute(string $name, array $parameters = [], bool $absolute = true): self
    {
        $this->baseURL = Route::has($name) ? Route::route($name, $parameters, $absolute) : null;

        return $this;
    }

    public function refreshBackdrop(bool $refresh = true): self
    {
        $this->refreshBackdrop = $refresh;

        return $this;
    }

    public function forceBase(bool $force = true): self
    {
        $this->forceBase = $force;

        return $this;
    }

    public function with(array|Arrayable $props): self
    {
        $this->props = $props instanceof Arrayable ? $props->toArray() : $props;

        return $this;
    }

    public function toResponse($request): JsonResponse
    {
        if ($request->header('X-Inertia') && !$this->refreshBackdrop) {
            return $this->renderModal($request);
        }

        return $this->handleRoute($request);
    }

    protected function renderModal(Request $request): JsonResponse
    {
        $modalData = [
            'component' => $this->component,
            'props' => $this->resolvePropertyInstances($this->props),
            'url' => $this->baseURL ?? $request->fullUrl(),
            'key' => Str::uuid()->toString(),
        ];

        return Inertia::render($this->component, $modalData)
            ->toResponse(request())
            ->header('X-Inertia-Modal', 'true');
    }

    protected function handleRoute(Request $request): JsonResponse
    {
        return $this->renderModal($request);
    }

    protected function resolvePropertyInstances(array $props): array
    {
        foreach ($props as $key => &$value) {
            // Resolve closures or lazy properties immediately
            if ($value instanceof Closure || $value instanceof LazyProp) {
                $value = App::call($value);
            }

            // Handle Guzzle Promises if GuzzleHttp is used in the project
            if ($value instanceof PromiseInterface) {
                $value = $value->wait(); // Synchronously waits for the promise to complete
            }

            // Handle JSON Resources and Resource Responses to ensure they are properly serialized
            if ($value instanceof JsonResource || $value instanceof ResourceResponse) {
                $response = $value->toResponse(request());
                $value = json_decode($response->getContent(), true);
            }

            // Recursively resolve nested properties to ensure all instances are properly handled
            if (is_array($value)) {
                $value = $this->resolvePropertyInstances($value);
            }

            // Optionally, handle more special types as needed...
        }
        return $props;
    }


    protected function redirectURL(): ?string
    {
        if ($this->forceBase || request()->header('X-Inertia-Modal-Redirect')) {
            return $this->baseURL;
        }

        return request()->headers->get('referer', $this->baseURL);
    }
}
