<?php

namespace Probststefan\LaravelShopwareApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Probststefan\LaravelShopwareApi\Skeleton\SkeletonClass
 */
class LaravelShopwareApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-shopware-api';
    }
}
