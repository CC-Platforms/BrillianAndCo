<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use App\Http\Services\LandService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;
    protected $landService;

    /**
     * Constructor to inject ProjectService dependency.
     *
     * @param ProjectService $projectService
     * @param LandService $landService
     */
    public function __construct(ProjectService $projectService, LandService $landService)
    {
        $this->projectService = $projectService;
        $this->landService = $landService;
    }

    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projectService->getProjects();
        $landsByCategory = $this->landService->getLandsByCategory();
        
        return view('projects.index', compact('projects', 'landsByCategory'));
    }

    /**
     * Display the specified project.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = $this->projectService->findBySlug($slug);
        $projects = $this->projectService->getProjects();

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project', 'projects'));
    }
}