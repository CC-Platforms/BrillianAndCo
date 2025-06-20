<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialities = [
            [
                'title' => 'Expert Guidance',
                'description' => 'Our team of experienced agents provide expert guidance through every step of your real estate journey.',
                'icon' => 'assets/icon/speciality-1-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-1-icon-2.svg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Market Knowledge',
                'description' => 'With deep understanding of the local market, we help you make informed decisions for buying, selling, or investing.',
                'icon' => 'assets/icon/speciality-2-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-2-icon-2.svg',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Personalized Service',
                'description' => 'We tailor our approach to your unique needs, ensuring you receive personalized attention and solutions.',
                'icon' => 'assets/icon/speciality-3-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-3-icon-2.svg',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Innovative Solutions',
                'description' => 'Embracing technology and innovation, we revolutionize the real estate experience for our clients.',
                'icon' => 'assets/icon/speciality-4-icon-1.svg',
                'sm_icon' => 'assets/icon/speciality-4-icon-2.svg',
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($specialities as $speciality) {
            Speciality::create($speciality);
        }
    }
}
