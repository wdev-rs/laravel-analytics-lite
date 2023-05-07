<?php

namespace WdevRs\LaravelAnalyticsLite;

use Illuminate\Support\Facades\Route;
use WdevRs\LaravelAnalyticsLite\Http\Controllers\PageViewsController;

class LaravelAnalyticsLite
{
    public static function routes()
    {
        Route::get('page-views', [PageViewsController::class, 'index']);
    }
}
