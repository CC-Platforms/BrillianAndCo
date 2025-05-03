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
                                <a href="tel:+237652383694" class="ul-contact-info"><i class="flaticon-telephone"></i>
                                    +237 652 383 694
                                </a>
                                <a href="mailto:info@realestics.com" class="ul-contact-info"><i class="flaticon-mail"></i>
                                    bricore@gmail.com</a>
                                <div class="ul-contact-info">
                                    <i class="flaticon-location-pin"></i>
                                    <span class="txt">Bonduma, Mercedes Entrance, Buea</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- form -->
                    <div class="col-md-7">
                        <div class="ul-contact-form-wrapper">
                            <form action="#">
                                <div class="form-group">
                                    <label for="contact-first-name">First Name</label>
                                    <input type="text" name="contact-first-name" id="contact-first-name"
                                        placeholder="John">
                                </div>

                                <div class="form-group">
                                    <label for="contact-last-name">Last Name</label>
                                    <input type="text" name="contact-last-name" id="contact-last-name"
                                        placeholder="Doe">
                                </div>

                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="email" name="contact-email" id="contact-email"
                                        placeholder="demo@realestics.com">
                                </div>

                                <div class="form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input type="tel" name="contact-phone" id="contact-phone"
                                        placeholder="+1 012 3456 789">
                                </div>

                                <div class="form-group">
                                    <label for="contact-message">Message</label>
                                    <textarea name="contact-message" id="contact-message"
                                        placeholder="Write Message"></textarea>
                                </div>

                                <button class="ul-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.317104172501!2d9.268981899999998!3d4.1579204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106133d14f5c1209%3A0xa3e943913fe6e83!2sBRILLIAN%20AND%20CO%20REAL%20-%20ESTATE!5e0!3m2!1sen!2scm!4v1746276244101!5m2!1sen!2scm"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="ul-contact-map"></iframe>
    <!-- CONTACT SECTION END -->

</main>
@endsection