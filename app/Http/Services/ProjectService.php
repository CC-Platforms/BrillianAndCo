<?php

namespace App\Http\Services;

class ProjectService
{
    /**
     * Get all projects data.
     *
     * @return array
     */
    public function getProjects(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'molyko-residence',
                'image' => 'assets/img/brillia1.jpg',
                'images' => [
                    'assets/img/brillia1.jpg',
                    'assets/img/brillia1.jpg',
                    'assets/img/brillia1.jpg'
                ],
                'tag' => 'Featured',
                'price' => '120,000 XAF',
                'period' => 'Month',
                'title' => 'Molyko Residence',
                'location' => 'Near University of Buea, Molyko, Buea, Cameroon',
                'beds' => 3,
                'bathrooms' => 2,
                'description' => 'Molyko Residence is a modern apartment complex ideally located near the University of Buea, perfect for students and faculty members. This vibrant property offers comfortable living with amenities including reliable water supply, backup power, and secure parking. The strategic location provides easy access to local markets, restaurants, and transportation hubs, making daily commuting hassle-free. The apartments feature spacious bedrooms, a well-equipped kitchen, and a cozy living area with beautiful views of the surrounding area.'
            ],
            [
                'id' => 2,
                'slug' => 'petit-paris-apartments',
                'image' => 'assets/img/brillia15.jpg',
                'images' => [
                    'assets/img/brillia15.jpg',
                    'assets/img/brillia16.jpg',
                    'assets/img/brillia15.jpg'
                ],
                'tag' => 'New',
                'price' => '85,000 XAF',
                'period' => 'Month',
                'title' => 'Petit Paris Apartments',
                'location' => 'Petit Paris, Buea, Cameroon',
                'beds' => 2,
                'bathrooms' => 2,
                'description' => 'Petit Paris Apartments offer stylish urban living in one of Buea\'s most vibrant neighborhoods. These newly constructed units feature contemporary designs with quality finishes, including ceramic tile flooring and modern fixtures. Residents enjoy 24-hour security, communal gardens, and a convenient location close to shops, cafes, and entertainment options. The apartments include air conditioning, built-in wardrobes, and balconies with city views, providing a perfect blend of comfort and convenience for young professionals and small families.'
            ],
            [
                'id' => 3,
                'slug' => 'mile-17-estate',
                'image' => 'assets/img/brillia7.jpg',
                'images' => [
                    'assets/img/brillia7.jpg',
                    'assets/img/brillia7.jpg',
                    'assets/img/brillia7.jpg'
                ],
                'tag' => 'Popular',
                'price' => '150,000 XAF',
                'period' => 'Month',
                'title' => 'Mile 17 Estate',
                'location' => 'Mile 17, Buea, Cameroon',
                'beds' => 4,
                'bathrooms' => 3,
                'description' => 'Mile 17 Estate is a prestigious residential development offering spacious family homes in a quiet, secure environment. The estate features well-planned houses with generous living spaces, including four bedrooms, a modern kitchen, and ample outdoor areas. Residents benefit from amenities such as a community center, children\'s playground, and landscaped gardens. The location provides a perfect balance of tranquility and accessibility, just minutes away from major roads connecting to Douala and other key destinations, making it ideal for families seeking comfort and convenience.'
            ],
            [
                'id' => 4,
                'slug' => 'bomaka-heights',
                'image' => 'assets/img/brillia5.jpg',
                'images' => [
                    'assets/img/brillia5.jpg',
                    'assets/img/brillia5.jpg',
                    'assets/img/brillia5.jpg'
                ],
                'tag' => 'Luxury',
                'price' => '180,000 XAF',
                'period' => 'Month',
                'title' => 'Bomaka Heights',
                'location' => 'Bomaka, Buea, Cameroon',
                'beds' => 3,
                'bathrooms' => 2,
                'description' => 'Bomaka Heights offers premium apartments in one of Buea\'s most sought-after neighborhoods. These thoughtfully designed units feature high-quality finishes, including granite countertops, hardwood floors, and custom cabinetry. The complex includes amenities such as a backup generator, water storage systems, and private parking. The elevated location provides spectacular views of Mount Cameroon and the surrounding landscape. With excellent security and proximity to major shopping centers, schools, and healthcare facilities, Bomaka Heights represents luxury living at its finest in Southwest Cameroon.'
            ],
            [
                'id' => 5,
                'slug' => 'mount-view-residence',
                'image' => 'assets/img/brillia4.jpg',
                'images' => [
                    'assets/img/brillia4.jpg',
                    'assets/img/brillia4.jpg',
                    'assets/img/brillia4.jpg'
                ],
                'tag' => 'Premium',
                'price' => '200,000 XAF',
                'period' => 'Month',
                'title' => 'Mount View Residence',
                'location' => 'Great Soppo, Buea, Cameroon',
                'beds' => 4,
                'bathrooms' => 3,
                'description' => 'Mount View Residence is an exclusive property offering unparalleled views of Mount Cameroon from its prime location in Great Soppo. This elegant residence features spacious rooms with high ceilings, large windows, and premium fixtures. The property includes a private garden, outdoor entertainment area, and covered parking. Security is ensured with a gated entrance and 24-hour personnel. The prestigious neighborhood provides access to upscale amenities, international schools, and fine dining establishments, making it perfect for diplomats, executives, and those seeking the finest accommodation in Buea.'
            ],
            [
                'id' => 6,
                'slug' => 'bokwango-gardens',
                'image' => 'assets/img/brillia11.jpg',
                'images' => [
                    'assets/img/brillia11.jpg',
                    'assets/img/brilia11.jpg',
                    'assets/img/brilia11.jpg'
                ],
                'tag' => 'Featured',
                'price' => '95,000 XAF',
                'period' => 'Month',
                'title' => 'Bokwango Gardens',
                'location' => 'Bokwango, Buea, Cameroon',
                'beds' => 3,
                'bathrooms' => 2,
                'description' => 'Bokwango Gardens is a charming residential complex nestled in the lush, peaceful neighborhood of Bokwango. The property offers a serene environment with beautifully landscaped surroundings and mountain views. Each unit features modern amenities, including fitted kitchens, spacious living areas, and private balconies. The development includes reliable utilities, internet connectivity, and 24-hour security. Located just minutes from the city center yet away from the hustle and bustle, Bokwango Gardens provides the perfect balance for those seeking a tranquil lifestyle with easy access to urban conveniences.'
            ],
        ];
    }

    /**
     * Find a project by its slug.
     *
     * @param string $slug
     * @return array|null
     */
    public function findBySlug(string $slug): ?array
    {
        return collect($this->getProjects())->firstWhere('slug', $slug);
    }
}