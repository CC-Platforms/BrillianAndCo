<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use App\Http\Services\BriCoreService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $briCoreService;
    protected $projectService;

    /**
     * Constructor to inject dependencies.
     *
     * @param BriCoreService $briCoreService
     * @param ProjectService $projectService
     */
    public function __construct(BriCoreService $briCoreService, ProjectService $projectService)
    {
        $this->briCoreService = $briCoreService;
        $this->projectService = $projectService;
    }

    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = $this->briCoreService->getSpecialities();
        $coreServices = $this->briCoreService->getCoreServices();
        $stats = $this->briCoreService->getStats();
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
        $service = $this->briCoreService->findServiceBySlug($slug);
        $projects = $this->projectService->getProjects();

        if (!$service) {
            abort(404);
        }

        return view('services.show', compact('service', 'projects'));
    }
}