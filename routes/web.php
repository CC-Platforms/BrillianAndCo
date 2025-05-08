<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Services\ProjectService;
use App\Http\Services\LandService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projectService = new ProjectService();
    $landService = new LandService();
    $projects = $projectService->getProjects();
    $landsByCategory = $landService->getLandsByCategory();    

    return view('home.index', compact('projects', 'landsByCategory'));
})->name('home.index');

Route::get('/about', function () {
    $projectService = new ProjectService();
    $projects = $projectService->getProjects();
    $teamMembers = [
        [
            'id' => 1,
            'name' => 'Pah Brillian Beng', // You might replace these with more local names if preferred
            'slug' => 'pah-brillian-beng',
            'position' => 'Chief Executive Officer',
            'phone' => '+237 652383694', 
            'email' => 'john@example.com',
            'website' => 'https://johndoe.com',
            'experience' => '8 Years',
            'availability' => 'Full Time',
            'description' => 'Pah Brillian Beng is a seasoned real estate agent with extensive experience in residential and commercial properties in Buea and Limbe.',
            'image' => 'assets/img/brillian/ceo_image.jpg',
            'social' => [
                'facebook' => 'https://www.facebook.com/share/197AyYyroV/?mibextid=wwXIfr',
                'tiktok' => 'https://www.tiktok.com/@agentbrillian1?_t=ZM-8w2zfFhyJ8P&_r=1',
                'instagram' => 'https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr',
                'linkedin' => 'https://cm.linkedin.com/in/pah-brillian-beng-a3908b1a6',
            ],
            'skills' => [
                ['title' => 'Property Negotiation', 'value' => 85],
                ['title' => 'Client Relations', 'value' => 90],
                ['title' => 'Market Analysis (SW Region)', 'value' => 75], // Added specificity
                ['title' => 'Contract Drafting', 'value' => 80]
            ]
        ],
    ];

    return view('about.index', [
        'teamMembers' => $teamMembers,
        'projects' => $projects,
    ]);
})->name('about.index');

Route::get('/contact', function () {
    $projectService = new ProjectService();
    $projects = $projectService->getProjects();
    return view('contact-us.index', [
        'projects' => $projects,
    ]);
})->name('contact.index');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
})->name('blog.show');

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
