@extends('layout.main')

@section('content')
<main>

    @include('home.sections.banner')
    @include('home.sections.cities')
    @include('home.sections.why-choose-us')
    @include('home.sections.featured-properties')



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
    {{-- <section class="ul-blogs ul-section-spacing">
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
    </section> --}}
    <!-- BLOG SECTION END -->


    <!-- PARTNERS AREA START -->
    <div class="ul-partners-area">
        <div class="ul-container wow animate__fadeInUp">
            <h1 class="ul-partners-area-title">Our Core Partners</h1>

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