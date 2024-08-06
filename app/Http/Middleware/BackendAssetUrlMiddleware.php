<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BackendAssetUrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the current route belongs to the backend
        if ($request->is('teacher/*')) {
            // Set the ASSET_URL to the backend path
            config(['app.asset_url' => '/public']);
        }

        return $next($request);

    }
}
