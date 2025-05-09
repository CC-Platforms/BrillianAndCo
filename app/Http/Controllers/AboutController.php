<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
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
        $projectService = new ProjectService();
        $projects = $projectService->getProjects();
        $teamMembers = [
            [
                'id' => 1,
                'name' => 'Pah Brillian Beng',
                'slug' => 'pah-brillian-beng',
                'position' => 'Chief Executive Officer',
                'phone' => '+237 652383694', 
                'email' => 'john@example.com',
                'website' => 'https://johndoe.com',
                'experience' => '8 Years',
                'availability' => 'Full Time',
                'description' => 'Pah Brillian Beng is a seasoned real estate agent with extensive experience in residential and commercial properties in Buea and Limbe.',
                'image' => 'assets/img/brillian/ceo_image.jpg',
                'social' => [
                    'facebook' => 'https://www.facebook.com/share/197AyYyroV/?mibextid=wwXIfr',
                    'tiktok' => 'https://www.tiktok.com/@agentbrillian1?_t=ZM-8w2zfFhyJ8P&_r=1',
                    'instagram' => 'https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr',
                    'linkedin' => 'https://cm.linkedin.com/in/pah-brillian-beng-a3908b1a6',
                ],
                'skills' => [
                    ['title' => 'Property Negotiation', 'value' => 85],
                    ['title' => 'Client Relations', 'value' => 90],
                    ['title' => 'Market Analysis (SW Region)', 'value' => 75],
                    ['title' => 'Contract Drafting', 'value' => 80]
                ]
            ],
        ];

        return view('about.index', compact('teamMembers', 'projects'));
    }
}