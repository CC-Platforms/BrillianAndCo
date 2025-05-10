<!-- BANNER SECTION START -->
<section class="ul-banner">

        {{-- Success Message --}}
    <div 
        x-data="{ show: {{ session('success') ? 'true' : 'false' }} }" 
        x-init="setTimeout(() => show = false, 4000)" 
        x-show="show"
        x-transition
        class="container my-4"
    >
        <div class="alert alert-success alert-dismissible fade show rounded shadow-sm py-3 mx-[-90rem]" role="alert">
            {{ session('success') }}
        </div>
    </div>
    <!-- top -->
    <div class="top">
        <div class="ul-banner-slider swiper">
            <div class="swiper-wrapper">
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="ul-banner-slide">
                        <div class="ul-banner-container">
                            <div class="row align-items-center flex-sm-row flex-column-reverse">
                                <!-- banner text -->
                                <div class="col-md-9 col-sm-8">
                                    <span class="ul-banner-slide-shadow-title">BRILLIAN AND CO REAL ESTATE</span>
                                    <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                        <span class="ul-banner-slide-sub-title">Your Premier Real Estate Partner</span>
                                        <h1 class="ul-banner-slide-title">Your Trust is Our Commitment</h1>
                                        <p class="ul-banner-slide-descr">We are revolutionizing the way people buy, sell, rent, and invest in real estate across Buea, Cameroon.</p>
                                        <div class="ul-banner-slide-btns">
                                            <a href="{{ route('buyer.index') }}" class="ul-btn-buy">Buy Now</a>
                                            <a href="{{ route('seller.index') }}" class="ul-btn-sell">Sell Now</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="ul-banner-slide">
                        <div class="ul-banner-container">
                            <div class="row align-items-center flex-sm-row flex-column-reverse">
                                <!-- banner text -->
                                <div class="col-md-9 col-sm-8">
                                    <span class="ul-banner-slide-shadow-title">BRILLIAN AND CO REAL ESTATE</span>
                                    <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                        <span class="ul-banner-slide-sub-title">Your Dream Property Awaits</span>
                                        <h1 class="ul-banner-slide-title">Exceptional Properties in Buea</h1>
                                        <p class="ul-banner-slide-descr">Discover our curated selection of premium properties. Let us help you find the perfect home or investment opportunity.</p>
                                        <div class="ul-banner-slide-btns">
                                            <a href="{{ route('buyer.index') }}" class="ul-btn-buy">Buy Now</a>
                                            <a href="{{ route('seller.index') }}" class="ul-btn-sell">Sell Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="ul-banner-slide">
                        <div class="ul-banner-container">
                            <div class="row align-items-center flex-sm-row flex-column-reverse">
                                <!-- banner text -->
                                <div class="col-md-9 col-sm-8">
                                    <span class="ul-banner-slide-shadow-title">BRILLIAN AND CO REAL ESTATE</span>
                                    <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                        <span class="ul-banner-slide-sub-title">Professional Real Estate Services</span>
                                        <h1 class="ul-banner-slide-title">Expert Guidance Every Step of the Way</h1>
                                        <p class="ul-banner-slide-descr">Our team of experienced professionals is dedicated to providing exceptional service tailored to your real estate needs.</p>
                                        <div class="ul-banner-slide-btns">
                                            <a href="{{ route('buyer.index') }}" class="ul-btn-buy">Buy Now</a>
                                            <a href="{{ route('seller.index') }}" class="ul-btn-sell">Sell Now</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom -->
    <div class="bottom">
        <div class="left wow animate__fadeInUp">
            <div class="ul-banner-address-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <span class="address-1">Buea, Cameroon</span>
                        <span class="address-2">TPPRR/RC/BUA/ 2022/A/0184</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <span class="address-1">Buea, Cameroon</span>
                        <span class="address-2">Your Premier Real Estate Partner</span>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <span class="address-1">Buea, Cameroon</span>
                        <span class="address-2">Expert Local Knowledge</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="right wow animate__fadeInUp">
            <div class="ul-banner-slider-pagination"></div>
            <div class="ul-banner-slider-nav ul-slider-nav">
                <button class="prev"><i class="flaticon-left"></i></button>
                <button class="next"><i class="flaticon-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->
