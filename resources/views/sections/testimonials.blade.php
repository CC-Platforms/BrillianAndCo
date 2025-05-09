<!-- TESTIMONIAL SECTION START -->
@include('sections.section-header', [
    'title' => 'What Our Clients Say',
    'subtitle' => 'Hear about the experiences of those who have worked with us'
])
<section class="ul-testimonial ul-section-spacing">
    {{-- add a heading here too --}}
    <div class="ul-testimonial-container">
        <div class="row row-cols-lg-2 row-cols-1 gx-0 align-items-center flex-lg-row flex-column-reverse gy-5">
            <!-- img -->
            <div class="col">
                <div class="ul-testimonial-img wow animate__fadeInUp">
                    <img src="{{ asset("assets/img/brillia13.jpg")}}" alt="Happy client giving a testimonial">
                </div>
            </div>
            <!-- testimonial slider -->
            <div class="col">
                <div class="ul-testimonial-txt wow animate__fadeInUp">
                    <div class="ul-section-heading">
                        {{-- <div>
                            <span class="ul-section-sub-title">Testimonials</span>
                            <h2 class="ul-section-title">What Our Clients Say</h2>
                        </div> --}}
                    </div>
                    <div class="ul-testimonial-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="ul-testimony">
                                    <div class="top">
                                        <div class="ul-testimony-reviewer-img">
                                            <img src="{{ url('https://lh3.googleusercontent.com/a/ACg8ocIdS5MxPrcLtq38qhLB0GubufKVa0RvIKc4gnPpel-scoSTLw=w108-h108-p-rp-mo-br100') }}"
                                                alt="Reviewer Image - Jane">
                                        </div>
                                        <div class="ul-testimony-reviewer-info">
                                            <h3 class="ul-testimony-reviewer-name">Mary Namaya</h3>
                                            <h4 class="ul-testimony-reviewer-role">Client</h4>
                                            <div class="ul-testimony-rating">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="ul-testimony-txt">"Reliable and rapid services. Within 24 hours I got my
                                        desired home with little or no stress. Thanks Brilliant and co. Keep doing the
                                        good job."</p>
                                </div>
                            </div>

                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="ul-testimony">
                                    <div class="top">
                                        <div class="ul-testimony-reviewer-img">
                                            <img src="{{ url('https://lh3.googleusercontent.com/a-/ALV-UjVF5OEwAfNvdeIJIfhlKRvLQppMK2FrBPguREfvFMF119wfuB_g=w108-h108-p-rp-mo-br100') }}"
                                                alt="Reviewer Image - Michael">
                                        </div>
                                        <div class="ul-testimony-reviewer-info">
                                            <h3 class="ul-testimony-reviewer-name">Agbornde Susan</h3>
                                            <h4 class="ul-testimony-reviewer-role">Client</h4>
                                            <div class="ul-testimony-rating">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="ul-testimony-txt">"A team of professionals, ready to satisfy their
                                        customers at any cost. They're quick action indeed!"</p>
                                </div>
                            </div>

                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="ul-testimony">
                                    <div class="top">
                                        <div class="ul-testimony-reviewer-img">
                                            <img src="{{ url('https://lh3.googleusercontent.com/a-/ALV-UjWRzTrvUKsuQkf2ji9g0VFvDq-vu5lfb72kYG_YTyNPXcXm4VXV=w108-h108-p-rp-mo-ba1-br100') }}"
                                                alt="Reviewer Image - Sarah">
                                        </div>
                                        <div class="ul-testimony-reviewer-info">
                                            <h3 class="ul-testimony-reviewer-name">Chu Rinho</h3>
                                            <h4 class="ul-testimony-reviewer-role">Client</h4>
                                            <div class="ul-testimony-rating">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="ul-testimony-txt">"Many thanks to the founder of this great initive."</p>
                                </div>
                            </div>
                        </div>
                        <!-- slider pagination -->
                        <div class="ul-testimonial-slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL SECTION END -->