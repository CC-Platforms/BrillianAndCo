<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Brillain & Co Real Estate Agency</title>

        <!-- libraries CSS -->
        <link rel="stylesheet" href="{{ asset("assets/icon/flaticon_real_estate.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/vendor/bootstrap/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/vendor/splide/splide.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/vendor/swiper/swiper-bundle.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/vendor/slim-select/slimselect.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/vendor/animate-wow/animate.min.css") }}">
        <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css') }}">


        <link rel="icon" href="{{ asset('assets/img/brillian/company_logo_circle.png') }}" type="image/x-icon">
        <!-- custom CSS -->
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/form.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/floating-whatsapp.css") }}">

    </head>

    <body>
        <div class="preloader" id="preloader">
            <div class="loader"></div>
        </div>

        @include('layout.partials.sidebar', [
            'projects' => $projects,
        ])

        @include('layout.partials.search-modal')

        @include('layout.partials.header')


        @yield('content')


        @include('layout.partials.footer')
        
        @include('layout.partials.whatsapp-button')


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

        <script src="https://unpkg.com/alpinejs@3.13.10/dist/cdn.min.js" defer></script>
    </body>
</html>