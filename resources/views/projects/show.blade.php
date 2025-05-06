@extends('layout.main')

@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Project Details</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <a href="{{ url('/projects') }}">Projects</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Project Details</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container">
            <!-- heading -->
            <div class="ul-project-details-heading">
                <div class="left">
                    <h3 class="ul-project-details-title">{{ $project['title'] }}</h3>
                    <span class="ul-project-details-location"><span class="icon"><i class="flaticon-maps-and-flags"></i></span>{{ $project['location'] }}</span>
                </div>

                <div class="right">
                    <div class="ul-project-details-price"><span class="number">{{ $project['price'] }}</span> {{ $project['period'] }}</div>
                </div>
            </div>

            <!-- body -->
            <div class="ul-project-details-body">
                <div class="row gy-5">
                    <!-- left -->
                    <div class="col-lg-8">
                        <!-- img slider -->
                        <div class="ul-project-details-slider-wrapper wow animate__fadeInUp">
                            <div class="swiper ul-project-details-img-slider">
                                <div class="swiper-wrapper">
                                    @foreach($project['images'] as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($image) }}" alt="{{ $project['title'] }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="swiper ul-project-details-img-slider-thumb">
                                <div class="swiper-wrapper">
                                    @foreach($project['images'] as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($image) }}" alt="{{ $project['title'] }}">
                                    </div>
                                    @endforeach
                                </div>

                                <!-- navigation -->
                                <div class="ul-slider-nav ul-project-details-img-slider-thumb-nav">
                                    <button class="prev"><i class="flaticon-arrow"></i></button>
                                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- description -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Description</h3>
                            <p>{{ $project['description'] }}</p>
                        </div>

                        <!-- overview -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Overview</h3>
                            <div class="ul-project-details-overview-infos wow animate__fadeInUp">
                                <div class="row row-cols-xl-5 row-cols-sm-4 row-cols-3 row-cols-xxs-2 ul-bs-row">
                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-buildings"></i></div>
                                            <div class="txt">
                                                <span class="key">ID NO.</span>
                                                <span class="value">#{{ $project['id'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-home-tik-mark"></i></div>
                                            <div class="txt">
                                                <span class="key">Type</span>
                                                <span class="value">{{ $project['tag'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-bed-color"></i></div>
                                            <div class="txt">
                                                <span class="key">Beds</span>
                                                <span class="value">{{ $project['beds'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-bath"></i></div>
                                            <div class="txt">
                                                <span class="key">Bath</span>
                                                <span class="value">{{ $project['bathrooms'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-buildings"></i></div>
                                            {{-- <div class="txt">
                                                <span class="key">Area</span>
                                                <span class="value">{{ $project['area'] }}</span>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-house-1"></i></div>
                                            <div class="txt">
                                                <span class="key">Purpose</span>
                                                <span class="value">For Rent</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-wifi"></i></div>
                                            <div class="txt">
                                                <span class="key">Wi-Fi</span>
                                                <span class="value">Yes</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-tv-1"></i></div>
                                            <div class="txt">
                                                <span class="key">Smart TV</span>
                                                <span class="value">Yes</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-parking"></i></div>
                                            <div class="txt">
                                                <span class="key">Parking</span>
                                                <span class="value">Yes</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="ul-project-details-overview-info">
                                            <div class="icon"><i class="flaticon-tools"></i></div>
                                            <div class="txt">
                                                <span class="key">Build Year</span>
                                                <span class="value">2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Features & aminities -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Features & Aminities</h3>
                            <div class="ul-project-details-features wow animate__fadeInUp">
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Air Conditioning</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Barbeque</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Washer and dryer</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Refrigerator</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Gym</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Recreation</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Ventilation</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Microwave</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Electricity</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Front Yard</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Swimming Pool</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Basketball</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Window Coverings</span></span>
                                <span class="feature"><span class="icon"><i class="flaticon-check-4"></i></span><span class="txt">Heating</span></span>
                            </div>
                        </div>
                    </div>

                    <!-- right sidebar -->
                    <div class="col-lg-4">
                        <div class="ul-project-details-sidebar wow animate__fadeInUp">
                            <h3 class="ul-project-details-sidebar-title">Contact Brillian & Co for this listing</h3>

                            <div class="ul-project-details-listing-owner mb-4">
                                <div class="ul-project-details-listing-owner-img">
                                    <img src="{{ asset("assets/img/brillia-ceo.jpg")}}" alt="Listing Owner Image">
                                </div>
                                <div class="ul-project-details-listing-owner-txt">
                                    <h4 class="ul-project-details-listing-owner-name">Pah Brillian Beng</h4>
                                    <span class="contact-infos d-block">Supervisor</span>
                                    <div class="contact-infos d-none">
                                        <a href="tel:+237 652383694">+237 652383694</a>
                                        <a href="mailto:JqkZ0@example.com">JqkZ0@example.com</a>
                                    </div>
                                </div>
                            </div>
                            <a class="ul-btn ul-project-details-wa-btn hover:opacity-75" href="{{ url('https://wa.me/237652383694') }}">
                                <button class="ul-btn ul-project-details-wa-btn hover:opacity-75"><i class="flaticon-telephone"></i>WhatsApp</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection