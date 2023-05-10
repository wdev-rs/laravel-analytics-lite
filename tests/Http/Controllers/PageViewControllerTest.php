<?php

namespace WdevRs\LaravelAnalyticsLite\Tests\Http\Controllers;


use WdevRs\LaravelAnalyticsLite\LaravelAnalyticsLite;
use WdevRs\LaravelAnalyticsLite\Models\PageView;
use WdevRs\LaravelAnalyticsLite\Tests\TestCase;

class PageViewControllerTest extends TestCase
{
    public function testItCanShowPageViewCount()
    {
        LaravelAnalyticsLite::routes();

        PageView::query()->create([
            'path' => 'p1'
        ]);

        PageView::query()->create([
            'path' => 'p2'
        ]);

        $this->get('page-views')
            ->assertSee(2)
            ->assertOk();
    }
}
