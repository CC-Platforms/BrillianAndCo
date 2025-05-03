{{-- 
    PropertyCard Component
    
    This component displays a property card in a Cameroonian real estate context.
    
    Usage:
    <x-property-card
        title="Cozy Villa in Bonanjo"
        price="350,000"
        currency="FCFA"
        period="Month"
        location="Bonaberi, Douala, Littoral"
        image="properties/villa-douala.jpg"
        slug="cozy-villa-bonanjo"
        beds="3"
        bathrooms="2"
        area="75 m²"
        tag="Popular"
    />
--}}

<div class="col">
    <div class="ul-project">
        <div class="ul-project-img">
            <img src="{{ asset($image) }}" alt="{{ $title }}">
        </div>
        <div class="ul-project-txt">
            @if($tag)
                <span class="ul-project-tag">{{ $tag }}</span>
            @endif
            <div class="top">
                <div class="left">
                    <span class="ul-project-price">
                        <span class="number"> {{ $price }} {{ $currency }}</span>/{{ $period }}
                    </span>
                    <a href="{{ route('projects.show', $slug) }}" class="ul-project-title">{{ $title }}</a>
                    <p class="ul-project-location">{{ $location }}</p>
                </div>
                <div class="right">
                    <button class="ul-project-add-to-favorites-btn">
                        <i class="flaticon-heart"></i>
                    </button>
                </div>
            </div>

            <!-- bottom -->
            <div class="ul-project-infos ul-featured-property-infos">
                @if($beds > 0)
                <!-- single info -->
                <div class="ul-project-info ul-featured-property-info">
                    <span class="icon"><i class="flaticon-bed-color"></i></span>
                    <span class="text">{{ $beds }} {{ __('Bed') }}{{ $beds > 1 ? 's' : '' }}</span>
                </div>
                @endif
                
                @if($bathrooms > 0)
                <!-- single info -->
                <div class="ul-project-info ul-featured-property-info">
                    <span class="icon"><i class="flaticon-bath"></i></span>
                    <span class="text">{{ $bathrooms }} {{ __('Bathroom') }}{{ $bathrooms > 1 ? 's' : '' }}</span>
                </div>
                @endif
                
                @if($area)
                <!-- single info -->
                <div class="ul-project-info ul-featured-property-info">
                    <span class="icon"><i class="flaticon-scale"></i></span>
                    <span class="text">{{ $area }}</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>