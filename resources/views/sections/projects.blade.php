<!-- PROJECTS SECTION START -->
<div class="ul-inner-page-content-wrapper ul-projects-page-content-wrapper">
   
   @include('sections.section-header', [
    'title' => 'Our Projects',
    'subtitle' => 'Find your perfect home among our exclusive property selections'
    ])

    <div class="ul-inner-page-container">
        <!-- project cards grid -->
        <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
            @foreach($projects as $project)
            <!-- single project -->
            <div class="col wow animate__fadeInUp">
                <div class="ul-project">
                    <div class="ul-project-img">
                        <img src="{{ str_starts_with($project->featured_image, 'assets/') ? asset($project->featured_image) : asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}">
                    </div>
                    <div class="ul-project-txt">
                        <span class="ul-project-tag">{{ $project->tag }}</span>
                        <div class="top">
                            <div class="left">
                                <span class="ul-project-price"><span class="number">{{ $project->price }}</span>/{{ $project->period }}</span>
                                <a href="{{ route('projects.show', $project->slug) }}" class="ul-project-title">{{ $project->title }}</a>
                                <p class="ul-project-location">{{ $project->location }}</p>
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
                                <span class="text">{{ $project->beds }} Beds</span>
                            </div>
                            <!-- single info -->
                            <div class="ul-project-info">
                                <span class="icon"><i class="flaticon-bath"></i></span>
                                <span class="text">{{ $project->bathrooms }} Bathrooms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Projects Button -->
        @if($projects->count() > 6)
        <div class="text-center mt-4 wow animate__fadeInUp">
            <a href="{{ route('projects.index') }}" class="ul-btn ul-btn-buy">
                View All Projects
                <i class="flaticon-aro-right"></i>
            </a>
        </div>
        @endif

        <!-- lands section -->
        <!-- LAND Projects SECTION START -->
        <section class="ul-2-properties ul-section-spacing pb-0">
            <div class="ul-container">
                <!-- section heading -->
                <div class="ul-section-heading ul-2-section-heading align-items-end wow animate__fadeInUp">
                    <div class="left">
                        <span class="ul-2-section-sub-title">LAND INVESTMENT</span>
                        <h2 class="ul-2-section-title">Strategic Land Investment Opportunities</h2>
                    </div>
                </div>

                <!-- Fast Selling Lands (Land Banking) -->
                @if(isset($landsByCategory['Fast Selling Lands']))
                <div class="ul-land-category-heading wow animate__fadeInUp">
                    <h3>Fast Selling Lands (Land Banking)</h3>
                </div>
                <div class="ul-2-properties-wrapper">
                    @foreach($landsByCategory['Fast Selling Lands'] as $land)
                    <!-- single property with updated structure -->
                    <div class="ul-2-property-card wow animate__fadeInUp">
                        <div class="ul-2-property-img">
                            <img src="{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}" alt="{{ $land->title }}" data-bs-toggle="modal" data-bs-target="#imageModal" 
                             onclick="setModalImage('{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}', '{{ $land->title }}')">
                            <div class="image-overlay">
                                <div class="preview-icon">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ul-2-property-content">
                            <div class="ul-2-property-header">
                                <div class="ul-2-property-main-info">
                                    <h3 class="ul-2-property-title"><a href="#">{{ $land->title }}</a></h3>
                                    <p class="ul-2-property-location">{{ $land->location }}</p>
                                </div>
                                <div class="ul-2-property-price-section">
                                    <span class="price-label">Price</span>
                                    <span class="price-value">{{ $land->price }}</span>
                                </div>
                            </div>
                            <div class="ul-2-property-details">
                                <div class="ul-property-detail-item">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">{{ $land->area }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Developed Lands -->
                @if(isset($landsByCategory['Developed Lands']))
                <div class="ul-land-category-heading wow animate__fadeInUp">
                    <h3>Developed Lands</h3>
                </div>
                <div class="ul-2-properties-wrapper">
                    @foreach($landsByCategory['Developed Lands'] as $land)
                    <!-- single property with updated structure -->
                    <div class="ul-2-property-card wow animate__fadeInUp">
                        <div class="ul-2-property-img">
                            <img src="{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}" alt="{{ $land->title }}" data-bs-toggle="modal" data-bs-target="#imageModal" 
                             onclick="setModalImage('{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}', '{{ $land->title }}')">
                        </div>
                        <div class="ul-2-property-content">
                            <div class="ul-2-property-main-info">
                                <h3 class="ul-2-property-title"><a href="#">{{ $land->title }}</a></h3>
                                <p class="ul-2-property-location">{{ $land->location }}</p>
                                <div class="ul-2-property-details">
                                    <div class="ul-property-detail-item">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">{{ $land->area }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ul-2-property-price-section">
                                <span class="price-label">Price</span>
                                <span class="price-value">{{ $land->price }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Fast Developing Lands -->
                @if(isset($landsByCategory['Fast Developing Lands']))
                <div class="ul-land-category-heading wow animate__fadeInUp">
                    <h3>Fast Developing Lands</h3>
                </div>
                <div class="ul-2-properties-wrapper">
                    @foreach($landsByCategory['Fast Developing Lands'] as $land)
                    <!-- single property with updated structure -->
                    <div class="ul-2-property-card wow animate__fadeInUp">
                        <div class="ul-2-property-img">
                            <img src="{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}" alt="{{ $land->title }}" data-bs-toggle="modal" data-bs-target="#imageModal" 
                             onclick="setModalImage('{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}', '{{ $land->title }}')">
                        </div>
                        <div class="ul-2-property-content">
                            <div class="ul-2-property-main-info">
                                <h3 class="ul-2-property-title"><a href="#">{{ $land->title }}</a></h3>
                                <p class="ul-2-property-location">{{ $land->location }}</p>
                                <div class="ul-2-property-details">
                                    <div class="ul-property-detail-item">
                                        <span class="icon"><i class="flaticon-scale"></i></span>
                                        <span class="text">{{ $land->area }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ul-2-property-price-section">
                                <span class="price-label">Price</span>
                                <span class="price-value">{{ $land->price }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif


                <!-- Architecture -->
                @if(isset($landsByCategory['Architecture']))
                <div class="ul-land-category-heading wow animate__fadeInUp">
                    <h3>Architecture</h3>
                </div>
                <div class="ul-2-properties-wrapper">
                    @foreach($landsByCategory['Architecture'] as $land)
                    <!-- single property with updated structure -->
                    <div class="ul-2-property-card wow animate__fadeInUp">
                        <div class="ul-2-property-img">
                            <img src="{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}" alt="{{ $land->title }}" data-bs-toggle="modal" data-bs-target="#imageModal" 
                             onclick="setModalImage('{{ str_starts_with($land->featured_image, 'assets/') ? asset($land->featured_image) : asset('storage/' . $land->featured_image) }}', '{{ $land->title }}')">
                            <div class="image-overlay">
                                <div class="preview-icon">
                                    <i class="fas fa-expand"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ul-2-property-content">
                            <div class="ul-2-property-header">
                                <div class="ul-2-property-main-info">
                                    <h3 class="ul-2-property-title"><a href="#">{{ $land->title }}</a></h3>
                                    <p class="ul-2-property-location">{{ $land->location }}</p>
                                </div>
                                <div class="ul-2-property-price-section">
                                    <span class="price-label">Price</span>
                                    <span class="price-value">{{ $land->price }}</span>
                                </div>
                            </div>
                            <div class="ul-2-property-details">
                                <div class="ul-property-detail-item">
                                    <span class="icon"><i class="flaticon-scale"></i></span>
                                    <span class="text">{{ $land->area }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif


            </div>
        </section>
        <!-- LAND PROPERTIES SECTION END -->
    </div>
</div>

<!-- Bootstrap Modal for Image Preview -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="imageModalLabel">Property Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

<script>
    // Simple function to set modal image and title
    function setModalImage(imageSrc, title) {
        document.getElementById('modalImage').src = imageSrc;
        document.getElementById('imageModalLabel').textContent = title;
    }
</script>

<!-- PROJECTS SECTION END -->