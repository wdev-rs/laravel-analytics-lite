<?php

namespace WdevRs\LaravelAnalyticsLite\Tests;

use Illuminate\Support\Facades\Route;
use WdevRs\LaravelAnalyticsLite\Http\Middleware\Analytics;

class AnalyticsTest extends TestCase
{
    public function testItRegistersPageview()
    {
        Route::get('test/path/', function(){
            return 'Test path';
        })->middleware([Analytics::class]);

        $this->get('/test/path');

        $this->assertDatabaseHas('page_views',[
            'path' => 'test/path'
        ]);
    }
}
