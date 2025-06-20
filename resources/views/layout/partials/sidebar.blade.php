<!-- SIDEBAR SECTION START -->
{{-- <div class="ul-sidebar">
    <!-- header -->
    <div class="ul-sidebar-header">
        <div class="ul-sidebar-header-logo">
            <a href="{{ route('home.index') }}" class="d-inline-block"><img src="{{ asset('assets/img/brillian/company_logo_circle.png') }}" alt="logo" class="logo"></a>
        </div>
        <!-- sidebar closer -->
        <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
    </div>

    <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

    <!-- updated description -->
    <p class="ul-sidebar-descr d-none d-lg-flex">
        At Brillinan and Co Real Estate, we specialize in connecting people to their ideal homes. Whether you're looking to rent, buy, or invest,
        our mission is to simplify your real estate journey with expert guidance and trusted listings.
    </p>

    <!-- sidebar footer -->
    <div class="ul-sidebar-footer">
        <span class="ul-sidebar-footer-title">Follow Us</span>

        <div class="ul-sidebar-footer-social">
            <a href="{{ url('https://www.facebook.com/share/15VZkFmxTA/?mibextid=wwXIfr') }}"><i class="flaticon-facebook"></i></a>
            <a href="{{ url('https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr') }}"><i class="flaticon-instagram"></i></a>
            <a href="{{ url('https://www.tiktok.com/@agentbrillian1?_t=ZM-8w12VJkFaSN&_r=1') }}"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</div> --}}
<!-- SIDEBAR SECTION END -->


<div class="ul-sidebar">
    <!-- header -->
    <div class="ul-sidebar-header">
        <div class="ul-sidebar-header-logo">
            <a href="{{ route('home.index') }}" class="d-inline-block"><img src="{{ asset('assets/img/brillian/company_logo_circle.png') }}" alt="logo" class="logo"></a>
        </div>
        <!-- sidebar closer -->
        <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
    </div>

    <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

    <p class="ul-sidebar-descr d-none d-lg-flex">At Brillinan and Co Real Estate, we specialize in connecting people to their ideal homes. Whether you're looking to rent, buy, or invest,
        our mission is to simplify your real estate journey with expert guidance and trusted listings.</p>

        <div class="slider-wrapper">
            <div class="ul-sidebar-slider swiper">
                <div class="swiper-wrapper">
                    @foreach($projects as $project)
                        <!-- single project -->
                        <div class="swiper-slide">
                            <div class="ul-project">
                                <div class="ul-project-img">
                                    <img src="{{ str_starts_with($project->featured_image, 'assets/') ? asset($project->featured_image) : asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}">
                                </div>
                                <div class="ul-project-txt">
                                    <span class="ul-project-tag">{{ $project->tag }}</span>
                                    <div class="top">
                                        <div class="left">
                                            <span class="ul-project-price">
                                                <span class="number">{{ $project->price }}</span>/{{ $project->period }}
                                            </span>
                                            <a href="{{ route('projects.show', ['slug' => $project->slug]) }}" class="ul-project-title">
                                                {{ $project->title }}
                                            </a>
                                            <p class="ul-project-location">{{ $project->location }}</p>
                                        </div>
                                        <div class="right">
                                            <!-- Optional content like favorite icon or share -->
                                        </div>
                                    </div>

                                    <!-- bottom -->
                                    <div class="ul-project-infos">
                                        <!-- single info -->
                                        <div class="ul-project-info">
                                            <span class="icon"><i class="flaticon-bed-color"></i></span>
                                            <span class="text">{{ $project->beds }} Beds</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info">
                                            <span class="icon"><i class="flaticon-couch"></i></span>
                                            <span class="text">{{ $project->parlor }} Parlor</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info">
                                            <span class="icon"><i class="flaticon-kitchen"></i></span>
                                            <span class="text">{{ $project->kitchen }} Kitchen</span>
                                        </div>
                                        <!-- single info -->
                                        <div class="ul-project-info">
                                            <span class="icon"><i class="flaticon-bath"></i></span>
                                            <span class="text">{{ $project->bathroom }} Bathroom</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        

    <!-- sidebar footer -->
    <div class="ul-sidebar-footer">
        <span class="ul-sidebar-footer-title">Follow us</span>

        <div class="ul-sidebar-footer-social">
            <a href="{{ url('https://www.facebook.com/share/15VZkFmxTA/?mibextid=wwXIfr') }}"><i class="flaticon-facebook"></i></a>
            <a href="{{ url('https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr') }}"><i class="flaticon-instagram"></i></a>
            <a href="{{ url('https://www.tiktok.com/@agentbrillian1?_t=ZM-8w12VJkFaSN&_r=1') }}"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</div>