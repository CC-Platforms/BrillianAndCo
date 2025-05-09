<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
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
        $projectService = new ProjectService();
        $projects = $projectService->getProjects();
        
        return view('contact-us.index', ['projects' => $projects]);
    }
}