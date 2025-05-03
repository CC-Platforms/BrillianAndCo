<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $projects = [
            [
                'id' => 1,
                'slug' => 'palm-harbor',
                'image' => 'assets/img/project-1.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Palm Harbor',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
            [
                'id' => 2,
                'slug' => 'beverly-springfield',
                'image' => 'assets/img/project-2.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Beverly Springfield',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
            [
                'id' => 3,
                'slug' => 'faulkner-ave',
                'image' => 'assets/img/project-3.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Faulkner Ave',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
            [
                'id' => 4,
                'slug' => 'st-crystal',
                'image' => 'assets/img/project-4.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'St. Crystal',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
            [
                'id' => 5,
                'slug' => 'cove-red',
                'image' => 'assets/img/project-5.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Cove Red',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
            [
                'id' => 6,
                'slug' => 'tarpon-bay',
                'image' => 'assets/img/project-6.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Tarpon Bay',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²'
            ],
        ];

        return view('projects.index', compact('projects'));
    }

    /**
     * Display the specified project.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Find the project by slug
        $projects = [
            [
                'id' => 1,
                'slug' => 'palm-harbor',
                'image' => 'assets/img/project-1.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Palm Harbor',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'Palm Harbor is a luxurious residential property offering modern amenities and comfortable living spaces. Located in a prime area with easy access to shopping centers, schools, and parks, this property is perfect for families and professionals alike. The spacious layout includes a modern kitchen, large living areas, and stunning views.'
            ],
            [
                'id' => 2,
                'slug' => 'beverly-springfield',
                'image' => 'assets/img/project-2.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Beverly Springfield',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'Beverly Springfield offers upscale living with contemporary design and premium finishes. This elegant property features open floor plans, high ceilings, and abundant natural light. The community includes swimming pools, fitness centers, and beautifully landscaped gardens, providing a resort-like atmosphere for residents.'
            ],
            [
                'id' => 3,
                'slug' => 'faulkner-ave',
                'image' => 'assets/img/project-3.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Faulkner Ave',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'Faulkner Ave properties combine classic architectural elements with modern conveniences. These charming homes feature well-appointed interiors, private outdoor spaces, and secure parking. The neighborhood is known for its friendly community and convenient location near cultural attractions, dining options, and transportation hubs.'
            ],
            [
                'id' => 4,
                'slug' => 'st-crystal',
                'image' => 'assets/img/project-4.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'St. Crystal',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'St. Crystal is a prestigious residential development featuring innovative design and cutting-edge technology. These smart homes come equipped with the latest home automation systems, energy-efficient appliances, and sustainable building materials. The exclusive community offers top-tier amenities, including a concierge service, spa facilities, and private event spaces.'
            ],
            [
                'id' => 5,
                'slug' => 'cove-red',
                'image' => 'assets/img/project-5.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Cove Red',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'Cove Red is a waterfront property offering breathtaking views and a tranquil living environment. The thoughtfully designed spaces include premium fixtures, gourmet kitchens, and spa-inspired bathrooms. Residents enjoy access to private docks, waterside trails, and outdoor recreational areas, creating a perfect balance of luxury and natural beauty.'
            ],
            [
                'id' => 6,
                'slug' => 'tarpon-bay',
                'image' => 'assets/img/project-6.jpg',
                'tag' => 'Popular',
                'price' => '$4,500',
                'period' => 'Month',
                'title' => 'Tarpon Bay',
                'location' => '2821 Lake Sevilla, Palm Harbor, TX',
                'beds' => 3,
                'bathrooms' => 2,
                'area' => '6x7.5 m²',
                'description' => 'Tarpon Bay is an exclusive residential enclave designed for those seeking privacy and sophistication. These architecturally distinctive homes feature custom details, premium materials, and thoughtful layouts. The secure, gated community includes tennis courts, walking paths, and community gathering spaces, fostering a sense of belonging and luxury living.'
            ],
        ];

        $project = collect($projects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}