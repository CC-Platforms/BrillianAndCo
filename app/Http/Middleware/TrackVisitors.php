<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only track GET requests and avoid tracking admin routes, API routes, and assets
        if ($request->isMethod('GET') && 
            !$request->is('admin/*') && 
            !$request->is('api/*') &&
            !$request->is('assets/*') &&
            !str_contains($request->path(), '.')) {
            
            try {
                Visitor::track($request);
            } catch (\Exception $e) {
                // Silently fail to avoid breaking the application
                // Log the error if needed
                Log::warning('Visitor tracking failed: ' . $e->getMessage());
            }
        }

        return $next($request);
    }
}
