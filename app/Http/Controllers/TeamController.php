<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjectService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $teamMembers = [
        [
            'id' => 1,
            'name' => 'Pah Brillian Beng', // You might replace these with more local names if preferred
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
                ['title' => 'Market Analysis (SW Region)', 'value' => 75], // Added specificity
                ['title' => 'Contract Drafting', 'value' => 80]
            ]
        ],
        // [
        //     'id' => 2,
        //     'name' => 'Jane Smith', // You might replace these with more local names if preferred
        //     'slug' => 'jane-smith',
        //     'position' => 'Property Manager',
        //     'phone' => '+237652383695', // Cameroon phone format
        //     'email' => 'jane@example.com',
        //     'website' => 'https://janesmith.com',
        //     'experience' => '10 Years',
        //     'availability' => 'Part Time',
        //     'description' => 'Jane oversees property operations ensuring tenant satisfaction and property maintenance across Douala and Yaoundé portfolios.', // Added city context
        //     'image' => 'assets/img/team-2.jpg',
        //     'social' => [
        //         'facebook' => '#',
        //         'twitter' => '#',
        //         'linkedin' => '#',
        //         'instagram' => '#'
        //     ],
        //     'skills' => [
        //         ['title' => 'Maintenance Coordination', 'value' => 88],
        //         ['title' => 'Budget Management', 'value' => 82],
        //         ['title' => 'Conflict Resolution', 'value' => 80],
        //         ['title' => 'Team Leadership', 'value' => 85]
        //     ]
        // ],
        // // --- Added Team Members Start ---
        // [
        //     'id' => 3,
        //     'name' => 'Divine Fotso', // More local name example
        //     'slug' => 'divine-fotso',
        //     'position' => 'Marketing Specialist',
        //     'phone' => '+237677123456', // Example Cameroon phone format
        //     'email' => 'divine@example.com',
        //     'website' => 'https://example-realestate.cm/team/divine', // Example website
        //     'experience' => '5 Years',
        //     'availability' => 'Full Time Employee',
        //     'description' => 'Divine leverages digital marketing strategies to connect properties with the right clients across Cameroon.',
        //     'image' => 'assets/img/team-2.jpg', // Assumes team-3.jpg exists
        //     'social' => [
        //         'facebook' => 'https://facebook.com/divinefotso.realestate', // Example social link
        //         'twitter' => '#',
        //         'linkedin' => 'https://linkedin.com/in/divinefotso', // Example social link
        //         'instagram' => '#'
        //     ],
        //     'skills' => [
        //         ['title' => 'Digital Marketing', 'value' => 90],
        //         ['title' => 'Content Creation', 'value' => 85],
        //         ['title' => 'SEO Optimization', 'value' => 80],
        //         ['title' => 'Lead Generation', 'value' => 88]
        //     ]
        // ],
        // [
        //     'id' => 4,
        //     'name' => 'Aisha Bello', // More local name example
        //     'slug' => 'aisha-bello',
        //     'position' => 'Client Relations Manager',
        //     'phone' => '+237699876543', // Example Cameroon phone format
        //     'email' => 'aisha@example.com',
        //     'website' => 'https://example-realestate.cm/team/aisha', // Example website
        //     'experience' => '7 Years',
        //     'availability' => 'Full Time Employee',
        //     'description' => 'Aisha builds and maintains strong client relationships, ensuring a smooth journey from inquiry to closing.',
        //     'image' => 'assets/img/team-2.jpg', // Assumes team-4.jpg exists
        //     'social' => [
        //         'facebook' => '#',
        //         'twitter' => '#',
        //         'linkedin' => 'https://linkedin.com/in/aishabello', // Example social link
        //         'instagram' => 'https://instagram.com/aishabello.realestate' // Example social link
        //     ],
        //     'skills' => [
        //         ['title' => 'Communication Skills', 'value' => 95],
        //         ['title' => 'Problem Solving', 'value' => 85],
        //         ['title' => 'CRM Management', 'value' => 80],
        //         ['title' => 'Client Retention', 'value' => 90]
        //     ]
        // ],
        // [
        //     'id' => 5,
        //     'name' => 'Paul Tchamba', // More local name example
        //     'slug' => 'paul-tchamba',
        //     'position' => 'Lead Architect & Consultant',
        //     'phone' => '+237655112233', // Example Cameroon phone format
        //     'email' => 'paul@example.com',
        //     'website' => 'https://paultchamba-designs.com', // Example website
        //     'experience' => '15 Years',
        //     'availability' => 'Consultant',
        //     'description' => 'Paul provides expert architectural design and consultation for premium residential and commercial projects.',
        //     'image' => 'assets/img/team-2.jpg', // Assumes team-5.jpg exists
        //     'social' => [
        //         'facebook' => '#',
        //         'twitter' => '#',
        //         'linkedin' => 'https://linkedin.com/in/paultchamba', // Example social link
        //         'instagram' => '#'
        //     ],
        //     'skills' => [
        //         ['title' => 'Architectural Design', 'value' => 92],
        //         ['title' => 'Project Management', 'value' => 88],
        //         ['title' => 'Sustainable Design', 'value' => 85],
        //         ['title' => 'Building Codes & Regulations (CEMAC)', 'value' => 90] // Added regional context
        //     ]
        // ]
        // --- Added Team Members End ---
    ];    

    public function index()
    {
        $projectService = new ProjectService();
        $projects = $projectService->getProjects();
        return view('team.index', ['teamMembers' => $this->teamMembers, 'projects' => $projects]);
    }

    public function show($slug)
    {
        $teamMember = collect($this->teamMembers)->firstWhere('slug', $slug);
        $projectService = new ProjectService();
        $projects = $projectService->getProjects();

        if (!$teamMember) {
            abort(404, 'Team member not found');
        }

        return view('team.show', compact('teamMember', 'projects'));
    }
}
