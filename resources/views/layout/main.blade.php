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

        <link rel="icon" href="{{ asset('assets/img/brillian/company_logo_circle.png') }}" type="image/x-icon">
        <!-- custom CSS -->
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    </head>

    <body>
        <div class="preloader" id="preloader">
            <div class="loader"></div>
        </div>

        @include('layout.partials.sidebar')

        @include('layout.partials.search-modal')

        @include('layout.partials.header')


        @yield('content')


        @include('layout.partials.footer')
    </body>
</html>