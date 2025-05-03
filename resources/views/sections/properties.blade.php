    <!-- PROPERTIES SECTION START -->
    <section class="ul-properties ul-section-spacing">
        <div class="ul-container">
            <!-- section heading -->
            <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp">
                <div>
                    <span class="ul-section-sub-title">Our Properties</span>
                    <h2 class="ul-section-title">We Bring Dream Homes To Reality</h2>
                </div>
            </div>

            <div class="tabs-wrapper wow animate__fadeInUp">
                <div class="ul-tab active" id="tab-rent">
                    <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                        @php
                        $properties = [
                            [
                                'title' => 'Molyko Luxury Apartment',
                                'price' => '250,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Molyko, Buea, South West Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0120.jpg',
                                'slug' => 'molyko-luxury-apartment',
                                'beds' => 3,
                                'bathrooms' => 2,
                                'tag' => 'Popular',
                            ],
                            [
                                'title' => 'Bonduma Modern House',
                                'price' => '180,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Bonduma, Buea, South West Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0121.jpg',
                                'slug' => 'bonduma-modern-house',
                                'beds' => 3,
                                'bathrooms' => 2,
                                'tag' => 'New',
                            ],
                            [
                                'title' => 'Bonanjo Office Space',
                                'price' => '350,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Bonanjo, Douala, Littoral Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0124.jpg',
                                'slug' => 'bonanjo-office-space',
                                'beds' => 10,
                                'bathrooms' => 1,
                                'tag' => 'Commercial',
                            ],
                            [
                                'title' => 'Bastos Luxury Villa',
                                'price' => '500,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Bastos, Yaoundé, Centre Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0130.jpg',
                                'slug' => 'bastos-luxury-villa',
                                'beds' => 4,
                                'bathrooms' => 3,
                                'tag' => 'Premium',
                            ],
                            [
                                'title' => 'Great Soppo Studio',
                                'price' => '80,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Great Soppo, Buea, South West Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0132.jpg',
                                'slug' => 'great-soppo-studio',
                                'beds' => 1,
                                'bathrooms' => 1,
                                'tag' => 'Affordable',
                            ],
                            [
                                'title' => 'Limbe Beachfront',
                                'price' => '400,000',
                                'currency' => 'XAF',
                                'period' => 'Month',
                                'location' => 'Down Beach, Limbe, South West Region',
                                'image' => 'assets/img/brillian/properties/IMG-20250503-WA0136.jpg',
                                'slug' => 'limbe-beachfront-property',
                                'beds' => 3,
                                'bathrooms' => 2,
                                'tag' => 'Luxury',
                            ],
                        ];
                    @endphp
                        @foreach($properties as $property)
                        <x-property-card
                            title="{{ $property['title'] ?? '' }}"
                            price="{{ $property['price'] ?? 0 }}"
                            currency="XAF"
                            period="{{ $property['period'] ?? 'Month' }}"
                            location="{{ $property['location'] ?? '' }}"
                            image="{{ $property['image'] ?? '' }}"
                            slug="{{ $property['slug'] ?? '' }}"
                            beds="{{ $property['beds'] ?? 0 }}"
                            bathrooms="{{ $property['bathrooms'] ?? 0 }}"
                            area="{{ $property['area'] ?? '' }}"
                            tag="{{ $property['tag'] ?? '' }}"
                        />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROPERTIES SECTION END -->