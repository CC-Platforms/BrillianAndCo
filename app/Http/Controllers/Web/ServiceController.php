<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Service;
use App\Models\Speciality;
use App\Http\Services\BricoreService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $bricoreService;

    /**
     * Constructor to inject dependencies.
     *
     * @param BricoreService $bricoreService
     */
    public function __construct(BricoreService $bricoreService)
    {
        $this->bricoreService = $bricoreService;
    }

    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get specialities from database
        $specialities = Speciality::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        
        // Get core services from database
        $coreServices = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        
        // Keep stats hardcoded as planned
        $stats = $this->bricoreService->getStats();
        
        // Get properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

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
        // Get service from database by slug
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->first();
        
        // Get properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        if (!$service) {
            abort(404);
        }

        return view('services.show', compact('service', 'projects'));
    }
}