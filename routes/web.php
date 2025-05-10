<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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