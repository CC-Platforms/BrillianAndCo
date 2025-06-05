<?php

namespace App\Http\Services;

class LandService
{
    /**
     * Get all lands data.
     *
     * @return array
     */
    public function getLands(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'fast-selling-land-1',
                'image' => 'assets/img/brillian/properties_2/camsic_land.jpg',
                'images' => [
                    'assets/img/brillian/properties_2/camsic_land.jpg',
                    'assets/img/brillian/properties_2/camsic_land.jpg',
                    'assets/img/brillian/properties_2/camsic_land.jpg'
                ],
                'tag' => 'Featured',
                'price' => '8,500,000 XAF',
                'title' => 'Prime Land Plot A-1',
                'location' => 'Casmic, Buea, Cameroon',
                'area' => '400 m²',
                'category' => 'Fast Selling Lands',
                'description' => 'Prime investment opportunity in the rapidly developing Mile 16 area of Buea. This land offers excellent potential for both residential and commercial development with its strategic location near major roads and utilities. The relatively flat terrain makes construction straightforward, while its elevated position provides beautiful views. Perfect for land banking with significant appreciation potential.'
            ],
            [
                'id' => 2,
                'slug' => 'fast-selling-land-2',
                'image' => 'assets/img/brillian/properties_2/prime_land.jpg',
                'images' => [
                    'assets/img/brillian/properties_2/prime_land.jpg',
                    'assets/img/brillian/properties_2/prime_land.jpg',
                    'assets/img/brillian/properties_2/prime_land.jpg'
                ],
                'tag' => 'New',
                'price' => '15,000,000 XAF',
                'title' => 'Prime Land Plot B-2',
                'location' => 'Molyko New Layout, Buea',
                'area' => '400 m²',
                'category' => 'Fast Selling Lands',
                'description' => 'Exclusive land parcel in the prestigious Bokwango area, perfect for land banking. This investment opportunity features a gently sloping terrain with excellent natural drainage and mountain views. The land is situated in a rapidly appreciating area with nearby developments increasing property values. Secure your future with this strategic investment in one of Buea\'s most promising locations.'
            ],
            [
                'id' => 3,
                'slug' => 'developed-land-1',
                'image' => 'assets/img/land3.jpg',
                'images' => [
                    'assets/img/land3.jpg',
                    'assets/img/land3.jpg',
                    'assets/img/land3.jpg'
                ],
                'tag' => 'Premium',
                'price' => '8,500,000 XAF',
                'title' => 'Serviced Land Plot C-3',
                'location' => 'Camsic, Buea, Cameroon',
                'area' => '750 m²',
                'category' => 'Developed Lands',
                'description' => 'Fully developed land with all utilities already connected. This exceptional property includes water and electricity connections, drainage systems, and a secured perimeter. The land has been cleared, leveled, and is ready for immediate construction. Located in the vibrant Molyko area, it offers proximity to educational institutions, shopping centers, and healthcare facilities. Perfect for those looking to build without the hassle of infrastructure development.'
            ],
            [
                'id' => 4,
                'slug' => 'fast-developing-land-1',
                'image' => 'assets/img/land4.jpg',
                'images' => [
                    'assets/img/land4.jpg',
                    'assets/img/land4.jpg',
                    'assets/img/land4.jpg'
                ],
                'tag' => 'Hot Deal',
                'price' => '1,500,000 XAF',
                'title' => 'Development Land Plot D-4',
                'location' => 'Mile 16 Bwanda, Buea, Cameroon',
                'area' => '450 m²',
                'category' => 'Fast Developing Lands',
                'description' => 'Strategic investment in the rapidly developing Muea area. This land parcel is situated in a zone with ongoing infrastructure development, including new roads and utility expansions. The area is experiencing rapid growth with new residential and commercial properties, making this an excellent investment with high appreciation potential. Take advantage of the current pricing before development completion drives values higher.'
            ],
            [
                'id' => 5,
                'slug' => 'fast-developing-land-2',
                'image' => 'assets/img/land5.jpg',
                'images' => [
                    'assets/img/land5.jpg',
                    'assets/img/land5.jpg',
                    'assets/img/land5.jpg'
                ],
                'tag' => 'Investment',
                'price' => '6,000,000 XAF',
                'title' => 'Growth Area Land Plot E-5',
                'location' => 'Bokwai, Buea, Cameroon',
                'area' => '520 m²',
                'category' => 'Fast Developing Lands',
                'description' => 'Premium land in the emerging Tole region, poised for significant development. This property is part of an area designated for expansion with planned infrastructure improvements in the near future. The cooler climate and scenic environment make it attractive for residential development. Forward-thinking investors will recognize the potential as this area transforms into one of Buea\'s most desirable locations in the coming years.'
            ],
            [
                'id' => 6,
                'slug' => 'architectural-land-1',
                'image' => 'assets/img/brillian/properties_2/architecture_1.jpg',
                'images' => [
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg'
                ],
                'tag' => 'Architectural',
                'price' => '12,000,000 XAF',
                'title' => 'Modern Villa Plot F-6',
                'location' => 'Government Layout, Buea, Cameroon',
                'area' => '800 m² (20m x 40m)',
                'category' => 'Architecture',
                'description' => 'Exclusive architectural plot designed for luxury villa construction in the prestigious Government Layout area. This prime location features approved architectural plans for a modern 4-bedroom villa with contemporary design elements. The plot includes detailed foundation work, architectural drawings, and building permits. Perfect for discerning buyers seeking a turnkey solution for luxury residential development in one of Buea\'s most exclusive neighborhoods.'
            ],
            [
                'id' => 7,
                'slug' => 'architectural-land-2',
                'image' => 'assets/img/brillian/properties_2/architecture_2.jpg',
                'images' => [
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg',
                    'assets/img/brillian/properties_2/architecture_1.jpg'
                ],
                'tag' => 'Design Ready',
                'price' => '15,500,000 XAF',
                'title' => 'Contemporary Estate Plot G-7',
                'location' => 'Mile 17 Lysoka, Buea, Cameroon',
                'area' => '1,000 m² (25m x 40m)',
                'category' => 'Architecture',
                'description' => 'Spectacular estate plot with contemporary architectural designs for a luxury family compound. Features approved plans for a main residence, guest quarters, and recreational facilities. The architectural design incorporates sustainable building practices, natural lighting optimization, and panoramic mountain views. This exceptional property includes landscape architecture plans and is situated in an exclusive gated community with 24/7 security and premium amenities.'
            ],
        ];
    }

    /**
     * Find a land by its slug.
     *
     * @param string $slug
     * @return array|null
     */
    public function findBySlug(string $slug): ?array
    {
        return collect($this->getLands())->firstWhere('slug', $slug);
    }

    /**
     * Get lands grouped by category.
     *
     * @return array
     */
    public function getLandsByCategory(): array
    {
        $lands = $this->getLands();
        $groupedLands = [];
        
        foreach ($lands as $land) {
            $category = $land['category'];
            if (!isset($groupedLands[$category])) {
                $groupedLands[$category] = [];
            }
            $groupedLands[$category][] = $land;
        }
        
        return $groupedLands;
    }
}