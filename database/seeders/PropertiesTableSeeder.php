<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'title' => 'Molyko Residence',
                'slug' => 'molyko-residence',
                'price' => '60k-90k XAF',
                'period' => 'Month',
                'location' => 'Molyko, Buea, Cameroon',
                'beds' => 3,
                'parlor' => 1,
                'kitchen' => 1,
                'bathroom' => 2,
                'description' => 'Molyko Residence is a modern apartment complex ideally located near the University of Buea, perfect for students and faculty members. This vibrant property offers comfortable living with amenities including reliable water supply, backup power, and secure parking. The strategic location provides easy access to local markets, restaurants, and transportation hubs, making daily commuting hassle-free. The apartments feature spacious bedrooms, a well-equipped kitchen, and a cozy living area with beautiful views of the surrounding area.',
                'featured_image' => 'assets/img/brillian/properties_2/brown_building_projects.jpg',
                'tag' => 'New',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Molyko Apartments',
                'slug' => 'molyko-apartments',
                'price' => '100,000 XAF',
                'period' => 'Month',
                'location' => 'Molyko, Buea, Cameroon',
                'beds' => 2,
                'parlor' => 1,
                'kitchen' => 1,
                'bathroom' => 2,
                'description' => 'Petit Paris Apartments offer stylish urban living in one of Buea\'s most vibrant neighborhoods. These newly constructed units feature contemporary designs with quality finishes, including ceramic tile flooring and modern fixtures. Residents enjoy 24-hour security, communal gardens, and a convenient location close to shops, cafes, and entertainment options. The apartments include air conditioning, built-in wardrobes, and balconies with city views, providing a perfect blend of comfort and convenience for young professionals and small families.',
                'featured_image' => 'assets/img/brillian/properties_2/brown_building_1.jpg',
                'tag' => 'New',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Mile 17 Estate',
                'slug' => 'mile-17-estate',
                'price' => '40,000 XAF',
                'period' => 'Month',
                'location' => 'Mile 17, Buea, Cameroon',
                'beds' => 4,
                'parlor' => 2,
                'kitchen' => 1,
                'bathroom' => 3,
                'description' => 'Mile 17 Estate is a prestigious residential development offering spacious family homes in a quiet, secure environment. The estate features well-planned houses with generous living spaces, including four bedrooms, a modern kitchen, and ample outdoor areas. Residents benefit from amenities such as a community center, children\'s playground, and landscaped gardens. The location provides a perfect balance of tranquility and accessibility, just minutes away from major roads connecting to Douala and other key destinations, making it ideal for families seeking comfort and convenience.',
                'featured_image' => 'assets/img/brillian/properties_2/white_apart_brown_door.jpg',
                'tag' => 'New',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Molyko Heights',
                'slug' => 'molyko-heights',
                'price' => '80,000 XAF',
                'period' => 'Month Heights',
                'location' => 'Molyko, Buea, Cameroon',
                'beds' => 3,
                'parlor' => 1,
                'kitchen' => 1,
                'bathroom' => 2,
                'description' => 'Bomaka Heights offers premium apartments in one of Buea\'s most sought-after neighborhoods. These thoughtfully designed units feature high-quality finishes, including granite countertops, hardwood floors, and custom cabinetry. The complex includes amenities such as a backup generator, water storage systems, and private parking. The elevated location provides spectacular views of Mount Cameroon and the surrounding landscape. With excellent security and proximity to major shopping centers, schools, and healthcare facilities, Bomaka Heights represents luxury living at its finest in Southwest Cameroon.',
                'featured_image' => 'assets/img/brillian/properties_2/white_brown_building.jpg',
                'tag' => 'New',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Mount View Residence',
                'slug' => 'mount-view-residence',
                'price' => '100,000 XAF',
                'period' => 'Month',
                'location' => 'Great Soppo, Buea, Cameroon',
                'beds' => 4,
                'parlor' => 2,
                'kitchen' => 1,
                'bathroom' => 3,
                'description' => 'Mount View Residence is an exclusive property offering unparalleled views of Mount Cameroon from its prime location in Great Soppo. This elegant residence features spacious rooms with high ceilings, large windows, and premium fixtures. The property includes a private garden, outdoor entertainment area, and covered parking. Security is ensured with a gated entrance and 24-hour personnel. The prestigious neighborhood provides access to upscale amenities, international schools, and fine dining establishments, making it perfect for diplomats, executives, and those seeking the finest accommodation in Buea.',
                'featured_image' => 'assets/img/brillian/properties_2/marble_room_3.jpg',
                'tag' => 'Premium',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Bokwango Gardens',
                'slug' => 'bokwango-gardens',
                'price' => '95,000 XAF',
                'period' => 'Month',
                'location' => 'Bokwango, Buea, Cameroon',
                'beds' => 3,
                'parlor' => 1,
                'kitchen' => 1,
                'bathroom' => 2,
                'description' => 'Bokwango Gardens is a charming residential complex nestled in the lush, peaceful neighborhood of Bokwango. The property offers a serene environment with beautifully landscaped surroundings and mountain views. Each unit features modern amenities, including fitted kitchens, spacious living areas, and private balconies. The development includes reliable utilities, internet connectivity, and 24-hour security. Located just minutes from the city center yet away from the hustle and bustle, Bokwango Gardens provides the perfect balance for those seeking a tranquil lifestyle with easy access to urban conveniences.',
                'featured_image' => 'assets/img/brillia11.jpg',
                'tag' => 'Featured',
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
