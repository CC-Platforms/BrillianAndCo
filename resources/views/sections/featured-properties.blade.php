    <!-- FEATURED PROPERTIES SECTION START -->
    <section class="ul-featured-properties ul-section-spacing">
        <div class="ul-featured-properties-title-slider splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties
                        </h2>
                    </li>
                    <li class="splide__slide">
                        <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties
                        </h2>
                    </li>
                </ul>
            </div>
        </div>

        <div class="ul-featured-properties-slider-wrapper wow animate__fadeInUp">
            <div class="ul-featured-properties-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">01</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                {{-- Use url() helper for internal links, potentially with dynamic segments or route()
                                helper --}}
                                <a href="{{ url('project-details/1') }}" class="ul-project-title">Bonapriso
                                    Residence</a>
                                <p class="ul-project-location">Rue Njo-Njo, Bonapriso, Douala</p>
                            </div>
                            <div class="ul-project-img">
                                {{-- Use asset() helper for images --}}
                                <img src="{{ asset('assets/img/project-2.jpg') }}" alt="Bonapriso Residence Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">02</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/2') }}" class="ul-project-title">Bastos Apartment</a>
                                <p class="ul-project-location">Avenue Charles de Gaulle, Bastos, Yaoundé</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-6.jpg') }}" alt="Bastos Apartment Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">03</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/3') }}" class="ul-project-title">Limbe Seaside Home</a>
                                <p class="ul-project-location">Down Beach, Limbe, Southwest Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-1.jpg') }}" alt="Limbe Seaside Home Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">04</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/4') }}" class="ul-project-title">Kribi Beach House</a>
                                <p class="ul-project-location">Londji Beach Area, Kribi, South Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-4.jpg') }}" alt="Kribi Beach House Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-featured-property ul-project">
                            <div>
                                <div class="header">
                                    <div class="left"><span class="index">05</span></div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i
                                                class="flaticon-heart"></i></button>
                                    </div>
                                </div>
                                <a href="{{ url('project-details/5') }}" class="ul-project-title">Buea Mountain View</a>
                                <p class="ul-project-location">Great Soppo, Buea, Southwest Region</p>
                            </div>
                            <div class="ul-project-img">
                                <img src="{{ asset('assets/img/project-5.jpg') }}" alt="Buea Mountain View Image">
                                <span class="ul-project-tag">Popular</span>
                            </div>
                            <div class="ul-project-txt">
                                <span class="ul-project-price"><span class="number">XAF 4,500</span>/Month</span>
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">6x7.5 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ul-featured-properties-slider-nav ul-slider-nav">
                <button class="prev"><i class="flaticon-arrow"></i></button>
                <button class="next"><i class="flaticon-right-arrow"></i></button>
            </div>
        </div>
    </section>
    <!-- FEATURED PROPERTIES SECTION END -->