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
                                    'price' => 250000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Molyko, Buea, South West Region',
                                    'image' => 'assets/img/project-1.jpg',
                                    'slug' => 'molyko-luxury-apartment',
                                    'beds' => 3,
                                    'bathrooms' => 2,
                                    'area' => '120 m²',
                                    'tag' => 'Popular',
                                ],
                                [
                                    'title' => 'Bonduma Modern House',
                                    'price' => 180000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Bonduma, Buea, South West Region',
                                    'image' => 'assets/img/project-2.jpg',
                                    'slug' => 'bonduma-modern-house',
                                    'beds' => 3,
                                    'bathrooms' => 2,
                                    'area' => '100 m²',
                                    'tag' => 'New',
                                ],
                                [
                                    'title' => 'Bonanjo Office Space',
                                    'price' => 350000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Bonanjo, Douala, Littoral Region',
                                    'image' => 'assets/img/project-3.jpg',
                                    'slug' => 'bonanjo-office-space',
                                    'beds' => 0,
                                    'bathrooms' => 1,
                                    'area' => '80 m²',
                                    'tag' => 'Commercial',
                                ],
                                [
                                    'title' => 'Bastos Luxury Villa',
                                    'price' => 500000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Bastos, Yaoundé, Centre Region',
                                    'image' => 'assets/img/project-4.jpg',
                                    'slug' => 'bastos-luxury-villa',
                                    'beds' => 4,
                                    'bathrooms' => 3,
                                    'area' => '200 m²',
                                    'tag' => 'Premium',
                                ],
                                [
                                    'title' => 'Great Soppo Studio',
                                    'price' => 80000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Great Soppo, Buea, South West Region',
                                    'image' => 'assets/img/project-5.jpg',
                                    'slug' => 'great-soppo-studio',
                                    'beds' => 1,
                                    'bathrooms' => 1,
                                    'area' => '40 m²',
                                    'tag' => 'Affordable',
                                ],
                                [
                                    'title' => 'Limbe Beachfront Property',
                                    'price' => 400000,
                                    'currency' => 'XAF',
                                    'period' => 'Month',
                                    'location' => 'Down Beach, Limbe, South West Region',
                                    'image' => 'assets/img/project-6.jpg',
                                    'slug' => 'limbe-beachfront-property',
                                    'beds' => 3,
                                    'bathrooms' => 2,
                                    'area' => '150 m²',
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