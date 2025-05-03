@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Our Projects</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Our Projects</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper ul-projects-page-content-wrapper">
        <div class="ul-inner-page-container">
            <!-- search filters -->
            <form action="#" class="ul-projects-search-filters">
                <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 justify-content-center wow animate__fadeInUp">
                    <div class="col">
                        <select name="keyword" id="keyword">
                            <option data-placeholder="true">Enter Keyword</option>
                            <option value="01">Keyword 01</option>
                            <option value="02">Keyword 02</option>
                            <option value="03">Keyword 03</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="property-type" id="property-type">
                            <option data-placeholder="true">Property Type</option>
                            <option value="apartment">Apartment</option>
                            <option value="office">Office</option>
                            <option value="villa">Villa</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="location" id="location">
                            <option data-placeholder="true">Select Location</option>
                            <option value="los-angeles">LA</option>
                            <option value="san-francisco">San Francisco</option>
                            <option value="new-york">New York</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="ul-projects-search-filters-btns">
                            <button type="button" class="ul-projects-search-filters-expand-btn"><i class="flaticon-filter"></i></button>
                            <button type="submit" class="ul-projects-search-filters-btn ul-btn">Search Properties</button>
                        </div>
                    </div>
                </div>

                <div class="ul-projects-search-filters-row-2 row row-cols-lg-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 justify-content-center wow animate__fadeInUp">
                    <div class="col">
                        <select name="max-price" id="max-price">
                            <option data-placeholder="true">Max Price</option>
                            <option value="$300">$300</option>
                            <option value="$500">$500</option>
                            <option value="$700">$700</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="beds" id="beds">
                            <option data-placeholder="true">Beds</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="floors" id="floors">
                            <option data-placeholder="true">Floors</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="garages" id="garages">
                            <option data-placeholder="true">Garages</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div>
                </div>
            </form>

            <!-- project cards grid -->
            <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-1.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-2.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">Beverly Springfield</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-3.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">Faulkner Ave</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-4.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">St. Crystal</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-5.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">Cove Red</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="assets/img/project-6.jpg" alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">Popular</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                    <a href="project-details.html" class="ul-project-title">Tarpon Bay</a>
                                    <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                </div>
                                <div class="right">
                                    <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                </div>
                            </div>

                            <!-- bottom -->
                            <div class="ul-project-infos">
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                                    <span class="text">3 Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">2 Bathrooms</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">6x7.5 m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
