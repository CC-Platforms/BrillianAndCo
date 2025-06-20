<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // Get team members from database (replacing hardcoded array)
        $teamMembers = TeamMember::where('is_active', true)
            ->get();
        
        // Get properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
            
        return view('team.index', compact('teamMembers', 'projects'));
    }

    public function show($slug)
    {
        // Get team member by slug from database
        $teamMember = TeamMember::where('slug', $slug)
            ->where('is_active', true)
            ->first();
        
        // Get properties from database
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        if (!$teamMember) {
            abort(404, 'Team member not found');
        }

        return view('team.show', compact('teamMember', 'projects'));
    }
}
