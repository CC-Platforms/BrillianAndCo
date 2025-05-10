<!-- FOOTER SECTION START -->
<footer class="ul-footer">
    <div class="ul-footer-top">
        <div class="ul-container">
            <div class="ul-footer-top-wrapper wow animate__fadeInUp">
                <div class="ul-footer-about">
                    <div class="header-bottom-left">
                        <div class="logo-container">
                            <a href="{{ route('home.index') }}" class="d-inline-block"><img
                                    src="{{ asset('assets/img/brillian/company_logo_circle.png') }}" width="200"
                                    height="200"></a>
                        </div>
                    </div>
                    <p class="ul-footer-about-txt">Your premier Real Estate Enterprise, we deliver exceptional results
                        and unparalleled service to our clients.</p>
                    <div class="ul-footer-socials">
                        <a href="{{ url('https://www.facebook.com/share/15VZkFmxTA/?mibextid=wwXIfr') }}"><i class="flaticon-facebook"></i></a>
                        <a href="{{ url('https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr') }}"><i class="flaticon-instagram"></i></a>
                        <a href="{{ url('https://www.tiktok.com/@agentbrillian1?_t=ZM-8w12VJkFaSN&_r=1') }}"><i class="fab fa-tiktok"></i></a>
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
                            <a href="{{ route('contact.index') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">OUR SERVICES</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('services.show', ['slug' => 'property-sales-purchase']) }}">Property Sales and Purchase</a>
                            <a href="{{ route('services.show', ['slug' => 'rental-services']) }}">Rental Services</a>
                            <a href="{{ route('services.show', ['slug' => 'investment-services']) }}">Investment Services</a>
                        </div>
                    </div>
                </div>
                <div class="single-column">
                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">ABOUT COMPANY</h3>

                        <div class="ul-footer-widget-links">
                            <a href="{{ route('about.index') }}">Company</a>
                            <a href="{{ route('team.index') }}">Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NEWSLETTER SUBSCRIBE SECTION -->
            <div class="newsletter-subscribe-section py-5 px-4 rounded-4 shadow-lg mt-5 text-white" style="background-color: #000929;">
                <h4 class="fw-bold">Subscribe to our Newsletter</h4>
                <p class="mb-4">Subscribe to read from us in order to get more information on available assets.</p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="d-flex flex-column flex-md-row gap-3 align-items-start align-items-md-center">
                    @csrf
                    <input type="email" name="email" class="form-control rounded-pill px-4 py-2" placeholder="Your email address..." required>
                    <button type="submit" class="btn px-4 py-2 rounded-pill fw-semibold" style="background-color: #3058af; color: white;">Subscribe</button>
                </form>
            </div>
        </div>



    </div>

    <!-- footer bottom -->
    <div class="ul-footer-bottom col">
        <p class="copyright-txt">&copy;{{ date('Y') }} Brillian and Co Real Estate. All rights reserved</p>
        <p class="copyright-txt">Designed by CC Platforms</p>
    </div>

    <!-- vector -->
    <div class="ul-footer-vectors">
        <img src="{{ asset('assets/img/footer-vector-img-1.png') }}" alt="Footer Image" class="ul-footer-vector-1">
        <img src="{{ asset('assets/img/footer-vector-img-2.png') }}" alt="Footer Image" class="ul-footer-vector-2">
    </div>
</footer>
<!-- FOOTER SECTION END -->
