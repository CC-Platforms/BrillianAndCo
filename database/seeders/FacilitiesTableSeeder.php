<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'title' => 'Property Management Facilities',
                'subtitle' => 'Comprehensive Management Solutions',
                'description' => 'Our state-of-the-art property management facilities ensure optimal maintenance and management of all properties under our care. We provide comprehensive solutions that keep properties in excellent condition while maximizing returns for owners.',
                'features_list_json' => [
                    '24/7 Security Monitoring',
                    'Professional Maintenance Services',
                    'Tenant Screening and Management',
                    'Rent Collection Services',
                    'Property Inspections',
                    'Emergency Response System',
                    'Landscaping and Grounds Keeping',
                    'Financial Reporting and Analysis'
                ],
                'gallery_images_json' => [
                    'assets/img/facility-img.jpg',
                ],
                'is_active' => true,
            ],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
} 