<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Land;
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
        // Get featured properties (using Property model instead of ProjectService)
        $projects = Property::where('is_featured', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Get featured properties specifically for the featured properties section
        $featuredProperties = Property::where('is_featured', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        
        // Get lands grouped by category (using Land model instead of LandService)
        $landsByCategory = Land::where('is_active', true)
            ->get()
            ->groupBy('category');
        
        return view('home.index', compact('projects', 'featuredProperties', 'landsByCategory'));
    }
}