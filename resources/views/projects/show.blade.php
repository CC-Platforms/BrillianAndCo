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
                    <div class="ul-project-details-actions">
                        <!-- save -->
                        <button class="ul-project-details-action">
                            <span class="icon"><i class="flaticon-heart"></i></span>
                            <span>Save</span>
                        </button>
                        <!-- compare -->
                        <button class="ul-project-details-action">
                            <span class="icon"><i class="flaticon-compare-2"></i></span>
                            <span>Compare</span>
                        </button>
                        <!-- share -->
                        <button class="ul-project-details-action">
                            <span class="icon"><i class="flaticon-share-1"></i></span>
                            <span>Share</span>
                        </button>
                    </div>

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
                                    <div class="swiper-slide">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-2.jpg" alt="Project Image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-3.jpg" alt="Project Image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-4.jpg" alt="Project Image">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper ul-project-details-img-slider-thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-2.jpg" alt="Project Image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-3.jpg" alt="Project Image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/project-details-img-big-4.jpg" alt="Project Image">
                                    </div>
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

                        <!-- preview video -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Video Preview</h3>
                            <div class="ul-project-details-video wow animate__fadeInUp">
                                <img src="assets/img/project-video-cover.jpg" alt="Video Cover" class="video-cover">
                                <a href="https://youtu.be/4jnzf1yj48M?si=tSUQuTCnqTSjrab8" data-fslightbox="video"><i class="flaticon-play"></i></a>
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

                        <!-- location -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Location</h3>
                            <div class="ul-project-details-map wow animate__fadeInUp">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.7025865590476!2d90.41431874020503!3d23.79468996086054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a494861707%3A0x59ab371b6ff2e0fd!2zR3Vsc2hhbiBTcXVhcmUg4KaX4KeB4Kay4Ka24Ka-4KaoIOCmuOCnjeCmleCmr-CmvOCmvuCmsA!5e0!3m2!1sen!2sbd!4v1730960865419!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <!-- customer review -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Customer Review</h3>
                            <div class="wow animate__fadeInUp">
                                <!-- single review -->
                                <div class="ul-project-details-review">
                                    <!-- reviewer image -->
                                    <div class="ul-project-details-review-reviewer-img">
                                        <img src="assets/img/reviewer-img-1.png" alt="Reviewer Image">
                                    </div>

                                    <div class="ul-project-details-review-txt">
                                        <div class="header">
                                            <div class="left">
                                                <h4 class="reviewer-name">Leslie Alexander</h4>
                                                <h5 class="review-date">March 20, 2023 at 2:37 pm</h5>
                                            </div>

                                            <div class="right">
                                                <div class="rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Phasellus eget fermentum mauris. Suspendisse nec dignissim nulla. Integer non quam commodo, scelerisque felis id, eleifend turpis. Phasellus in nulla quis erat tempor tristique eget vel purus.</p>
                                    </div>
                                </div>

                                <!-- single review -->
                                <div class="ul-project-details-review">
                                    <!-- reviewer image -->
                                    <div class="ul-project-details-review-reviewer-img">
                                        <img src="assets/img/reviewer-img-2.png" alt="Reviewer Image">
                                    </div>

                                    <div class="ul-project-details-review-txt">
                                        <div class="header">
                                            <div class="left">
                                                <h4 class="reviewer-name">Leslie Alexander</h4>
                                                <h5 class="review-date">March 20, 2023 at 2:37 pm</h5>
                                            </div>

                                            <div class="right">
                                                <div class="rating">
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <p>Phasellus eget fermentum mauris. Suspendisse nec dignissim nulla. Integer non quam commodo, scelerisque felis id, eleifend turpis. Phasellus in nulla quis erat tempor tristique eget vel purus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add a review -->
                        <div class="ul-project-details-block ul-project-details-review-form-wrapper wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Add a Review</h3>
                            <form class="ul-project-details-review-form wow animate__fadeInUp">
                                <div class="form-group rating-field-wrapper">
                                    <span class="title">Your Rating:</span>
                                    <div class="rating-field">
                                        <button type="button"><i class="flaticon-star-1"></i></button>
                                        <button type="button"><i class="flaticon-star-1"></i></button>
                                        <button type="button"><i class="flaticon-star-1"></i></button>
                                        <button type="button"><i class="flaticon-star-1"></i></button>
                                        <button type="button"><i class="flaticon-star-1"></i></button>
                                    </div>
                                </div>

                                <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
                                    <div class="form-group">
                                        <input type="text" name="review-name" id="review-name" placeholder="Your Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="review-email" id="review-email" placeholder="Your Email">
                                    </div>

                                    <div class="form-group col-12">
                                        <div class="review-highlight-point">
                                            <select name="highlight-point" id="highlight-point">
                                                <option value="1">Customer Support</option>
                                                <option value="2">Flexibility</option>
                                                <option value="3">Design Quality</option>
                                                <option value="4">Feature Availability</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <textarea name="review-message" id="review-message" placeholder="Your Review"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="ul-btn"><i class="flaticon-house-1"></i> Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- right sidebar -->
                    <div class="col-lg-4">
                        <div class="ul-project-details-sidebar wow animate__fadeInUp">
                            <h3 class="ul-project-details-sidebar-title">Contact the listing owner</h3>

                            <div class="ul-project-details-listing-owner">
                                <div class="ul-project-details-listing-owner-img">
                                    <img src="assets/img/reviewer-img-3.png" alt="Listing Owner Image">
                                </div>
                                <div class="ul-project-details-listing-owner-txt">
                                    <h4 class="ul-project-details-listing-owner-name">Leslie Alexander</h4>
                                    <span class="contact-infos d-block">Supervisor</span>
                                    <div class="contact-infos d-none">
                                        <a href="tel:+406-555-0120">+406- 555-0120</a>
                                        <a href="mailto:JqkZ0@example.com">JqkZ0@example.com</a>
                                    </div>
                                </div>
                            </div>

                            <form action="#" class="ul-project-details-owner-contact-form">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Name*">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" placeholder="Phone*">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="ul-btn">Submit Now</button>
                                </div>
                            </form>

                            <button class="ul-btn ul-project-details-wa-btn"><i class="flaticon-telephone"></i>WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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