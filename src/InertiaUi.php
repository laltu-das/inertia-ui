<?php

namespace Laltu\InertiaUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\InertiaUi\InertiaUiManager
 */
class InertiaUi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return InertiaUiManager::class;
    }
}
