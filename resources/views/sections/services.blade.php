<!-- SERVICES CONTENT WRAPPER START -->
<div class="ul-inner-page-content-wrapper">

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
                        <div class="ul-service-icon"><i class="{{ $service->icon }}"></i></div>
                        <a href="{{ route('services.show', $service->slug) }}" class="ul-service-title">{{ $service->title }}</a>
                        <p class="ul-service-descr">{{ $service->description }}</p>
                        <a href="{{ route('services.show', $service->slug) }}" class="ul-service-btn">Learn More <i class="flaticon-aro-left"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- SERVICE SECTION END -->
</div>
<!-- SERVICES CONTENT WRAPPER END -->