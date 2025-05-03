@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Contact</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Contact</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->


    <!-- CONTACT SECTION START -->
    <div class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container">
            <div class="ul-contact">
                <div class="row g-0">
                    <!-- contact infos -->
                    <div class="col-md-5">
                        <div class="ul-contact-infos-wrapper">
                            <div class="heading">
                                <h3 class="ul-contact-infos-title">Contact Information</h3>
                                <span class="ul-contact-infos-sub-title">Say something to start a live chat!</span>
                            </div>

                            <!-- infos -->
                            <div class="ul-contact-infos">
                                <a href="tel:+10123456789" class="ul-contact-info"><i class="flaticon-telephone"></i> +1012 3456 789</a>
                                <a href="mailto:demo@gmail.com" class="ul-contact-info"><i class="flaticon-mail"></i> demo@gmail.com</a>
                                <div class="ul-contact-info">
                                    <i class="flaticon-location-pin"></i>
                                    <span class="txt">132 Dartmouth Street Boston, Massachusetts 02156 United States</span>
                                </div>
                            </div>

                            <!-- socials -->
                            <div class="ul-contact-socials">
                                <a href="#"><i class="flaticon-twitter-1"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                                <a href="#"><i class="flaticon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- form -->
                    <div class="col-md-7">
                        <div class="ul-contact-form-wrapper">
                            <form action="#">
                                <div class="form-group">
                                    <label for="contact-first-name">First Name</label>
                                    <input type="text" name="contact-first-name" id="contact-first-name" placeholder="John">
                                </div>

                                <div class="form-group">
                                    <label for="contact-last-name">Last Name</label>
                                    <input type="text" name="contact-last-name" id="contact-last-name" placeholder="Doe">
                                </div>

                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="email" name="contact-email" id="contact-email" placeholder="demo@realestics.com">
                                </div>

                                <div class="form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input type="tel" name="contact-phone" id="contact-phone" placeholder="+1 012 3456 789">
                                </div>

                                <div class="form-group">
                                    <span class="contact-inner-title">Select Subject?</span>
                                    <div class="ul-contact-form-subjects">
                                        <!-- subject 1 -->
                                        <div class="ul-radio">
                                            <label for="contact-subject-1">
                                                <input type="radio" name="contact-subject" id="contact-subject-1" checked>
                                                <span class="checkmark"><i class="flaticon-check-2"></i></span>
                                                <span class="txt">General Inquiry</span>
                                            </label>
                                        </div>
                                        <!-- subject 1 -->
                                        <div class="ul-radio">
                                            <label for="contact-subject-2">
                                                <input type="radio" name="contact-subject" id="contact-subject-2">
                                                <span class="checkmark"><i class="flaticon-check-2"></i></span>
                                                <span class="txt">General Inquiry</span>
                                            </label>
                                        </div>
                                        <!-- subject 1 -->
                                        <div class="ul-radio">
                                            <label for="contact-subject-3">
                                                <input type="radio" name="contact-subject" id="contact-subject-3">
                                                <span class="checkmark"><i class="flaticon-check-2"></i></span>
                                                <span class="txt">General Inquiry</span>
                                            </label>
                                        </div>
                                        <!-- subject 1 -->
                                        <div class="ul-radio">
                                            <label for="contact-subject-4">
                                                <input type="radio" name="contact-subject" id="contact-subject-4">
                                                <span class="checkmark"><i class="flaticon-check-2"></i></span>
                                                <span class="txt">General Inquiry</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="contact-message">Message</label>
                                    <textarea name="contact-message" id="contact-message" placeholder="Write Message"></textarea>
                                </div>

                                <button class="ul-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41294.67553538239!2d90.4051752801728!3d23.81973204385709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64e5249ad39%3A0x2392867b037e718e!2sKuril%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1732511385236!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ul-contact-map"></iframe>
    <!-- CONTACT SECTION END -->

</main>
@endsection