@extends('layout.main')

@section('content')
<main>
    <!-- BANNER SECTION START -->
    <section class="ul-banner">
        <!-- top -->
        <div class="top">
            <div class="ul-banner-slider swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="ul-banner-slide">
                            <div class="ul-banner-container">
                                <div class="row align-items-center flex-sm-row flex-column-reverse">
                                    <!-- Text -->
                                    <div class="col-md-9 col-sm-8">
                                        <span class="ul-banner-slide-shadow-title">BRILLIAN & CO</span>
                                        <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                            <span class="ul-banner-slide-sub-title">Your Premier Real Estate
                                                Partner</span>
                                            <h1 class="ul-banner-slide-title">Exceptional Properties, Exceptional
                                                Service</h1>
                                            <p class="ul-banner-slide-descr">We are revolutionizing the way people buy,
                                                sell, rent, and invest in real estate across Buea, Cameroon.</p>
                                            <div class="ul-banner-slide-btns">
                                                <a href="projects.html" class="ul-btn">Explore Our Services</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="ul-banner-slide-img wow animate__fadeInUp">
                                            <img src="assets/img/banner-img-1.png" alt="Banner Image">
                                            <a href="https://youtu.be/4jnzf1yj48M?si=owDQ6MQLmVy0r56E"
                                                data-fslightbox="video" class="ul-banner-slide-video-btn"><i
                                                    class="flaticon-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom -->
        <div class="bottom">
            <div class="left wow animate__fadeInUp">
                <div class="ul-banner-address-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <span class="address-1">Buea, Cameroon</span>
                            <span class="address-2">TPPRR/RC/BUA/2022/A/0184</span>
                        </div>
                        <div class="swiper-slide">
                            <span class="address-1">Real Estate Hub</span>
                            <span class="address-2">Registered with MSME</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right wow animate__fadeInUp">
                <div class="ul-banner-slider-pagination"></div>
                <div class="ul-banner-slider-nav ul-slider-nav">
                    <button class="prev"><i class="flaticon-left"></i></button>
                    <button class="next"><i class="flaticon-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->


    <!-- WHY CHOOSE US SECTION START -->
    <section class="ul-why-choose-us ul-section-spacing wow animate__fadeInUp">
        <div class="ul-container">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="ul-why-choose-us-imgs">
                        <div class="img"><img src="assets/img/why-choose-img-1.jpg" alt="image"></div>
                        <div class="img">
                            <img src="assets/img/why-choose-img-2.jpg" alt="image">
                            <div class="icon"><i class="flaticon-home-agreement"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ul-why-choose-us-txt">
                        <span class="ul-section-sub-title">Why Choose Brillian & Co Real Estate</span>
                        <h2 class="ul-section-title">Your Trust is Our Commitment</h2>
                        <p class="ul-why-choose-us-heading-descr">We deliver top-tier real estate services, tailored to
                            your needs.</p>

                        <div class="ul-why-choose-us-list">
                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-property"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Rentals & Leasing</h3>
                                    <p class="ul-why-choose-us-list-item-descr">Studios, rooms, apartments, offices,
                                        stores, and guesthouses available at competitive rates.</p>
                                </div>
                            </div>

                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-list-1"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Property Management</h3>
                                    <p class="ul-why-choose-us-list-item-descr">Expert property care, maintenance, and
                                        leasing for landlords and investors.</p>
                                </div>
                            </div>

                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-consulting"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Real Estate Consulting</h3>
                                    <p class="ul-why-choose-us-list-item-descr">We provide guidance on investments,
                                        development, and business marketing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US SECTION END -->

    <!-- FEATURED PROPERTIES SECTION START -->
    <section class="ul-featured-properties ul-section-spacing">
        <div class="ul-featured-properties-title-slider splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties
                        </h2>
                    </li>
                    <li class="splide__slide">
                        <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties
                        </h2>
                    </li>
                </ul>
            </div>
        </div>

        <div class="ul-featured-properties-slider-wrapper wow animate__fadeInUp">
            <div class="ul-featured-properties-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">01</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                {{-- Use url() helper for internal links, potentially with dynamic segments or route()
                                helper --}}
                                <a href="{{ url('project-details/1') }}" class="ul-project-title">Bonapriso
                                    Residence</a>
                                <p class="ul-project-location">Rue Njo-Njo, Bonapriso, Douala</p>
                            </div>
                            <div class="ul-project-img">
                                {{-- Use asset() helper for images --}}
                                <img src="{{ asset('assets/img/project-2.jpg') }}" alt="Bonapriso Residence Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">02</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/2') }}" class="ul-project-title">Bastos Apartment</a>
                                <p class="ul-project-location">Avenue Charles de Gaulle, Bastos, Yaoundé</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-6.jpg') }}" alt="Bastos Apartment Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">03</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/3') }}" class="ul-project-title">Limbe Seaside Home</a>
                                <p class="ul-project-location">Down Beach, Limbe, Southwest Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-1.jpg') }}" alt="Limbe Seaside Home Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">04</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/4') }}" class="ul-project-title">Kribi Beach House</a>
                                <p class="ul-project-location">Londji Beach Area, Kribi, South Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-4.jpg') }}" alt="Kribi Beach House Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">05</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/5') }}" class="ul-project-title">Buea Mountain View</a>
                                <p class="ul-project-location">Great Soppo, Buea, Southwest Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-5.jpg') }}" alt="Buea Mountain View Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ul-featured-properties-slider-nav ul-slider-nav">
                <button class="prev"><i class="flaticon-arrow"></i></button>
                <button class="next"><i class="flaticon-right-arrow"></i></button>
            </div>
        </div>
    </section>
    <!-- FEATURED PROPERTIES SECTION END -->

    <!-- FACILITY SECTION START -->
    <section class="ul-facilities ul-section-spacing">
        <div class="ul-container">
            <div class="row ul-bs-row row-cols-lg-2 row-cols-1 wow animate__fadeInUp">
                <div class="col">
                    <div class="ul-facilities-txt">
                        <h6 class="ul-section-sub-title">What We Offer</h6>
                        <h2 class="ul-section-title">Professional Real Estate Services in Buea</h2>
                        <p class="ul-facilities-descr">Whether you're buying, selling, renting, or building, Brillia &
                            Co is your trusted partner in real estate success.</p>

                        <div class="ul-facilities-stats">
                            <div class="ul-facilities-stat">
                                <span class="number">560+</span>
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
                                    <div class="swiper-slide"><img src="assets/img/project-1.jpg" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="assets/img/project-2.jpg" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="assets/img/project-3.jpg" alt="Facility Image">
                                    </div>
                                    <div class="swiper-slide"><img src="assets/img/project-4.jpg" alt="Facility Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="ul-facilities-img"><img src="assets/img/facility-img.jpg" alt="Facility Image"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- FACILITY SECTION END -->

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


    <!-- STATS SECTION START -->
    <div class="ul-stats ul-section-spacing">
        <div class="ul-stats-wrapper wow animate__fadeInUp">
            <div class="ul-stats-item">
                <i class="flaticon-excavator"></i>
                <span class="number">260+</span>
                <span class="txt">Satisfied Clients</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-interior-design"></i>
                <span class="number">110+</span>
                <span class="txt">Projects Completed</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-buildings"></i>
                <span class="number">190+</span>
                <span class="txt">Apartments Rented</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-map"></i>
                <span class="number">560+</span>
                <span class="txt">Lands Sold</span>
            </div>
        </div>
    </div>
    <!-- STATS SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <section class="ul-testimonial ul-section-spacing">
        <div class="ul-testimonial-container">
            <div class="row row-cols-lg-2 row-cols-1 gx-0 align-items-center flex-lg-row flex-column-reverse gy-5">
                <!-- img -->
                <div class="col">
                    <div class="ul-testimonial-img wow animate__fadeInUp">
                        <img src="assets/img/testimonial-img.jpg" alt="Happy client giving a testimonial">
                    </div>
                </div>

                <!-- testimonial slider -->
                <div class="col">
                    <div class="ul-testimonial-txt wow animate__fadeInUp">
                        <div class="ul-section-heading">
                            <div>
                                <span class="ul-section-sub-title">Testimonials</span>
                                <h2 class="ul-section-title">What Our Clients Say</h2>
                            </div>
                        </div>
                        <div class="ul-testimonial-slider swiper">
                            <div class="swiper-wrapper">
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="ul-testimony">
                                        <div class="top">
                                            <div class="ul-testimony-reviewer-img">
                                                <img src="assets/img/team-1.jpg" alt="Reviewer Image - Jane">
                                            </div>
                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Jane Williams</h3>
                                                <h4 class="ul-testimony-reviewer-role">UX Designer</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>
                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="Quotation Icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">"Working with this team was an absolute pleasure.
                                            The quality and professionalism exceeded my expectations."</p>
                                    </div>
                                </div>

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="ul-testimony">
                                        <div class="top">
                                            <div class="ul-testimony-reviewer-img">
                                                <img src="assets/img/team-2.jpg" alt="Reviewer Image - Michael">
                                            </div>
                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Michael Johnson</h3>
                                                <h4 class="ul-testimony-reviewer-role">Project Manager</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>
                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="Quotation Icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">"Their service was fast, reliable, and incredibly
                                            well-executed. I would recommend them without hesitation."</p>
                                    </div>
                                </div>

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="ul-testimony">
                                        <div class="top">
                                            <div class="ul-testimony-reviewer-img">
                                                <img src="assets/img/team-3.jpg" alt="Reviewer Image - Sarah">
                                            </div>
                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Sarah Kim</h3>
                                                <h4 class="ul-testimony-reviewer-role">Entrepreneur</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>
                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="Quotation Icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">"From start to finish, their attention to detail and
                                            care for the client stood out. I felt truly supported."</p>
                                    </div>
                                </div>
                            </div>

                            <!-- slider pagination -->
                            <div class="ul-testimonial-slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->


    <!-- PARTNERS AREA START -->
    <div class="ul-partners-area">
        <div class="ul-container wow animate__fadeInUp">
            <span class="ul-partners-area-title">Trusted by the World's Best</span>

            <div class="ul-partners-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-1.png" alt="Partner Logo 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-2.png" alt="Partner Logo 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-3.png" alt="Partner Logo 3">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-4.png" alt="Partner Logo 4">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-5.png" alt="Partner Logo 5">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-6.png" alt="Partner Logo 6">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/partner-1.png" alt="Partner Logo 1 (Duplicate)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PARTNERS AREA END -->
</main>

@endsection


