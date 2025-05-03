<!-- FOOTER SECTION START -->
<footer class="ul-footer">
    <div class="ul-footer-top">
        <div class="ul-container">
            <div class="ul-footer-top-wrapper wow animate__fadeInUp">
                <div class="ul-footer-about">
                    <div class="header-bottom-left">
                        <div class="logo-container">
                            <a href="{{ route('home.index') }}" class="d-inline-block"><img src="{{ asset('assets/img/brillian/company_logo.jpg') }}" width="200" height="200"></a>
                        </div>
                    </div>                    <p class="ul-footer-about-txt">over 1 million+ homes for sale available on the website, we can match
                        you with a house you will want to call home.</p>
                    <div class="ul-footer-socials">
                        <a href="#"><i class="flaticon-facebook"></i></a>
                        <a href="#"><i class="flaticon-instagram"></i></a>
                        <a href="#"><i class="flaticon-twitter"></i></a>
                        <a href="#"><i class="flaticon-linkedin"></i></a>
                    </div>
                </div>

                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">USEFUL LINKS</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('home.index') }}">Home</a>
                            <a href="{{ route('about.index') }}">About</a>
                            <a href="{{ route('services.index') }}">Services</a>
                            <a href="{{ route('projects.index') }}">Projects</a>
                            <a href="{{ route('blog.index') }}">Blog</a>
                        </div>
                    </div>
                </div>
                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">OUR SERVICES</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('services.index') }}">Buy and sell properties</a>
                            <a href="{{ route('services.show', ['slug' => 'rent-home'])  }}">Rent home</a>
                            <a href="{{ route('services.index') }}">Builder trade-up</a>
                            <a href="{{ route('services.index') }}">Property Management</a>
                            <a href="{{ route('services.index') }}">Real Estate Consulting</a>
                        </div>
                    </div>
                </div>
                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">ABOUT COMPANY</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('about.index') }}">Company</a>
                            <a href="{{ route('team.index') }}">Our Team</a>
                            <a href="{{ route('about.index') }}">Investors</a>
                            <a href="{{ route('about.index') }}">Terms & Privacy</a>
                        </div>
                    </div>
                </div>
                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">CONTACT US</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('contact.index') }}">Contact</a>
                            <a href="{{ route('contact.index') }}">Help Center</a>
                            <a href="{{ route('contact.index') }}">FAQ</a>
                            <a href="{{ route('contact.index') }}">Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer bottom -->
    <div class="ul-footer-bottom">
        <p class="copyright-txt">&copy;{{ date('Y') }} Realestics. All rights reserved</p>
    </div>

    <!-- vector -->
    <div class="ul-footer-vectors">
        <img src="{{ asset('assets/img/footer-vector-img-1.png') }}" alt="Footer Image" class="ul-footer-vector-1">
        <img src="{{ asset('assets/img/footer-vector-img-2.png') }}" alt="Footer Image" class="ul-footer-vector-2">
    </div>
</footer>
<!-- FOOTER SECTION END -->

<!-- libraries JS -->

<script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/splide/splide.min.js') }}"></script>
<script src="{{ asset('assets/vendor/splide/splide-extension-auto-scroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slim-select/slimselect.min.js') }}"></script>
<script src="{{ asset('assets/vendor/animate-wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/vendor/splittype/index.min.js') }}"></script>
<script src="{{ asset('assets/vendor/mixitup/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fslightbox/fslightbox.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/tab.js') }}"></script>
