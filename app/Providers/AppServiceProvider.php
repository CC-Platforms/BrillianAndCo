<?php

namespace App\Providers;

use App\Http\Services\BriCoreService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Services\LandService;
use App\Http\Services\ProjectService;

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
            $landService = app(LandService::class);
            $projectService = app(ProjectService::class);
            
            $view->with([
                'landsByCategory' => $landService->getLandsByCategory(),
                'projects' => $projectService->getProjects()
            ]);
        });

         // Share services data with the services section
         View::composer('sections.services', function ($view) {
            $briCoreService = app(BriCoreService::class);
            
            $view->with([
                'specialities' => $briCoreService->getSpecialities(),
                'coreServices' => $briCoreService->getCoreServices()
            ]);
        });
        
        View::composer('sections.stats', function ($view) {
            $briCoreService = app(BriCoreService::class);
            
            $view->with([
                'stats' => $briCoreService->getStats()
            ]);
        });
    }
}
