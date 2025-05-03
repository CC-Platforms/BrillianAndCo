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
                                        <span class="ul-banner-slide-shadow-title">BRILLIAN & CO REAL ESTATE</span>
                                        <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                            <span class="ul-banner-slide-sub-title">Your Premier Real Estate
                                                Partner</span>
                                            <h1 class="ul-banner-slide-title">Your Trust is Our Commitment</h1>
                                            <p class="ul-banner-slide-descr">We are revolutionizing the way people buy,
                                                sell, rent, and invest in real estate across Buea, Cameroon.</p>
                                            <div class="ul-banner-slide-btns">
                                                <a href="{{ route('services.index') }}" class="ul-btn">Explore Our Services</a>
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
                            <span class="address-2">TPPRR/RC/BUA/ 2022/A/0184</span>
                        </div>
                        <div class="swiper-slide">
                            <span class="address-1">Real Estate Hub</span>
                            <span class="address-2">Registered with MSME</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="right wow animate__fadeInUp">
                <div class="ul-banner-slider-pagination"></div>
                <div class="ul-banner-slider-nav ul-slider-nav">
                    <button class="prev"><i class="flaticon-left"></i></button>
                    <button class="next"><i class="flaticon-right"></i></button>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- BANNER SECTION END -->

    @include('sections.why-choose-us')
    @include('sections.featured-properties')
    @include('sections.facilities')
    @include('sections.properties')
    @include('sections.stats')
    @include('sections.testimonials')
    @include('sections.partners')
</main>

@endsection


