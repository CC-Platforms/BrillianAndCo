<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Sales and Purchase of Lands',
                'slug' => 'sales-purchase-lands',
                'icon' => 'flaticon-buildings',
                'description' => 'Specialized in land transactions, we help you find, evaluate, and acquire prime land parcels for residential, commercial, or investment purposes.',
                'full_description' => 'At Brillian And Co Real Estate, our Sales and Purchase of Lands service focuses specifically on land transactions across various categories. Whether you\'re looking for residential plots to build your dream home, commercial land for business development, or agricultural land for farming ventures, our team provides expert guidance throughout the process. We conduct thorough due diligence on land titles, zoning regulations, and development potential. Our services include land valuation, legal documentation assistance, survey coordination, and negotiation support. With our extensive network and deep understanding of land markets, we help clients secure the best deals while ensuring all legal requirements are met for a smooth and secure transaction.',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Rental Services',
                'slug' => 'rental-services',
                'icon' => 'flaticon-right-aro',
                'description' => 'Comprehensive rental solutions connecting property owners with qualified tenants while ensuring seamless property management and tenant satisfaction.',
                'full_description' => 'Our Rental Services at Brillian And Co Real Estate provide end-to-end solutions for both property owners and tenants. For landlords, we offer professional tenant screening, property marketing, rent collection, maintenance coordination, and lease management. We ensure your properties are well-maintained and generate optimal rental income. For tenants, we provide access to a curated selection of rental properties including apartments, houses, and commercial spaces. Our team assists with property viewings, lease negotiations, and ongoing tenant support. We handle all documentation, ensure fair lease terms, and maintain clear communication between all parties to create positive rental experiences that benefit everyone involved.',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Property Management',
                'slug' => 'property-management',
                'icon' => 'flaticon-button-aero',
                'description' => 'Professional property management services that maximize your investment returns while maintaining property value and ensuring tenant satisfaction.',
                'full_description' => 'Brillian And Co Real Estate\'s Property Management service takes the hassle out of property ownership. We provide comprehensive management solutions including tenant acquisition and screening, rent collection, property maintenance and repairs, financial reporting, and legal compliance. Our experienced team conducts regular property inspections, coordinates necessary maintenance work, and ensures properties meet all safety and regulatory standards. We also handle tenant relations, address concerns promptly, and work to minimize vacancy periods. With our professional property management, property owners can enjoy passive income while we handle all day-to-day operations, preserve property value, and maximize rental returns through strategic management practices.',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Property Development',
                'slug' => 'property-development',
                'icon' => 'flaticon-button-aero',
                'description' => 'From concept to completion, we manage property development projects that transform raw land into valuable residential and commercial properties.',
                'full_description' => 'Our Property Development service at Brillian And Co Real Estate encompasses the entire development lifecycle from initial feasibility studies to project completion. We identify prime development opportunities, conduct market research, secure necessary permits and approvals, and coordinate with architects, contractors, and other professionals. Our development projects include residential estates, commercial complexes, and mixed-use developments. We manage construction timelines, quality control, and budget oversight to ensure projects are completed on schedule and within budget. Whether you\'re an investor looking to develop land or seeking partnership opportunities in development projects, our experienced team provides the expertise and resources needed to bring profitable property developments to market.',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Property Valuation',
                'slug' => 'property-valuation',
                'icon' => 'flaticon-button-aero',
                'description' => 'Accurate and professional property assessments providing detailed valuations for buying, selling, insurance, and investment decision-making.',
                'full_description' => 'Brillian And Co Real Estate\'s Property Valuation service provides comprehensive and accurate property assessments conducted by certified valuation professionals. We offer detailed valuation reports for various purposes including sales transactions, purchase decisions, insurance requirements, mortgage applications, tax assessments, and investment analysis. Our valuation process involves thorough property inspection, comparative market analysis, assessment of property condition, location factors, and current market trends. We utilize industry-standard valuation methods and provide detailed reports that include property descriptions, photographs, market comparisons, and final valuation conclusions. Our accurate valuations help clients make informed decisions whether buying, selling, refinancing, or planning investments in real estate.',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Real Estate Consulting',
                'slug' => 'real-estate-consulting',
                'icon' => 'flaticon-button-aero',
                'description' => 'Expert advisory services providing strategic guidance on real estate investments, market trends, and property-related business decisions.',
                'full_description' => 'Our Real Estate Consulting service at Brillian And Co Real Estate offers strategic advisory solutions for clients seeking expert guidance in property-related matters. We provide market analysis, investment strategy development, feasibility studies, and business planning for real estate ventures. Our consulting services cover residential and commercial property investments, development opportunities, portfolio optimization, and market entry strategies. We also offer specialized consulting for corporate clients including location selection for businesses, real estate portfolio management, and asset optimization strategies. With our deep market knowledge and analytical expertise, we help clients navigate complex real estate decisions, identify opportunities, mitigate risks, and develop strategies that align with their financial goals and business objectives.',
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
