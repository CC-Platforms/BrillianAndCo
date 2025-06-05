<!-- SERVICES CONTENT WRAPPER START -->
<div class="ul-inner-page-content-wrapper">
    <!-- SPECIALITY SECTION START -->
    
    {{-- @include('sections.section-header', [
    'title' => 'Our Services',
    'subtitle' => 'Discover our comprehensive range of real estate services'
    ]) --}}

    {{-- <section class="ul-specialities overflow-hidden">
        <div class="ul-specialities-heading-card wow animate__fadeInUp">
            <div class="txt">
                <h3 class="ul-specialities-title">The new way to find your new home</h3>
                <p class="ul-specialities-descr">Find your dream place to live in with more than 10k+ properties listed.</p>
                <a href="{{ route('projects.index') }}" class="ul-btn">Browse Properties</a>
            </div>

            <div class="img"><img src="assets/img/speciality-img.png" alt="Image"></div>
        </div>

        <div class="ul-specialities-wrapper">
            @foreach($specialities as $speciality)
            <!-- single speciality -->
            <div class="ul-speciality wow animate__fadeInUp">
                <div class="ul-speciality-icon">
                    <img src="{{ $speciality['icon'] }}" alt="icon">
                    <div class="sm-icon"><img src="{{ $speciality['sm_icon'] }}" alt="icon"></div>
                </div>
                <h4 class="ul-speciality-title">{{ $speciality['title'] }}</h4>
                <p class="ul-speciality-descr">{{ $speciality['description'] }}</p>
            </div>
            @endforeach
        </div>
    </section> --}}
    <!-- SPECIALITY SECTION END -->

    <!-- STATS SECTION START -->
    @if(!isset($showStats) || $showStats)
        @include('sections.stats')
    @endif
    <!-- STATS SECTION END -->

    <!-- SERVICE SECTION START -->
    <div class="ul-services ul-section-spacing">
        <div class="ul-inner-page-container">
            <h2 class="ul-section-title">Core Services</h2>

            <!-- services grid -->
            <div class="row ul-bs-row row-cols-md-3 row-cols-2 row-cols-xxs-1">
                @foreach($coreServices as $service)
                <!-- single service -->
                <div class="col">
                    <div class="ul-service">
                        <div class="ul-service-icon"><i class="{{ $service['icon'] }}"></i></div>
                        <a href="{{ route('services.show', $service['slug']) }}" class="ul-service-title">{{ $service['title'] }}</a>
                        <p class="ul-service-descr">{{ $service['description'] }}</p>
                        <a href="{{ route('services.show', $service['slug']) }}" class="ul-service-btn">{{ $service['button_text'] }} <i class="flaticon-aro-left"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- SERVICE SECTION END -->
</div>
<!-- SERVICES CONTENT WRAPPER END -->