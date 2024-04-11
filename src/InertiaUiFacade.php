<?php

namespace Laltu\InertiaUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\InertiaUi\Skeleton\SkeletonClass
 */
class InertiaUiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'inertia-ui';
    }
}
