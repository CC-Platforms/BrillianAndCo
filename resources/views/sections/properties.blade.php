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