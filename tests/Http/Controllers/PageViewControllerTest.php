<?php

namespace WdevRs\LaravelAnalyticsLite\Tests\Http\Controllers;

use WdevRs\LaravelAnalyticsLite\LaravelAnalyticsLite;
use WdevRs\LaravelAnalyticsLite\Models\PageView;
use WdevRs\LaravelAnalyticsLite\Tests\TestCase;

class PageViewControllerTest extends TestCase
{
    public function testItShowsPageViews()
    {
        LaravelAnalyticsLite::routes();

        PageView::query()->create([
            'path' => 'test/path',
            'user_agent' => 'agent'
        ]);

        PageView::query()->create([
            'path' => 'test/path',
            'user_agent' => 'agent'
        ]);

        $this->get('/page-views')->assertOk()->assertSee(2);
    }
}
