<?php

namespace WdevRs\LaravelAnalyticsLite\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use WdevRs\LaravelAnalyticsLite\Models\PageView;

class Analytics
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        PageView::query()->create([
            'path' => $request->path(),
            'user_agent' => $request->userAgent()
        ]);

        return $next($request);
    }
}
