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

    @include('sections.featured-properties')
    @include('sections.facilities')
    @include('sections.properties')
    @include('sections.stats')
    @include('sections.testimonials')
    @include('sections.partners')
</main>

@endsection


