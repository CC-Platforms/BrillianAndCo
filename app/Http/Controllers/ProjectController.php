<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;

    /**
     * Constructor to inject ProjectService dependency.
     *
     * @param ProjectService $projectService
     */
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projectService->getProjects();
        return view('projects.index', compact('projects'));
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