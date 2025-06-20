<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Land;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get properties from database (replacing ProjectService)
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Get lands grouped by category (replacing LandService)
        $landsByCategory = Land::where('is_active', true)
            ->get()
            ->groupBy('category');
        
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
        // Get single property by slug from database
        $project = Property::where('slug', $slug)
            ->where('is_active', true)
            ->first();
        
        // Get all properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project', 'projects'));
    }
}