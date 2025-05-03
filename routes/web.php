<?php

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

Route::get('/services', function () {
    return view('services.index');
})->name('services.index'); 

Route::get('/services/{slug}', function ($slug) {
    return view('services.show', ['slug' => $slug]);
})->name('services.show');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
})->name('blog.show');

Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio.index');

Route::get('/portfolio/{slug}', function ($slug) {
    return view('portfolio.show', ['slug' => $slug]);
})->name('portfolio.show');

Route::get('/team', function () {
    return view('team.index');
})->name('team.index');

Route::get('/team/{slug}', function ($slug) {
    return view('team.show', ['slug' => $slug]);
})->name('team.details');