<?php

namespace WdevRs\LaravelAnalyticsLite\Tests\Http\Middleware;

use Illuminate\Support\Facades\Route;
use WdevRs\LaravelAnalyticsLite\Http\Middleware\Analytics;
use WdevRs\LaravelAnalyticsLite\Tests\TestCase;

class AnalyticsTest extends TestCase
{
    public function testItCanTrackPageViews()
    {
        Route::get('/test-path', function(){
            return 'hello test';
        })->middleware(Analytics::class);

        $this->get('/test-path')->assertOk();

        $this->assertDatabaseHas('page_views',[
            'path' => 'test-path'
        ]);
    }
}
