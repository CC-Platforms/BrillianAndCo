<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\NewsletterController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ProjectController;
use App\Http\Controllers\Web\SalesController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\TeamController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

// PWA Offline Route
Route::get('/offline', function () {
    // Get projects for the sidebar (same as other pages)
    $projects = Property::where('is_featured', true)
        ->where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->get();
        
    return view('offline', compact('projects'));
})->name('offline');

// Apply visitor tracking middleware to all web routes
Route::middleware('track.visitors')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog.index');
        Route::get('/blog/{slug}', 'show')->name('blog.show');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services', 'index')->name('services.index');
        Route::get('/services/{slug}', 'show')->name('services.show');
    });

    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projects', 'index')->name('projects.index');
        Route::get('/projects/{slug}', 'show')->name('projects.show');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('/team', 'index')->name('team.index');
        Route::get('/team/{slug}', 'show')->name('team.show');
    });

    Route::controller(SalesController::class)->group(function() {
        Route::get('/buyer', 'buyerIndex')->name('buyer.index');
        Route::post('/buyer', 'buyerSend')->name('buyer.send');
        Route::get('/seller', 'sellerIndex')->name('seller.index');
        Route::post('/seller', 'sellerSend')->name('seller.send');
    });

    Route::controller(NewsletterController::class)->group(function() {
        Route::post('/subscribe', 'subscribe')->name('newsletter.subscribe');
    });
}); // End visitor tracking middleware group

Route::get('/debug-images', function() {
    $properties = App\Models\Property::select('id', 'title', 'featured_image')->get();
    foreach($properties as $property) {
        echo "ID: {$property->id} | Title: {$property->title} | Image: {$property->featured_image}<br>";
    }
});