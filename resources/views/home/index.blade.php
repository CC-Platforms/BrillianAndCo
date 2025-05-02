@extends('layout.main')

@section('content')
<main>

    @include('home.sections.banner')

    <!-- CITIES SECTION START -->
    <section class="ul-cities ul-section-spacing">
        <div class="ul-container wow animate__fadeInUp">
            <!-- section heading -->
            <div class="ul-section-heading">
                <div class="left">
                    <h2 class="ul-section-title">Find Properties in These Cities</h2>
                    <p class="ul-section-descr">There are many variations of passages of Lorem Ipsum available,</p>
                </div>
                <div class="right">
                    <a href="projects.html" class="ul-btn">See All Properties</a>
                </div>
            </div>

            <!-- cities -->
            <div class="row row-cols-xl-4 row-cols-md-3 row-cols-2 row-cols-xxs-1 g-4 mx-auto">
                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-1.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">New York</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-2.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Los Angeles</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-3.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Chicago</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-4.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Houston</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-5.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">San Diego</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-6.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Columbus</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-7.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Columbus</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>

                <!-- single city -->
                <div class="col">
                    <div class="ul-city">
                        <div class="img"><a href="projects.html"><img src="assets/img/city-8.jpg" alt="City Image"></a>
                        </div>
                        <div class="txt">
                            <h3 class="ul-city-title"><a href="projects.html">Las Vegas</a></h3>
                            <span class="ul-city-count">15 Properties</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- vector -->
        <div class="ul-cities-vectors">
            <img src="assets/img/cities-vector-1.svg" alt="vector" class="vector-1 wow animate__fadeInLeft">
            <img src="assets/img/cities-vector-2.svg" alt="vector" class="vector-2 wow animate__fadeInUp">
        </div>
    </section>
    <!-- CITIES SECTION END -->


    <!-- WHY CHOOSE US SECTION START -->
    <section class="ul-why-choose-us ul-section-spacing wow animate__fadeInUp">
        <div class="ul-container">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center">
                <div class="col">
                    <!-- <div class="d-flex justify-content-end"> -->
                    <div class="ul-why-choose-us-imgs">
                        <div class="img"><img src="assets/img/why-choose-img-1.jpg" alt="image"></div>
                        <div class="img">
                            <img src="assets/img/why-choose-img-2.jpg" alt="image">
                            <!-- icon -->
                            <div class="icon"><i class="flaticon-home-agreement"></i></div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- txt -->
                <div class="col">
                    <div class="ul-why-choose-us-txt">
                        <span class="ul-section-sub-title">Why choose us</span>
                        <h2 class="ul-section-title">We Bring Your Dream Homes to Reality</h2>
                        <p class="ul-why-choose-us-heading-descr">We offer perfect real estate services</p>

                        <div class="ul-why-choose-us-list">
                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-property"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Property Management</h3>
                                    <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
                                </div>
                            </div>

                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-list-1"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Mortgage Services</h3>
                                    <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
                                </div>
                            </div>

                            <div class="ul-why-choose-us-list-item">
                                <div class="icon"><i class="flaticon-change"></i></div>
                                <div class="txt">
                                    <h3 class="ul-why-choose-us-list-item-title">Financing made easy</h3>
                                    <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
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
        <!-- section title slider -->
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

        <!-- properties slider -->
        <div class="ul-featured-properties-slider-wrapper wow animate__fadeInUp">
            <div class="ul-featured-properties-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single property slider item -->
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
                                <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="assets/img/project-2.jpg" alt="Project Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <!-- price -->
                                <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                <!-- infos -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single property slider item -->
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
                                <a href="project-details.html" class="ul-project-title">Cove Red</a>
                                <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="assets/img/project-6.jpg" alt="Project Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <!-- price -->
                                <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                <!-- infos -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single property slider item -->
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
                                <a href="project-details.html" class="ul-project-title">Tarpon Bay</a>
                                <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="assets/img/project-1.jpg" alt="Project Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <!-- price -->
                                <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                <!-- infos -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single property slider item -->
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
                                <a href="project-details.html" class="ul-project-title">Beverly Springfield</a>
                                <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="assets/img/project-4.jpg" alt="Project Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <!-- price -->
                                <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                <!-- infos -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single property slider item -->
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
                                <a href="project-details.html" class="ul-project-title">Beverly Springfield</a>
                                <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="assets/img/project-5.jpg" alt="Project Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <!-- price -->
                                <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                <!-- infos -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <!-- single info -->
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

            <!-- slider navigation -->
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
                <!-- text -->
                <div class="col">
                    <div class="ul-facilities-txt">
                        <h6 class="ul-section-sub-title">Our Top Facilities</h6>
                        <h2 class="ul-section-title">Making living spaces More Beautiful</h2>
                        <p class="ul-facilities-descr">Over 39,000 people work for us in more than 70 countries all over
                            the This breadth of global coverage, combined with specialist services</p>

                        <div class="ul-facilities-stats">
                            <!-- single stat -->
                            <div class="ul-facilities-stat">
                                <span class="number">80%</span>
                                <span class="txt">Completed Property</span>
                            </div>
                            <!-- single stat -->
                            <div class="ul-facilities-stat">
                                <span class="number">99%</span>
                                <span class="txt">Satisfied Customers</span>
                            </div>
                            <!-- single stat -->
                            <div class="ul-facilities-stat">
                                <span class="number">50%</span>
                                <span class="txt">Home ownership</span>
                            </div>
                        </div>

                        <div class="ul-facilities-list">
                            <ul>
                                <li>Living rooms are pre-wired for Surround</li>
                                <li>Luxurious interior design and amenities</li>
                                <li>Private balconies with stunning views</li>
                                <li>A rare combination of inspired architecture</li>
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

                <!-- img -->
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

            <div class="ul-properties-tab-navs wow animate__fadeInUp">
                <button class="tab-nav active" data-tab="tab-rent"><i class="flaticon-key"></i> Rent</button>
                <button class="tab-nav" data-tab="tab-buy"><i class="flaticon-buy"></i> Buy</button>
                <button class="tab-nav" data-tab="tab-sell"><i class="flaticon-house-2"></i> Sell</button>
            </div>

            <div class="tabs-wrapper wow animate__fadeInUp">
                <!-- 1st tab / rent -->
                <div class="ul-tab active" id="tab-rent">
                    <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-1.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-2.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Beverly
                                                Springfield</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-3.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Faulkner Ave</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-4.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">St. Crystal</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-5.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Cove Red</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-6.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Tarpon Bay</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
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

                <!-- 2nd tab / buy -->
                <div class="ul-tab" id="tab-buy">
                    <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-4.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">St. Crystal</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-5.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Cove Red</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-6.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Tarpon Bay</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-1.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-2.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Beverly
                                                Springfield</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-3.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Faulkner Ave</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
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

                <!-- 3rd tab / sell -->
                <div class="ul-tab" id="tab-sell">
                    <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-3.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Faulkner Ave</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-4.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">St. Crystal</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-1.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-2.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Beverly
                                                Springfield</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-5.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Cove Red</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-scale"></i></span>
                                            <span class="text">6x7.5 m²</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single project -->
                        <div class="col">
                            <div class="ul-project">
                                <div class="ul-project-img"><img src="assets/img/project-6.jpg" alt="Project Image">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">Popular</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price"><span
                                                    class="number">$4,500</span>/Month</span>
                                            <a href="project-details.html" class="ul-project-title">Tarpon Bay</a>
                                            <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                        </div>
                                        <div class="right">
                                            <button class="ul-project-add-to-favorites-btn"><i
                                                    class="flaticon-heart"></i></button>
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos ul-featured-property-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">3 Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info ul-featured-property-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">2 Bathrooms</span>
                                        </div>
                                        <!-- single info -->
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
            </div>

            <div class="text-center wow animate__fadeInUp">
                <a href="projects.html" class="ul-btn ul-properties-btn">Browse More Properties</a>
            </div>
        </div>
    </section>
    <!-- PROPERTIES SECTION END -->


    <!-- STATS SECTION START -->
    <div class="ul-stats ul-section-spacing">
        <!-- <div class="ul-container"> -->
        <div class="ul-stats-wrapper wow animate__fadeInUp">
            <div class="ul-stats-item">
                <i class="flaticon-excavator"></i>
                <span class="number">260+</span>
                <span class="txt">Total Construction</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-interior-design"></i>
                <span class="number">110+</span>
                <span class="txt">Apartio Rooms</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-buildings"></i>
                <span class="number">190+</span>
                <span class="txt">Apartments Sold</span>
            </div>
            <div class="ul-stats-item">
                <i class="flaticon-map"></i>
                <span class="number">560+</span>
                <span class="txt">Total Area Sq</span>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- STATS SECTION END -->


    <!-- TESTIMONIAL SECTION START -->
    <section class="ul-testimonial ul-section-spacing">
        <div class="ul-testimonial-container">
            <div class="row row-cols-lg-2 row-cols-1 gx-0 align-items-center flex-lg-row flex-column-reverse gy-5">
                <!-- img -->
                <div class="col">
                    <div class="ul-testimonial-img wow animate__fadeInUp">
                        <img src="assets/img/testimonial-img.jpg" alt="Testimonial Image">
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
                                                <img src="assets/img/team-1.jpg" alt="Reviewer Image">
                                            </div>

                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Kathryn Murphy</h3>
                                                <h4 class="ul-testimony-reviewer-role">Medical Assistant</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>

                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="quotaion-icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">Consectetur adipiscing elit. Integer nunc viverra
                                            laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc
                                            viverra Aenean pulvinar maximus leo ”</p>
                                    </div>
                                </div>

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="ul-testimony">
                                        <div class="top">
                                            <div class="ul-testimony-reviewer-img">
                                                <img src="assets/img/team-2.jpg" alt="Reviewer Image">
                                            </div>

                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Kathryn Murphy</h3>
                                                <h4 class="ul-testimony-reviewer-role">Medical Assistant</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>

                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="quotaion-icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">Consectetur adipiscing elit. Integer nunc viverra
                                            laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc
                                            viverra Aenean pulvinar maximus leo ”</p>
                                    </div>
                                </div>

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="ul-testimony">
                                        <div class="top">
                                            <div class="ul-testimony-reviewer-img">
                                                <img src="assets/img/team-3.jpg" alt="Reviewer Image">
                                            </div>

                                            <div class="ul-testimony-reviewer-info">
                                                <h3 class="ul-testimony-reviewer-name">Kathryn Murphy</h3>
                                                <h4 class="ul-testimony-reviewer-role">Medical Assistant</h4>
                                                <div class="ul-testimony-rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>

                                            <div class="ul-testimony-quotation-icon flex-shrink-0">
                                                <img src="assets/img/quotation-icon.svg" alt="quotaion-icon">
                                            </div>
                                        </div>
                                        <p class="ul-testimony-txt">Consectetur adipiscing elit. Integer nunc viverra
                                            laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc
                                            viverra Aenean pulvinar maximus leo ”</p>
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


    <!-- BLOG SECTION START -->
    <section class="ul-blogs ul-section-spacing">
        <div class="ul-container wow animate__fadeInUp">
            <!-- section heading -->
            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title">Latest News</span>
                    <h2 class="ul-section-title">Our Latest News & Blog</h2>
                </div>

                <div class="right">
                    <a href="blog.html" class="ul-btn ul-blogs-heading-btn">View All News</a>
                </div>
            </div>


            <div class="row row-cols-lg-2 row-cols-1 ul-bs-row">
                <!-- blog big -->
                <div class="col">
                    <div class="ul-blog-wrapper">
                        <div class="ul-blog">
                            <div class="ul-blog-img"><img src="assets/img/blog-1.jpg" alt="Blog Image"></div>
                            <div class="ul-blog-txt">
                                <div class="ul-blog-infos">
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-calendar"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Jun 24, 2024</span>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="ul-blog-title">What to Look for When Buying a
                                    Pre-Owned Car Cars Which is Right for You</a>
                                <p class="ul-blog-excerpt">From luxury and economy cars and find out which best suits
                                    your lifestyle economy cars and find</p>
                                <a href="blog-details.html" class="ul-blog-btn">Read More <span class="icon"><i
                                            class="flaticon-aro-left"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- blog -->
                <div class="col">
                    <div class="ul-blog-wrapper">
                        <div class="ul-blog ul-blog-horizontal">
                            <div class="ul-blog-img"><img src="assets/img/blog-2.jpg" alt="Blog Image"></div>
                            <div class="ul-blog-txt">
                                <div class="ul-blog-infos">
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-calendar"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Jun 24, 2024</span>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="ul-blog-title">What to Look for When Buying a</a>
                                <p class="ul-blog-excerpt">From luxury and economy cars and find out which best</p>
                                <a href="blog-details.html" class="ul-blog-btn">Read More <span class="icon"><i
                                            class="flaticon-aro-left"></i></span></a>
                            </div>
                        </div>

                        <div class="ul-blog ul-blog-horizontal">
                            <div class="ul-blog-img"><img src="assets/img/blog-3.jpg" alt="Blog Image"></div>
                            <div class="ul-blog-txt">
                                <div class="ul-blog-infos">
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-user"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-blog-info">
                                        <span class="icon"><i class="flaticon-calendar"></i></span>
                                        <span class="text font-normal text-[14px] text-etGray">Jun 24, 2024</span>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="ul-blog-title">What to Look for When Buying a</a>
                                <p class="ul-blog-excerpt">From luxury and economy cars and find out which best</p>
                                <a href="blog-details.html" class="ul-blog-btn">Read More <span class="icon"><i
                                            class="flaticon-aro-left"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->


    <!-- PARTNERS AREA START -->
    <div class="ul-partners-area">
        <div class="ul-container wow animate__fadeInUp">
            <span class="ul-partners-area-title">Trusted by The World's Best</span>

            <div class="ul-partners-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-1.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-2.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-3.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-4.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-5.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-6.png" alt="Parter Logo">
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <img src="assets/img/partner-1.png" alt="Parter Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PARTNERS AREA END -->
</main>
@endsection