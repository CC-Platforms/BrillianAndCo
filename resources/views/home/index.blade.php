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
                                        <span class="ul-banner-slide-shadow-title">BRILLIAN AND CO REAL ESTATE</span>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    @include('sections.why-choose-us')
    @include('sections.featured-properties')
    @include('sections.facilities')
    @include('sections.properties')
    @include('sections.stats')
    @include('sections.testimonials')
    {{-- @include('sections.partners') --}}
</main>

@endsection


