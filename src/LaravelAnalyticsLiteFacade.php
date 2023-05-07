<?php

namespace WdevRs\LaravelAnalyticsLite;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WdevRs\LaravelAnalyticsLite\Skeleton\SkeletonClass
 */
class LaravelAnalyticsLiteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-analytics-lite';
    }
}
