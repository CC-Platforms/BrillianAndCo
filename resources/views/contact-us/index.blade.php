@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Contact</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ url('/') }}">Home</a>
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
                    <!-- Contact Infos -->
                    <div class="col-md-5">
                        <div class="ul-contact-infos-wrapper">
                            <div class="heading">
                                <h3 class="ul-contact-infos-title">Get in Touch</h3>
                                <span class="ul-contact-infos-sub-title">We're available to chat on WhatsApp!</span>
                            </div>

                            <div class="ul-contact-infos">
                                <a href="{{ url('https://wa.me/237652383694') }}" class="ul-contact-info" target="_blank">
                                    <i class="fab fa-phone-alt"></i> +237 652 383 694
                                </a>
                                <a href="mailto:bricore@gmail.com" class="ul-contact-info">
                                    <i class="flaticon-mail"></i> bricore@gmail.com
                                </a>
                                <div class="ul-contact-info">
                                    <i class="flaticon-location-pin"></i>
                                    <span class="txt">Bonduma, Mercedes Entrance, Buea</span>
                                </div>
                                {{-- include social media handles --}}
                                <div class="ul-contact-socials">
                                    <a href="{{ url('https://www.facebook.com/share/197AyYyroV/?mibextid=wwXIfr') }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ url('https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr') }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="{{ url('https://www.tiktok.com/@agentbrillian1?_t=ZM-8w2zfFhyJ8P&_r=1') }}" target="_blank">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Message Section -->
                    <div class="col-md-7">
                        <div class="ul-contact-form-wrapper">
                            <div class="whatsapp-box">
                                <h4>Send Us a Message on WhatsApp</h4>
                                <p>Click the button below to start a WhatsApp chat with us. We're here to help you!</p>
                                <a href="{{ url('https://wa.me/237652383694') }}" target="_blank" class="ul-btn whatsapp-btn">
                                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.317104172501!2d9.268981899999998!3d4.1579204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106133d14f5c1209%3A0xa3e943913fe6e83!2sBRILLIAN%20AND%20CO%20REAL%20-%20ESTATE!5e0!3m2!1sen!2scm!4v1746276244101!5m2!1sen!2scm"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="ul-contact-map">
    </iframe>
    <!-- CONTACT SECTION END -->

</main>
@endsection
