<?php

namespace App\Providers;

use App\Http\Services\BricoreService;
use App\Models\Property;
use App\Models\Land;
use App\Models\Service;
use App\Models\Speciality;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('properties', function ($view) {
            // Get data from database instead of hardcoded services
            $landsByCategory = Land::where('is_active', true)
                ->get()
                ->groupBy('category');
            
            $projects = Property::where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->get();
            
            $view->with([
                'landsByCategory' => $landsByCategory,
                'projects' => $projects
            ]);
        });

         // Share services data with the services section
         View::composer('sections.services', function ($view) {
            // Get data from database instead of hardcoded service
            $specialities = Speciality::where('is_active', true)
                ->orderBy('sort_order')
                ->get();
            
            $coreServices = Service::where('is_active', true)
                ->orderBy('sort_order')
                ->get();
            
            $view->with([
                'specialities' => $specialities,
                'coreServices' => $coreServices
            ]);
        });
        
        View::composer('sections.stats', function ($view) {
            $bricoreService = app(BricoreService::class);
            
            $view->with([
                'stats' => $bricoreService->getStats()
            ]);
        });

        // Share services data globally with footer and other views
        View::composer(['layout.partials.footer', 'services.show'], function ($view) {
            $footerServices = Service::where('is_active', true)
                ->orderBy('sort_order')
                ->limit(5) // Limit to 5 services for footer
                ->get();
            
            $view->with([
                'footerServices' => $footerServices
            ]);
        });
    }
}
