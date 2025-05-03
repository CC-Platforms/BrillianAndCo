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
                'title' => 'Expert Guidance',
                'description' => 'Our team of experienced agents provide expert guidance through every step of your real estate journey.'
            ],
            [
                'id' => 2,
                'icon' => 'assets/icon/speciality-2-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-2-icon-2.svg',
                'title' => 'Market Knowledge',
                'description' => 'With deep understanding of the local market, we help you make informed decisions for buying, selling, or investing.'
            ],
            [
                'id' => 3,
                'icon' => 'assets/icon/speciality-3-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-3-icon-2.svg',
                'title' => 'Personalized Service',
                'description' => 'We tailor our approach to your unique needs, ensuring you receive personalized attention and solutions.'
            ],
            [
                'id' => 4,
                'icon' => 'assets/icon/speciality-4-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-4-icon-2.svg',
                'title' => 'Innovative Solutions',
                'description' => 'Embracing technology and innovation, we revolutionize the real estate experience for our clients.'
            ]
        ];

        $coreServices = [
            [
                'id' => 1,
                'slug' => 'property-sales-purchase',
                'icon' => 'flaticon-buildings',
                'title' => 'Property Sales & Purchase',
                'description' => 'From finding your dream home to closing the deal, our experienced team guides you through every step of buying or selling property.',
                'button_text' => 'Learn More'
            ],
            [
                'id' => 2,
                'slug' => 'rental-services',
                'icon' => 'flaticon-right-aro',
                'title' => 'Rental Services',
                'description' => 'Whether you\'re looking to rent or are a property owner seeking tenants, our rental services ensure a smooth and beneficial experience.',
                'button_text' => 'Learn More'
            ],
            [
                'id' => 3,
                'slug' => 'investment-services',
                'icon' => 'flaticon-button-aero',
                'title' => 'Investment Services',
                'description' => 'Maximize your returns with our expert market analysis and investment guidance, helping you identify high-potential real estate opportunities.',
                'button_text' => 'Learn More'
            ]
        ];

        $stats = [
            [
                'icon' => 'flaticon-buildings',
                'number' => '500+',
                'text' => 'Properties Sold'
            ],
            [
                'icon' => 'flaticon-interior-design',
                'number' => '300+',
                'text' => 'Rental Properties'
            ],
            [
                'icon' => 'flaticon-map',
                'number' => '1000+',
                'text' => 'Happy Clients'
            ],
            [
                'icon' => 'flaticon-excavator',
                'number' => '50+',
                'text' => 'Expert Agents'
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
                'slug' => 'property-sales-purchase',
                'icon' => 'flaticon-buildings',
                'title' => 'Property Sales & Purchase',
                'description' => 'From finding your dream home to closing the deal, our experienced team guides you through every step of buying or selling property.',
                'button_text' => 'Learn More',
                'full_description' => 'At Brillia And Co Real Estate, our Property Sales & Purchase service is designed to make your real estate transactions seamless and successful. Our dedicated team of professionals will assist you through every stage of the buying or selling process. For buyers, we help you find properties that match your criteria, arrange viewings, negotiate the best price, and handle all paperwork. For sellers, we provide market analysis to price your property competitively, create compelling listings, market your property effectively, and manage negotiations to get you the best possible deal. With our deep market knowledge and commitment to excellence, we ensure a smooth transaction from start to finish.'
            ],
            [
                'id' => 2,
                'slug' => 'rental-services',
                'icon' => 'flaticon-right-aro',
                'title' => 'Rental Services',
                'description' => 'Whether you\'re looking to rent or are a property owner seeking tenants, our rental services ensure a smooth and beneficial experience.',
                'button_text' => 'Learn More',
                'full_description' => 'Our Rental Services at Brillia And Co Real Estate cater to both property owners and potential tenants. For property owners, we provide tenant screening, property management, rent collection, and maintenance coordination. We ensure your property stays in excellent condition while maximizing your rental income. For tenants, we offer access to a wide range of rental properties that match your budget, location preferences, and lifestyle needs. Our team handles all the paperwork, explains lease terms clearly, and acts as a liaison between you and the property owner. We\'re committed to creating harmonious landlord-tenant relationships that benefit both parties.'
            ],
            [
                'id' => 3,
                'slug' => 'investment-services',
                'icon' => 'flaticon-button-aero',
                'title' => 'Investment Services',
                'description' => 'Maximize your returns with our expert market analysis and investment guidance, helping you identify high-potential real estate opportunities.',
                'button_text' => 'Learn More',
                'full_description' => 'Brillia And Co Real Estate\'s Investment Services are designed for clients looking to build wealth through real estate. Our investment experts provide comprehensive market analysis, identify high-potential properties, and develop strategies tailored to your investment goals. We help you understand market trends, ROI projections, and risk factors for informed decision-making. From residential to commercial properties, we guide you through the entire investment process. Our team also offers portfolio management services, regularly reviewing your real estate investments and suggesting adjustments to maximize returns. With our innovative approach and deep market understanding, we help transform your real estate investments into profitable assets.'
            ]
        ];

        $service = collect($coreServices)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        return view('services.show', compact('service'));
    }
}