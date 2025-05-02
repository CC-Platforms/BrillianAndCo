<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/contact', function () {
    return view('contact-us.index');
});

Route::get('/services', function () {
    return view('services.index');
}); 

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
});

Route::get('/portfolio', function () {
    return view('portfolio.index');
});

Route::get('/portfolio/{slug}', function ($slug) {
    return view('portfolio.show', ['slug' => $slug]);
});