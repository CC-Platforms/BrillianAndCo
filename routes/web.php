<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get('/contact', function () {
    return view('contact-us.index');
})->name('contact.index');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
})->name('blog.show');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects.index');

Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio.index');


Route::get('/test', function() {
    return view('test');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/{slug}', [TeamController::class, 'show'])->name('team.show');
