    <!-- FACILITY SECTION START -->
    <section class="ul-facilities ul-section-spacing">
        
        @include('sections.section-header', [
        'title' => 'Our Facilities',
        'subtitle' => 'Professional Real Estate Services in Buea'
        ])

        <div class="ul-container">
            <div class="row ul-bs-row row-cols-lg-2 row-cols-1 wow animate__fadeInUp">
                <div class="col">
                    <div class="ul-facilities-txt">
                        <h6 class="ul-section-sub-title">What We Offer</h6>
                        <h2 class="ul-section-title">Professional Real Estate Services in Buea</h2>
                        <p class="ul-facilities-descr">Whether you're buying, selling, renting, or building, Brillian &
                            Co is your trusted partner in real estate success.</p>

                        <div class="ul-facilities-stats">
                            <div class="ul-facilities-stat">
                                <span class="number">500+</span>
                                <span class="txt">Properties Managed</span>
                            </div>
                            <div class="ul-facilities-stat">
                                <span class="number">260+</span>
                                <span class="txt">Happy Clients</span>
                            </div>
                            <div class="ul-facilities-stat">
                                <span class="number">99%</span>
                                <span class="txt">Client Satisfaction</span>
                            </div>
                        </div>

                        <div class="ul-facilities-list">
                            <ul>
                                <li>Consulting for property development & investments</li>
                                <li>Sales of registered lands</li>
                                <li>Affordable construction services</li>
                                <li>Active marketing via social media</li>
                            </ul>
                        </div>

                        <div class="ul-facilities-img-slider-wrapper">
                            <div class="ul-facilities-img-slider-nav ul-slider-nav">
                                <button class="prev"><i class="flaticon-arrow"></i></button>
                                <button class="next"><i class="flaticon-right-arrow"></i></button>
                            </div>
                            <div class="ul-facilities-img-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{ asset('assets\img\brillian\properties_2\marble_room_3.jpg') }}" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="{{ asset('assets\img\brillian\properties_2\apart_white_2.jpg') }}" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="{{ asset('assets\img\brillian\properties_2\brown_apart_1.jpg') }}" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="{{ asset('assets\img\brillian\properties_2\white_apart_brown_door.jpg') }}" alt="Facility Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    @if(isset($facilities) && $facilities->first())
                    <div class="ul-facilities-img">
                        <img src="{{ str_starts_with($facilities->first()->image, 'assets/') ? asset($facilities->first()->image) : asset('storage/' . $facilities->first()->image) }}" alt="{{ $facilities->first()->title }}">
                    </div>
                    @else
                    <div class="ul-facilities-img">
                        <img src="{{ asset('assets/img/brillian/properties_2/brown_building_projects.jpg') }}" alt="Facility Image">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- FACILITY SECTION END -->