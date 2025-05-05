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
                            <a href="tel:1234567890" class="number">+237 652383694</a>
                        </div>
                    </div>
                </div>

                <!-- right content -->
                <div class="col-lg-8 order-0 order-lg-1">
                    <div class="ul-service-details-txt wow animate__fadeInUp">
                        <h4 class="ul-service-details-title">{{ $service['title'] }}</h4>
                        <p class="ul-service-details-descr">{{ $service['full_description'] }}</p>
                        
                        <div class="ul-service-details-cover-img">
                            <img src="{{ asset('assets/img/brillia6.jpg') }}" alt="Image" class="img-1">
                            <img src="{{ asset('assets/img/brillia13.jpg') }}" alt="Image" class="img-2">
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
</main>
@endsection