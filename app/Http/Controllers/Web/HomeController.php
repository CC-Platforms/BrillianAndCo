<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Land;
use App\Models\Facility;
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
        // Get all active properties for the projects section (not just featured)
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // Get featured properties specifically for the featured properties section
        $featuredProperties = Property::where('is_featured', true)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();
        
        // Get lands grouped by category (using Land model instead of LandService)
        $landsByCategory = Land::where('is_active', true)
            ->get()
            ->groupBy('category');
        
        // Get active facilities for the facilities section
        $facilities = Facility::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('home.index', compact('projects', 'featuredProperties', 'landsByCategory', 'facilities'));
    }
}