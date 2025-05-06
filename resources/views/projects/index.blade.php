@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Our Projects</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Our Projects</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper ul-projects-page-content-wrapper">
        <div class="ul-inner-page-container">
            <!-- project cards grid -->
            <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                @foreach($projects as $project)
                <!-- single project -->
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">{{ $project['tag'] }}</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span class="number">{{ $project['price'] }}</span>/{{ $project['period'] }}</span>
                                    <a href="{{ route('projects.show', $project['slug']) }}" class="ul-project-title">{{ $project['title'] }}</a>
                                    <p class="ul-project-location">{{ $project['location'] }}</p>
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
                                    <span class="text">{{ $project['beds'] }} Beds</span>
                                </div>
                                <!-- single info -->
                                <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-bath"></i></span>
                                    <span class="text">{{ $project['bathrooms'] }} Bathrooms</span>
                                </div>
                                <!-- single info -->
                                {{-- <div class="ul-project-info">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">{{ $project['area'] }}</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection