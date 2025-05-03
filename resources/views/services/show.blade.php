@extends('layout.main')

@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Service Details</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Service Details</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">

        <!-- SERVICE DETAILS SECTION START -->
        <div class="ul-inner-page-container">
            <div class="ul-service-details-container row justify-content-center gy-5">
                <!-- left sidebar -->
                <div class="col-lg-4 order-1 order-lg-0">
                    <div class="ul-service-details-sidebar">
                        <div class="ul-service-details-sidebar-widget overflow-hidden">
                            <h4 class="ul-service-details-sidebar-widget-title">Buy Home</h4>
                            <ul class="service-list">
                                <li><a href="service-details.html">Illustration Design <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="service-details.html">Business Branding <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="service-details.html">Packaging Design <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="service-details.html" class="current">Mobile Apps Design <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="service-details.html">Web UI/UX Design <i class="flaticon-read-more-icon"></i></a></li>
                                <li><a href="service-details.html">Application Design <i class="flaticon-read-more-icon"></i></a></li>
                            </ul>
                        </div>

                        <div class="ul-service-details-cta">
                            <div class="icon"><i class="flaticon-telephone"></i></div>
                            <span class="title">Need Help? Call Here</span>
                            <a href="tel:1234567890" class="number">+123 456 7890</a>
                        </div>
                    </div>
                </div>

                <!-- right content -->
                <div class="col-lg-8 order-0 order-lg-1">
                    <div class="ul-service-details-txt wow animate__fadeInUp">
                        <h4 class="ul-service-details-title">We help you to buy your dream home.</h4>
                        <p class="ul-service-details-descr">Suspendisse potenti. Nunc convallis nulla fringilla tellus dapibus lobor. Nam in bibendum mi, at molestie tellus. Quisque molestie vel elit nec ultrices. Pellentesque a ex id lectus sagittis bibendum. Mauris ante nunc, eleifend sed consectetur non, rutrum quis diam.</p>
                        <p class="ul-service-details-descr">Suspendisse potenti. Nunc convallis nulla fringilla tellus dapibulobortis. Nam in bibendum mi, at molestie tellus. Quisque molestie vel elit nec ultrices. Pellentesque a ex id lectus sagittis bibendum. Mauris ante nunc, eleifend sed consectetur non, rutrum quis diam. Suspendisse ultricies molestie tellus dapibus maximus. Quisque interdum accumsan velit ac pellentesque.</p>
                        <div class="ul-service-details-cover-img">
                            <img src="assets/img/service-details-1.jpg" alt="Image" class="img-1">
                            <img src="assets/img/service-details-2.jpg" alt="Image" class="img-2">
                        </div>
                        <h4 class="ul-service-details-title">Quick Processing.</h4>
                        <p class="ul-service-details-descr">Suspendisse potenti. Nunc convallis nulla fringilla tellus dapibus lobor. Nam in bibendum mi, at molestie tellus. Quisque molestie vel elit nec ultrices. Pellentesque a ex</p>
                    </div>

                    <!-- faq -->
                    <div class="ul-service-details-faq wow animate__fadeInUp">
                        <div class="ul-accordion">
                            <div class="ul-single-accordion-item open">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">Simple process for workflow?</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over words, combined with a handful of model structures, to generate Lorem Ipsum which looks reasonable.</p>
                                </div>
                            </div>
                            <div class="ul-single-accordion-item">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">Unique brand identity and strategy</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over words, combined with a handful of model structures, to generate Lorem Ipsum which looks reasonable.</p>
                                </div>
                            </div>
                            <div class="ul-single-accordion-item">
                                <div class="ul-single-accordion-item__header">
                                    <h3 class="ul-single-accordion-item__title">Tailor-made digital products</h3>
                                    <i class="fa-regular fa-arrow-down"></i>
                                </div>

                                <div class="ul-single-accordion-item__body">
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over words, combined with a handful of model structures, to generate Lorem Ipsum which looks reasonable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE DETAILS SECTION END -->

    </div>
</main>

@endsection