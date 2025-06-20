<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page.
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
        
        return view('contact-us.index', ['projects' => $projects]);
    }
}