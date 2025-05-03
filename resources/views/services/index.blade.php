@extends('layout.main')

@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Services</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Services</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <!-- SPECIALITY SECTION START -->
        <section class="ul-specialities overflow-hidden">
            <div class="ul-specialities-heading-card wow animate__fadeInUp">
                <div class="txt">
                    <h3 class="ul-specialities-title">The new way to find your new home</h3>
                    <p class="ul-specialities-descr">Find your dream place to live in with more than 10k+ properties listed.</p>
                    <a href="{{ route('projects.index') }}" class="ul-btn">Browse Properties</a>
                </div>

                <div class="img"><img src="assets/img/speciality-img.png" alt="Image"></div>
            </div>

            <div class="ul-specialities-wrapper">
                @foreach($specialities as $speciality)
                <!-- single speciality -->
                <div class="ul-speciality wow animate__fadeInUp">
                    <div class="ul-speciality-icon">
                        <img src="{{ $speciality['icon'] }}" alt="icon">
                        <div class="sm-icon"><img src="{{ $speciality['sm_icon'] }}" alt="icon"></div>
                    </div>
                    <h4 class="ul-speciality-title">{{ $speciality['title'] }}</h4>
                    <p class="ul-speciality-descr">{{ $speciality['description'] }}</p>
                </div>
                @endforeach
            </div>
        </section>
        <!-- SPECIALITY SECTION END -->

        <!-- STATS SECTION START -->
        <div class="ul-stats ul-section-spacing">
            <div class="ul-stats-wrapper wow animate__fadeInUp">
                @foreach($stats as $stat)
                <div class="ul-stats-item">
                    <i class="{{ $stat['icon'] }}"></i>
                    <span class="number">{{ $stat['number'] }}</span>
                    <span class="txt">{{ $stat['text'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        <!-- STATS SECTION END -->

        <!-- SERVICE SECTION START -->
        <div class="ul-services ul-section-spacing">
            <div class="ul-inner-page-container">
                <h2 class="ul-section-title">Core Services</h2>

                <!-- serices grid -->
                <div class="row ul-bs-row row-cols-md-3 row-cols-2 row-cols-xxs-1">
                    @foreach($coreServices as $service)
                    <!-- single service -->
                    <div class="col">
                        <div class="ul-service">
                            <div class="ul-service-icon"><i class="{{ $service['icon'] }}"></i></div>
                            <a href="{{ route('services.show', $service['slug']) }}" class="ul-service-title">{{ $service['title'] }}</a>
                            <p class="ul-service-descr">{{ $service['description'] }}</p>
                            <a href="{{ route('services.show', $service['slug']) }}" class="ul-service-btn">{{ $service['button_text'] }} <i class="flaticon-aro-left"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- SERVICE SECTION END -->
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
                                <img src="assets/img/app-ad-qr-code.jpg" alt="QR Code" class="ul-app-ad-qr-code">
                                <!-- app screenshot 1 -->
                                <img src="assets/img/app-ad-ss-1.png" alt="App screenshot" class="ul-app-ad-ss-1">
                            </div>
                            <div class="ul-app-ad-img">
                                <!-- app screenshot 2 -->
                                <img src="assets/img/app-ad-ss-2.png" alt="App Screenshot" class="ul-app-ad-ss-2">
                            </div>

                            <!-- vector -->
                            <img src="assets/img/app-ad-img-vector.svg" alt="vector" class="vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- APP AD SECTION END -->
</main>
@endsection