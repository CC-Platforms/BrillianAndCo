<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get properties from database (replacing ProjectService)
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        
        // Get team members from database (replacing hardcoded array)
        $teamMembers = TeamMember::where('is_active', true)
            ->get();

        return view('about.index', compact('teamMembers', 'projects'));
    }
}