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
                            <div class="img"><img src="assets/img/why-choose-img-1.jpg" alt="image"></div>
                            <div class="img">
                                <img src="assets/img/why-choose-img-2.jpg" alt="image">
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
                        <div class="ul-about-img ul-inner-about-img"><img src="assets/img/about-img.jpg" alt="About Image"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->


        <!-- TEAM SECTION START -->
        <section class="ul-team ul-section-spacing">
            <div class="ul-inner-page-container wow animate__fadeInUp">
                <!-- heading -->
                <div class="ul-section-heading">
                    <div class="left">
                        <span class="ul-section-sub-title">Our Expert</span>
                        <h2 class="ul-section-title">Meet Our Real Estate Team</h2>
                    </div>

                    <div class="right flex-shrink-0">
                        <a href="team.html" class="ul-btn">View All Members</a>
                    </div>
                </div>

                <!-- team slider -->
                <div class="ul-team-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- single team -->
                        <div class="swiper-slide">
                            <div class="ul-team-card">
                                <div class="ul-team-card-img">
                                    <img src="assets/img/team-1.jpg" alt="Team Image">
                                </div>

                                <div class="ul-team-card-txt">
                                    <div class="ul-team-card-socials">
                                        <div class="ul-team-card-socials-links">
                                            <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                            <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                            <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                            <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                        </div>
                                        <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                    </div>
                                    <h4 class="ul-team-card-title"><a href="team-details.html">John Doe</a></h4>
                                    <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- single team -->
                        <div class="swiper-slide">
                            <div class="ul-team-card">
                                <div class="ul-team-card-img">
                                    <img src="assets/img/team-2.jpg" alt="Team Image">
                                </div>

                                <div class="ul-team-card-txt">
                                    <div class="ul-team-card-socials">
                                        <div class="ul-team-card-socials-links">
                                            <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                            <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                            <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                            <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                        </div>
                                        <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                    </div>
                                    <h4 class="ul-team-card-title"><a href="team-details.html">John Doe</a></h4>
                                    <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- single team -->
                        <div class="swiper-slide">
                            <div class="ul-team-card">
                                <div class="ul-team-card-img">
                                    <img src="assets/img/team-3.jpg" alt="Team Image">
                                </div>

                                <div class="ul-team-card-txt">
                                    <div class="ul-team-card-socials">
                                        <div class="ul-team-card-socials-links">
                                            <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                            <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                            <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                            <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                        </div>
                                        <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                    </div>
                                    <h4 class="ul-team-card-title"><a href="team-details.html">John Doe</a></h4>
                                    <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- single team -->
                        <div class="swiper-slide">
                            <div class="ul-team-card">
                                <div class="ul-team-card-img">
                                    <img src="assets/img/team-1.jpg" alt="Team Image">
                                </div>

                                <div class="ul-team-card-txt">
                                    <div class="ul-team-card-socials">
                                        <div class="ul-team-card-socials-links">
                                            <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                            <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                            <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                            <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                        </div>
                                        <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                    </div>
                                    <h4 class="ul-team-card-title"><a href="team-details.html">John Doe</a></h4>
                                    <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- single team -->
                        <div class="swiper-slide">
                            <div class="ul-team-card">
                                <div class="ul-team-card-img">
                                    <img src="assets/img/team-2.jpg" alt="Team Image">
                                </div>

                                <div class="ul-team-card-txt">
                                    <div class="ul-team-card-socials">
                                        <div class="ul-team-card-socials-links">
                                            <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                            <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                            <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                            <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                        </div>
                                        <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                    </div>
                                    <h4 class="ul-team-card-title"><a href="team-details.html">John Doe</a></h4>
                                    <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- team slider nav -->
                    <div class="ul-team-slider-nav ul-slider-nav">
                        <button class="prev"><i class="flaticon-arrow"></i></button>
                        <button class="next"><i class="flaticon-right-arrow"></i></button>
                    </div>
                </div>
            </div>

            <!-- vectors -->
            <div class="ul-section-vectors ul-team-vectors">
                <img src="assets/img/team-vector-1.png" alt="vector" class="wow animate__fadeInLeft">
                <img src="assets/img/team-vector-2.png" alt="vector" class="wow animate__fadeInRight">
            </div>
        </section>
        <!-- TEAM SECTION END -->


        <!-- TESTIMONIAL SECTION START -->
        <section class="ul-inner-testimonial overflow-hidden ul-section-spacing">
            <div class="ul-inner-page-container wow animate__fadeInUp">
                <div class="ul-section-heading text-center justify-content-center">
                    <div>
                        <span class="ul-section-sub-title">Testimonials</span>
                        <h2 class="ul-section-title">Latest Client Feedback</h2>
                    </div>
                </div>

                <!-- slider -->
                <div class="ul-inner-testimonial-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- single review -->
                        <div class="swiper-slide">
                            <div class="ul-inner-testimony">
                                <div class="ul-inner-testimony-rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>
                                <p class="ul-inner-testimony-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                                <div class="ul-inner-testimony-bottom">
                                    <div class="ul-inner-testimony-reviewer">
                                        <div class="reviewer-image"><img src="assets/img/reviewer-img-2.png" alt="reviewer image"></div>
                                        <div>
                                            <h3 class="reviewer-name">Esther Howard</h3>
                                            <span class="reviewer-role">Web Designer</span>
                                        </div>
                                    </div>

                                    <!-- icon -->
                                    <div class="ul-inner-testimony-icon"><i class="flaticon-quote"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="swiper-slide">
                            <div class="ul-inner-testimony">
                                <div class="ul-inner-testimony-rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>
                                <p class="ul-inner-testimony-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                                <div class="ul-inner-testimony-bottom">
                                    <div class="ul-inner-testimony-reviewer">
                                        <div class="reviewer-image"><img src="assets/img/reviewer-img-3.png" alt="reviewer image"></div>
                                        <div>
                                            <h3 class="reviewer-name">Esther Howard</h3>
                                            <span class="reviewer-role">Web Designer</span>
                                        </div>
                                    </div>

                                    <!-- icon -->
                                    <div class="ul-inner-testimony-icon"><i class="flaticon-quote"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="swiper-slide">
                            <div class="ul-inner-testimony">
                                <div class="ul-inner-testimony-rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>
                                <p class="ul-inner-testimony-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                                <div class="ul-inner-testimony-bottom">
                                    <div class="ul-inner-testimony-reviewer">
                                        <div class="reviewer-image"><img src="assets/img/reviewer-img-1.png" alt="reviewer image"></div>
                                        <div>
                                            <h3 class="reviewer-name">Esther Howard</h3>
                                            <span class="reviewer-role">Web Designer</span>
                                        </div>
                                    </div>

                                    <!-- icon -->
                                    <div class="ul-inner-testimony-icon"><i class="flaticon-quote"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="swiper-slide">
                            <div class="ul-inner-testimony">
                                <div class="ul-inner-testimony-rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>
                                <p class="ul-inner-testimony-descr">Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan.</p>
                                <div class="ul-inner-testimony-bottom">
                                    <div class="ul-inner-testimony-reviewer">
                                        <div class="reviewer-image"><img src="assets/img/reviewer-img-2.png" alt="reviewer image"></div>
                                        <div>
                                            <h3 class="reviewer-name">Esther Howard</h3>
                                            <span class="reviewer-role">Web Designer</span>
                                        </div>
                                    </div>

                                    <!-- icon -->
                                    <div class="ul-inner-testimony-icon"><i class="flaticon-quote"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                <div class="ul-slider-action-wrapper ul-inner-testimonial-slider-action-wrapper">
                    <button class="ul-inner-testimonial-slider-prev">Previous</button>
                    <div class="ul-slider-pagination-progress ul-inner-testimonial-slider-pagination flex-shrink-0"></div>
                    <button class="ul-inner-testimonial-slider-next">Next</button>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL SECTION END -->


        <!-- FEATURES SECTION START -->
        <section class="ul-features ul-section-spacing">
            <div class="ul-inner-page-container">
                <div class="ul-features-content wow animate__fadeInUp">
                    <div class="row ul-bs-row">
                        <!-- section heading -->
                        <div class="col-lg-3">
                            <div class="ul-section-heading ul-features-heading">
                                <div>
                                    <span class="ul-section-sub-title">Facilities</span>
                                    <h2 class="ul-section-title">Top Features</h2>
                                    <a href="#" class="ul-features-heading-btn ul-btn">Add Properties</a>
                                </div>

                                <!-- vector -->
                                <img src="assets/img/features-vector.svg" alt="vector" class="vector wow animate__fadeInLeft">
                            </div>
                        </div>

                        <!-- features -->
                        <div class="col-lg-9">
                            <div class="ul-features-slider swiper">
                                <div class="swiper-wrapper">
                                    <!-- single feature -->
                                    <div class="swiper-slide">
                                        <div class="ul-feature">
                                            <div class="ul-feature-icon"><i class="flaticon-buildings"></i></div>
                                            <div class="ul-feature-txt">
                                                <h3 class="ul-feature-title"><a href="projects.html">Warehouse</a></h3>
                                                <span class="ul-feature-sub-title">4 Properties</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single feature -->
                                    <div class="swiper-slide">
                                        <div class="ul-feature">
                                            <div class="ul-feature-icon"><i class="flaticon-building"></i></div>
                                            <div class="ul-feature-txt">
                                                <h3 class="ul-feature-title"><a href="projects.html">Town Ship</a></h3>
                                                <span class="ul-feature-sub-title">5 Properties</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single feature -->
                                    <div class="swiper-slide">
                                        <div class="ul-feature">
                                            <div class="ul-feature-icon"><i class="flaticon-house-1"></i></div>
                                            <div class="ul-feature-txt">
                                                <h3 class="ul-feature-title"><a href="projects.html">Villa</a></h3>
                                                <span class="ul-feature-sub-title">8 Properties</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single feature -->
                                    <div class="swiper-slide">
                                        <div class="ul-feature">
                                            <div class="ul-feature-icon"><i class="flaticon-building"></i></div>
                                            <div class="ul-feature-txt">
                                                <h3 class="ul-feature-title"><a href="projects.html">Warehouse</a></h3>
                                                <span class="ul-feature-sub-title">4 Properties</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ul-slider-action-wrapper ul-features-slider-action-wrapper">
                                <button class="ul-features-slider-prev">Previous</button>
                                <div class="ul-slider-pagination-progress ul-features-slider-pagination flex-shrink-0"></div>
                                <button class="ul-features-slider-next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURES SECTION END -->        
    </div>
</main>

@endsection