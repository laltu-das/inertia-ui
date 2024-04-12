<?php

namespace Laltu\InertiaUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\InertiaUi\InertiaUi
 */
class InertiaUiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'inertia-ui';
    }
}
