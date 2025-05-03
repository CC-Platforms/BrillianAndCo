@extends('layout.main')

@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">{{ $service['title'] }}</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ url('/') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <a href="{{ url('/services') }}">Services</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">{{ $service['title'] }}</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">

        <!-- SERVICE DETAILS SECTION START -->
        <div class="ul-inner-page-container">
            <div class="ul-service-details-container row justify-content-center gy-5">
                <!-- left sidebar -->
                <div class="col-lg-4 order-1 order-lg-0">
                    <div class="ul-service-details-sidebar">
                        <div class="ul-service-details-sidebar-widget overflow-hidden">
                            <h4 class="ul-service-details-sidebar-widget-title">Our Services</h4>
                            <ul class="service-list">
                                <li><a href="{{ url('/services/property-sales-purchase') }}" class="{{ $service['slug'] == 'property-sales-purchase' ? 'current' : '' }}">Property Sales & Purchase <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="{{ url('/services/rental-services') }}" class="{{ $service['slug'] == 'rental-services' ? 'current' : '' }}">Rental Services <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="{{ url('/services/investment-services') }}" class="{{ $service['slug'] == 'investment-services' ? 'current' : '' }}">Investment Services <i class="flaticon-read-more-icon"></i></a></li>
                            </ul>
                        </div>

                        <div class="ul-service-details-cta">
                            <div class="icon"><i class="flaticon-telephone"></i></div>
                            <span class="title">Need Help? Call Here</span>
                            <a href="tel:1234567890" class="number">+123 456 7890</a>
                        </div>
                    </div>
                </div>

                <!-- right content -->
                <div class="col-lg-8 order-0 order-lg-1">
                    <div class="ul-service-details-txt wow animate__fadeInUp">
                        <h4 class="ul-service-details-title">{{ $service['title'] }}</h4>
                        <p class="ul-service-details-descr">{{ $service['full_description'] }}</p>
                        
                        <div class="ul-service-details-cover-img">
                            <img src="{{ asset('assets/img/service-details-1.jpg') }}" alt="Image" class="img-1">
                            <img src="{{ asset('assets/img/service-details-2.jpg') }}" alt="Image" class="img-2">
                        </div>
                        
                        <h4 class="ul-service-details-title">Why Choose Brillian And Co Real Estate</h4>
                        <p class="ul-service-details-descr">With a passion for innovation, a commitment to excellence, and deep understanding of the local market, we're revolutionizing the way people Buy, Sell, Rent and invest in Real Estate. Our team of experts ensures that your real estate journey is smooth, profitable, and stress-free. Your trust is our commitment, and we work tirelessly to exceed your expectations.</p>
                    </div>

                    <!-- faq -->
                    <div class="ul-service-details-faq wow animate__fadeInUp">
                        <div class="ul-accordion">
                            <div class="ul-single-accordion-item open">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">How does the process work?</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>Our process begins with a consultation to understand your needs and goals. We then develop a customized plan tailored to your specific situation. Throughout the process, our team of experts guides you every step of the way, ensuring a smooth and successful real estate experience.</p>
                                </div>
                            </div>
                            <div class="ul-single-accordion-item">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">What areas do you serve?</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>Brillian And Co Real Estate serves various local markets with a deep understanding of each area's unique characteristics. Our expertise in these markets allows us to provide valuable insights and identify the best opportunities for our clients.</p>
                                </div>
                            </div>
                            <div class="ul-single-accordion-item">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">What makes Brillian And Co different?</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>What sets us apart is our commitment to innovation, excellence, and personalized service. We combine deep market knowledge with cutting-edge technology to deliver exceptional results. Our motto "Your Trust is Our Commitment" reflects our dedication to building lasting relationships with our clients based on trust and integrity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE DETAILS SECTION END -->

    </div>

    <!-- APP AD SECTION START -->
    <div class="ul-app-ad wow animate__fadeInUp">
        <div class="ul-app-ad-container">
            <div class="ul-app-ad-content">
                <div class="row align-items-start gy-5">
                    <!-- txt -->
                    <div class="col-lg-7">
                        <div class="ul-app-ad-txt">
                            <span class="ul-section-sub-title">Download App</span>
                            <h2 class="ul-section-title">Download Our Real Estate Mobile App <span class="colored">15% Off</span></h2>
                            <div class="ul-app-ad-btns">
                                <button>
                                    <i class="flaticon-play"></i>
                                    <span>
                                        <span class="sub-title">Get in on</span>
                                        <span class="title">Apps Store</span>
                                    </span>
                                </button>
                                <button>
                                    <i class="flaticon-play"></i>
                                    <span>
                                        <span class="sub-title">Get in on</span>
                                        <span class="title">Google Play</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- img -->
                    <div class="col-lg-5">
                        <div class="ul-app-ad-imgs">
                            <div class="ul-app-ad-img">
                                <!-- qr code -->
                                <img src="{{ asset('assets/img/app-ad-qr-code.jpg') }}" alt="QR Code" class="ul-app-ad-qr-code">
                                <!-- app screenshot 1 -->
                                <img src="{{ asset('assets/img/app-ad-ss-1.png') }}" alt="App screenshot" class="ul-app-ad-ss-1">
                            </div>
                            <div class="ul-app-ad-img">
                                <!-- app screenshot 2 -->
                                <img src="{{ asset('assets/img/app-ad-ss-2.png') }}" alt="App Screenshot" class="ul-app-ad-ss-2">
                            </div>

                            <!-- vector -->
                            <img src="{{ asset('assets/img/app-ad-img-vector.svg') }}" alt="vector" class="vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- APP AD SECTION END -->
</main>
@endsection