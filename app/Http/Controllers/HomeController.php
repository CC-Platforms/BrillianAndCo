<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use App\Http\Services\LandService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectService = new ProjectService();
        $landService = new LandService();
        $projects = $projectService->getProjects();
        $landsByCategory = $landService->getLandsByCategory();
        
        return view('home.index', compact('projects', 'landsByCategory'));
    }
}