@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">About us</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">About us</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <!-- WHY CHOOSE US SECTION START -->
        <section class="ul-why-choose-us wow animate__fadeInUp">
            <div class="ul-inner-page-container">
                <div class="row row-cols-lg-2 row-cols-1 align-items-center">
                    <div class="col">
                        <!-- <div class="d-flex justify-content-end"> -->
                        <div class="ul-why-choose-us-imgs">
                            <div class="img"><img src="{{ asset("assets/img/why-choose-img-1.jpg")}}" alt="image"></div>
                            <div class="img">
                                <img src="{{ asset("assets/img/brillia-ceo.jpg")}}" alt="image">
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
                                        <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
                                    </div>
                                </div>

                                <div class="ul-why-choose-us-list-item">
                                    <div class="icon"><i class="flaticon-list-1"></i></div>
                                    <div class="txt">
                                        <h3 class="ul-why-choose-us-list-item-title">Mortgage Services</h3>
                                        <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
                                    </div>
                                </div>

                                <div class="ul-why-choose-us-list-item">
                                    <div class="icon"><i class="flaticon-change"></i></div>
                                    <div class="txt">
                                        <h3 class="ul-why-choose-us-list-item-title">Financing made easy</h3>
                                        <p class="ul-why-choose-us-list-item-descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perspiciatis adipisci quas facere a!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY CHOOSE US SECTION END -->


        <!-- PARTNERS SECTION START -->
        <div class="ul-inner-page-container ul-section-spacing">
            <div class="wow animate__fadeInUp">
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
        <!-- PARTNERS SECTION END -->


        <!-- ABOUT SECTION START -->
        <section class="ul-about ul-inner-about ul-section-spacing">
            <div class="ul-inner-page-container my-0 wow animate__fadeInUp">
                <div class="row row-cols-lg-2 row-cols-1 align-items-center ul-bs-row">
                    <!-- txt -->
                    <div class="col">
                        <div class="ul-about-txt ul-inner-about-txt">
                            <h2 class="ul-section-title">Welcome To Properties</h2>
                            <div>
                                <p>It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less normal distribution of letters.
                                </p>
                                <p>
                                    Tempus tristique. Sed quis lacinia elit aliquam erat volutpat mauris orci mauris varius et diam at scelerisque euismod sapien nunc sit amet elementum sem vestibulum lobortis fermentum lacus. 
                                </p>
                            </div>

                            <div class="ul-about-txt-bottom ul-inner-about-txt-bottom">
                                <ul class="ul-inner-about-list">
                                    <li><i class="flaticon-read-more-icon"></i> Proactively pontificate client</li>
                                    <li><i class="flaticon-read-more-icon"></i> Is there a waiting list for desired </li>
                                    <li><i class="flaticon-read-more-icon"></i> Immediate 24/ 7 Emergency</li>
                                </ul>

                                <div class="ul-about-stats ul-inner-about-stats">
                                    <div class="ul-about-stat ul-inner-about-stat">
                                        <span class="number">30k+</span>
                                        <span class="txt">Satisficed Client</span>
                                    </div>
                                    <div class="ul-about-stat ul-inner-about-stat">
                                        <span class="number">700+</span>
                                        <span class="txt">House</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- img -->
                    <div class="col">
                        <div class="ul-about-img ul-inner-about-img"><img src="{{ asset("assets/img/brillia14.jpg")}}" alt="About Image"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->


        @include('sections.team')
        @include('sections.testimonials')
      
    </div>
</main>

@endsection