<?php

namespace Database\Seeders;

use App\Models\Land;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lands = [
            [
                'title' => 'Prime Land Plot A-1',
                'slug' => 'fast-selling-land-1',
                'price' => '8,500,000 XAF',
                'location' => 'Casmic, Buea, Cameroon',
                'area' => '400 m²',
                'category' => 'Fast Selling Lands',
                'description' => 'Prime investment opportunity in the rapidly developing Mile 16 area of Buea. This land offers excellent potential for both residential and commercial development with its strategic location near major roads and utilities. The relatively flat terrain makes construction straightforward, while its elevated position provides beautiful views. Perfect for land banking with significant appreciation potential.',
                'featured_image' => 'assets/img/brillian/properties_2/camsic_land.jpg',
                'gallery_images_json' => [
                    'assets/img/brillian/properties_2/camsic_land.jpg',
                    'assets/img/brillian/properties_2/camsic_land.jpg',
                    'assets/img/brillian/properties_2/camsic_land.jpg'
                ],
                'tag' => 'Featured',
                'is_active' => true,
            ],
            [
                'title' => 'Prime Land Plot B-2',
                'slug' => 'fast-selling-land-2',
                'price' => '15,000,000 XAF',
                'location' => 'Molyko New Layout, Buea',
                'area' => '400 m²',
                'category' => 'Fast Selling Lands',
                'description' => 'Exclusive land parcel in the prestigious Bokwango area, perfect for land banking. This investment opportunity features a gently sloping terrain with excellent natural drainage and mountain views. The land is situated in a rapidly appreciating area with nearby developments increasing property values. Secure your future with this strategic investment in one of Buea\'s most promising locations.',
                'featured_image' => 'assets/img/brillian/properties_2/prime_land.jpg',
                'gallery_images_json' => [
                    'assets/img/brillian/properties_2/prime_land.jpg',
                    'assets/img/brillian/properties_2/prime_land.jpg',
                    'assets/img/brillian/properties_2/prime_land.jpg'
                ],
                'tag' => 'New',
                'is_active' => true,
            ],
            [
                'title' => 'Serviced Land Plot C-3',
                'slug' => 'developed-land-1',
                'price' => '8,500,000 XAF',
                'location' => 'Camsic, Buea, Cameroon',
                'area' => '750 m²',
                'category' => 'Developed Lands',
                'description' => 'Fully developed land with all utilities already connected. This exceptional property includes water and electricity connections, drainage systems, and a secured perimeter. The land has been cleared, leveled, and is ready for immediate construction. Located in the vibrant Molyko area, it offers proximity to educational institutions, shopping centers, and healthcare facilities. Perfect for those looking to build without the hassle of infrastructure development.',
                'featured_image' => 'assets/img/land3.jpg',
                'gallery_images_json' => [
                    'assets/img/land3.jpg',
                    'assets/img/land3.jpg',
                    'assets/img/land3.jpg'
                ],
                'tag' => 'Premium',
                'is_active' => true,
            ],
            [
                'title' => 'Development Land Plot D-4',
                'slug' => 'fast-developing-land-1',
                'price' => '1,500,000 XAF',
                'location' => 'Mile 16 Bwanda, Buea, Cameroon',
                'area' => '450 m²',
                'category' => 'Fast Developing Lands',
                'description' => 'Strategic investment in the rapidly developing Muea area. This land parcel is situated in a zone with ongoing infrastructure development, including new roads and utility expansions. The area is experiencing rapid growth with new residential and commercial properties, making this an excellent investment with high appreciation potential. Take advantage of the current pricing before development completion drives values higher.',
                'featured_image' => 'assets/img/land4.jpg',
                'gallery_images_json' => [
                    'assets/img/land4.jpg',
                    'assets/img/land4.jpg',
                    'assets/img/land4.jpg'
                ],
                'tag' => 'Hot Deal',
                'is_active' => true,
            ],
            [
                'title' => 'Growth Area Land Plot E-5',
                'slug' => 'fast-developing-land-2',
                'price' => '6,000,000 XAF',
                'location' => 'Bokwai, Buea, Cameroon',
                'area' => '520 m²',
                'category' => 'Fast Developing Lands',
                'description' => 'Premium land in the emerging Tole region, poised for significant development. This property is part of an area designated for expansion with planned infrastructure improvements in the near future. The cooler climate and scenic environment make it attractive for residential development. Forward-thinking investors will recognize the potential as this area transforms into one of Buea\'s most desirable locations in the coming years.',
                'featured_image' => 'assets/img/land5.jpg',
                'gallery_images_json' => [
                    'assets/img/land5.jpg',
                    'assets/img/land5.jpg',
                    'assets/img/land5.jpg'
                ],
                'tag' => 'Investment',
                'is_active' => true,
            ],
            [
                'title' => 'Modern Villa Plot F-6',
                'slug' => 'architectural-land-1',
                'price' => '12,000,000 XAF',
                'location' => 'Government Layout, Buea, Cameroon',
                'area' => '800 m² (20m x 40m)',
                'category' => 'Architecture',
                'description' => 'Exclusive architectural plot designed for luxury villa construction in the prestigious Government Layout area. This prime location features approved architectural plans for a modern 4-bedroom villa with contemporary design elements. The plot includes detailed foundation work, architectural drawings, and building permits. Perfect for discerning buyers seeking a turnkey solution for luxury residential development in one of Buea\'s most exclusive neighborhoods.',
                'featured_image' => 'assets/img/brillian/properties_2/architecture_1.jpg',
                'gallery_images_json' => [
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg'
                ],
                'tag' => 'Architectural',
                'is_active' => true,
            ],
            [
                'title' => 'Contemporary Estate Plot G-7',
                'slug' => 'architectural-land-2',
                'price' => '15,500,000 XAF',
                'location' => 'Mile 17 Lysoka, Buea, Cameroon',
                'area' => '1,000 m² (25m x 40m)',
                'category' => 'Architecture',
                'description' => 'Spectacular estate plot with contemporary architectural designs for a luxury family compound. Features approved plans for a main residence, guest quarters, and recreational facilities. The architectural design incorporates sustainable building practices, natural lighting optimization, and panoramic mountain views. This exceptional property includes landscape architecture plans and is situated in an exclusive gated community with 24/7 security and premium amenities.',
                'featured_image' => 'assets/img/brillian/properties_2/architecture_2.jpg',
                'gallery_images_json' => [
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg'
                ],
                'tag' => 'Design Ready',
                'is_active' => true,
            ],
        ];

        foreach ($lands as $land) {
            Land::create($land);
        }
    }
}
