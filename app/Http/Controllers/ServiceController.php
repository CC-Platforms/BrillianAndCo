<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Static data for services
        $specialities = [
            [
                'id' => 1,
                'icon' => 'assets/icon/speciality-1-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-1-icon-2.svg',
                'title' => 'Property Insurance',
                'description' => 'We offer our customer property protection of liability coverage and insurance for their better life.'
            ],
            [
                'id' => 2,
                'icon' => 'assets/icon/speciality-2-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-2-icon-2.svg',
                'title' => 'Best Price',
                'description' => 'Not sure what you should be charging for your property? No need to worry, let us do the numbers for you.'
            ],
            [
                'id' => 3,
                'icon' => 'assets/icon/speciality-3-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-3-icon-2.svg',
                'title' => 'Lowest Commission',
                'description' => 'You no longer have to negotiate commissions and haggle with other agents it only cost 2%!'
            ],
            [
                'id' => 4,
                'icon' => 'assets/icon/speciality-4-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-4-icon-2.svg',
                'title' => 'Overall Control',
                'description' => 'Get a virtual tour, and schedule visits before you rent or buy any properties. You get overall control.'
            ]
        ];

        $coreServices = [
            [
                'id' => 1,
                'slug' => 'buy-a-home',
                'icon' => 'flaticon-button-aero',
                'title' => 'Buy a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Find a Home'
            ],
            [
                'id' => 2,
                'slug' => 'rent-a-home',
                'icon' => 'flaticon-right-aro',
                'title' => 'Rent a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Find a Home'
            ],
            [
                'id' => 3,
                'slug' => 'sell-a-home',
                'icon' => 'flaticon-buildings',
                'title' => 'Buy a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Sell a Home'
            ]
        ];

        $stats = [
            [
                'icon' => 'flaticon-excavator',
                'number' => '260+',
                'text' => 'Total Construction'
            ],
            [
                'icon' => 'flaticon-interior-design',
                'number' => '110+',
                'text' => 'Apartio Rooms'
            ],
            [
                'icon' => 'flaticon-buildings',
                'number' => '190+',
                'text' => 'Apartments Sold'
            ],
            [
                'icon' => 'flaticon-map',
                'number' => '560+',
                'text' => 'Total Area Sq'
            ]
        ];

        return view('services.index', compact('specialities', 'coreServices', 'stats'));
    }

    /**
     * Display the specified service.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Find the service by slug
        $coreServices = [
            [
                'id' => 1,
                'slug' => 'buy-a-home',
                'icon' => 'flaticon-button-aero',
                'title' => 'Buy a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Find a Home',
                'full_description' => 'Our "Buy a Home" service helps you find your dream home among over 1 million+ listings. We provide personalized support throughout the entire buying process, from initial search to final closing. Our experienced agents will guide you through property viewings, price negotiations, and all paperwork, ensuring a smooth transaction. We also offer mortgage calculator tools and connect you with trusted financial advisors to secure the best rates.'
            ],
            [
                'id' => 2,
                'slug' => 'rent-a-home',
                'icon' => 'flaticon-right-aro',
                'title' => 'Rent a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Find a Home',
                'full_description' => 'Our "Rent a Home" service provides access to thousands of rental properties across the country. We specialize in finding rentals that match your budget, location preferences, and lifestyle needs. Our rental specialists will help you schedule viewings, understand lease terms, and communicate with landlords. We also offer tenant screening services and can assist with lease negotiations to ensure you get the best terms possible.'
            ],
            [
                'id' => 3,
                'slug' => 'sell-a-home',
                'icon' => 'flaticon-buildings',
                'title' => 'Sell a Home',
                'description' => 'over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.',
                'button_text' => 'Sell a Home',
                'full_description' => 'Our "Sell a Home" service helps homeowners achieve the best possible price for their property in the shortest amount of time. We provide professional photography, staging advice, and strategic pricing analysis to maximize your home\'s appeal. Our marketing team will showcase your property across multiple channels, including our website, social media, and real estate networks. We handle all negotiations and paperwork, making the selling process stress-free.'
            ]
        ];

        $service = collect($coreServices)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        return view('services.show', compact('service'));
    }
}