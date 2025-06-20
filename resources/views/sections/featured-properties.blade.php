<!-- FEATURED PROPERTIES SECTION START -->

<section class="ul-featured-properties ul-section-spacing">
    <div class="ul-section-header text-center">
        <h2 class="ul-section-title text-white">Featured Properties</h2>
        <div class="ul-section-divider"></div>
        <p class="ul-section-subtitle text-gray-50">Explore our selection of premium properties in prime locations </p>
    </div>

    <div class="ul-featured-properties-title-slider splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties</h2>
                </li>
                <li class="splide__slide">
                    <h2 class="ul-featured-properties-title-txt"><i class="flaticon-star"></i> Featured Properties</h2>
                </li>
            </ul>
        </div>
    </div>

    <div class="ul-featured-properties-slider-wrapper wow animate__fadeInUp">
        <div class="ul-featured-properties-slider swiper">
            <div class="swiper-wrapper">
                @foreach($featuredProperties as $index => $property)
                <div class="swiper-slide">
                    <div class="ul-featured-property ul-project">
                        <div>
                            <div class="header">
                                <div class="left"><span class="index">{{ sprintf('%02d', $index + 1) }}</span></div>
                                <div class="right"></div>
                            </div>
                            <p class="ul-project-title">{{ $property->title }}</p>
                            <p class="ul-project-location">{{ $property->location }}</p>
                        </div>
                        <div class="ul-project-img">
                            <img src="{{ str_starts_with($property->featured_image, 'assets/') ? asset($property->featured_image) : asset('storage/' . $property->featured_image) }}" alt="{{ $property->title }} Image">
                            <span class="ul-project-tag">{{ $property->tag }}</span>
                        </div>
                        <div class="ul-project-txt">
                            <span class="ul-project-price"><span class="number">{{ $property->price }}</span>/{{ $property->period }}</span>
                            <div class="ul-project-infos ul-featured-property-infos">
                                <div class="ul-project-info ul-featured-property-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">{{ $property->beds }} Beds</span>
                                </div>
                                <div class="ul-project-info ul-featured-property-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">{{ $property->bathrooms }} Bathrooms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="ul-featured-properties-slider-nav ul-slider-nav">
            <button class="prev"><i class="flaticon-arrow"></i></button>
            <button class="next"><i class="flaticon-right-arrow"></i></button>
        </div>
    </div>
</section>
<!-- FEATURED PROPERTIES SECTION END -->

<!-- FEATURED PROPERTIES SECTION END -->
