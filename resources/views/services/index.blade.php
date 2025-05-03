@extends('layout.main')

@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Services</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
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
                    <a href="projects.html" class="ul-btn">Browse Properties</a>
                </div>

                <div class="img"><img src="assets/img/speciality-img.png" alt="Image"></div>
            </div>

            <div class="ul-specialities-wrapper">
                <!-- single speciality -->
                <div class="ul-speciality wow animate__fadeInUp">
                    <div class="ul-speciality-icon">
                        <img src="assets/icon/speciality-1-icon-1.svg" alt="icon">
                        <div class="sm-icon"><img src="assets/icon/speciality-1-icon-2.svg" alt="icon"></div>
                    </div>
                    <h4 class="ul-speciality-title">Property Insurance</h4>
                    <p class="ul-speciality-descr">We offer our customer property protection of liability coverage and insurance for their better life.</p>
                </div>

                <!-- single speciality -->
                <div class="ul-speciality wow animate__fadeInUp">
                    <div class="ul-speciality-icon">
                        <img src="assets/icon/speciality-2-icon-1.svg" alt="icon">
                        <div class="sm-icon"><img src="assets/icon/speciality-2-icon-2.svg" alt="icon"></div>
                    </div>
                    <h4 class="ul-speciality-title">Best Price</h4>
                    <p class="ul-speciality-descr">Not sure what you should be charging for your property? No need to worry, let us do the numbers for you.</p>
                </div>

                <!-- single speciality -->
                <div class="ul-speciality wow animate__fadeInUp">
                    <div class="ul-speciality-icon">
                        <img src="assets/icon/speciality-3-icon-1.svg" alt="icon">
                        <div class="sm-icon"><img src="assets/icon/speciality-3-icon-2.svg" alt="icon"></div>
                    </div>
                    <h4 class="ul-speciality-title">Lowest Commission</h4>
                    <p class="ul-speciality-descr">You no longer have to negotiate commissions and haggle with other agents it only cost 2%!</p>
                </div>

                <!-- single speciality -->
                <div class="ul-speciality wow animate__fadeInUp">
                    <div class="ul-speciality-icon">
                        <img src="assets/icon/speciality-4-icon-1.svg" alt="icon">
                        <div class="sm-icon"><img src="assets/icon/speciality-4-icon-2.svg" alt="icon"></div>
                    </div>
                    <h4 class="ul-speciality-title">Overall Control</h4>
                    <p class="ul-speciality-descr">Get a virtual tour, and schedule visits before you rent or buy any properties. You get overall control.</p>
                </div>
            </div>
        </section>
        <!-- SPECIALITY SECTION END -->


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


        <!-- SERVICE SECTION START -->
        <div class="ul-services ul-section-spacing">
            <div class="ul-inner-page-container">
                <h2 class="ul-section-title">Core Services</h2>

                <!-- serices grid -->
                <div class="row ul-bs-row row-cols-md-3 row-cols-2 row-cols-xxs-1">
                    <!-- single service -->
                    <div class="col">
                        <div class="ul-service">
                            <div class="ul-service-icon"><i class="flaticon-button-aero"></i></div>
                            <a href="service-details.html" class="ul-service-title">Buy a Home</a>
                            <p class="ul-service-descr">over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a href="service-details.html" class="ul-service-btn">Find a Home <i class="flaticon-aro-left"></i></a>
                        </div>
                    </div>

                    <!-- single service -->
                    <div class="col">
                        <div class="ul-service">
                            <div class="ul-service-icon"><i class="flaticon-right-aro"></i></div>
                            <a href="service-details.html" class="ul-service-title">Rent a Home</a>
                            <p class="ul-service-descr">over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a href="service-details.html" class="ul-service-btn">Find a Home <i class="flaticon-aro-left"></i></a>
                        </div>
                    </div>

                    <!-- single service -->
                    <div class="col">
                        <div class="ul-service">
                            <div class="ul-service-icon"><i class="flaticon-buildings"></i></div>
                            <a href="service-details.html" class="ul-service-title">Buy a Home</a>
                            <p class="ul-service-descr">over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                            <a href="service-details.html" class="ul-service-btn">Sell a Home <i class="flaticon-aro-left"></i></a>
                        </div>
                    </div>
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