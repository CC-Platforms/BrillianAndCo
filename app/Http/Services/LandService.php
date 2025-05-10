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
                'image' => 'assets/img/land1.jpg',
                'images' => [
                    'assets/img/land1.jpg',
                    'assets/img/land1.jpg',
                    'assets/img/land1.jpg'
                ],
                'tag' => 'Featured',
                'price' => '4,000,000 XAF',
                'title' => 'Prime Land Plot A-1',
                'location' => 'Bokwango, Buea, Cameroon',
                'area' => '600 m² (10m x 40m)',
                'category' => 'Fast Selling Lands',
                'description' => 'Prime investment opportunity in the rapidly developing Mile 16 area of Buea. This land offers excellent potential for both residential and commercial development with its strategic location near major roads and utilities. The relatively flat terrain makes construction straightforward, while its elevated position provides beautiful views. Perfect for land banking with significant appreciation potential.'
            ],
            [
                'id' => 2,
                'slug' => 'fast-selling-land-2',
                'image' => 'assets/img/land2.jpg',
                'images' => [
                    'assets/img/land2.jpg',
                    'assets/img/land2.jpg',
                    'assets/img/land2.jpg'
                ],
                'tag' => 'New',
                'price' => '1,500,000 XAF',
                'title' => 'Premium Land Plot B-2',
                'location' => 'Mile 16, Buea, Cameroon',
                'area' => '500 m²',
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