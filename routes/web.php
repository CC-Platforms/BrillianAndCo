<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get('/team', function () {
    return view('team.index');
})->name('team.index');

Route::get('/contact', function () {
    return view('contact-us.index');
})->name('contact.index');

Route::get('/services', function () {
    return view('services.index');
})->name('services.index'); 

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
})->name('blog.show');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects.index');

Route::get('/projects/{slug}', function ($slug) {
    return view('projects.show', ['slug' => $slug]);
})->name('projects.show');

Route::get('/test', function() {
    return view('test');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');
