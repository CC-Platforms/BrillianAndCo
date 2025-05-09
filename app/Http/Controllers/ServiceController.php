<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use App\Http\Services\BricoreService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $bricoreService;
    protected $projectService;

    /**
     * Constructor to inject dependencies.
     *
     * @param BricoreService $bricoreService
     * @param ProjectService $projectService
     */
    public function __construct(BricoreService $bricoreService, ProjectService $projectService)
    {
        $this->bricoreService = $bricoreService;
        $this->projectService = $projectService;
    }

    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = $this->bricoreService->getSpecialities();
        $coreServices = $this->bricoreService->getCoreServices();
        $stats = $this->bricoreService->getStats();
        $projects = $this->projectService->getProjects();

        return view('services.index', compact('specialities', 'coreServices', 'stats', 'projects'));
    }

    /**
     * Display the specified service.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $service = $this->bricoreService->findServiceBySlug($slug);
        $projects = $this->projectService->getProjects();

        if (!$service) {
            abort(404);
        }

        return view('services.show', compact('service', 'projects'));
    }
}