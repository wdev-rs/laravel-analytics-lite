<?php

namespace WdevRs\LaravelAnalyticsLite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use WdevRs\LaravelAnalyticsLite\Models\PageView;

class PageViewsController extends Controller
{
    public function index(Request $request)
    {
        return PageView::query()->count();
    }
}
