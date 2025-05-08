@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">About us</h2>
            <div class="ul-breadcrumb-nav">
                <a href="index.html">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">About Us</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        
        @include('sections.why-choose-us')

        {{-- @include('sections.partners') --}}

        @include('sections.about')

        @include('sections.stats')

        @include('sections.testimonials')
      
    </div>
</main>

@endsection