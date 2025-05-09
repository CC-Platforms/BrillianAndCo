<!-- Section Header Start -->
<div class="ul-section-header text-center">
    <h2 class="ul-section-title">{{ $title ?? 'Section Title' }}</h2>
    <div class="ul-section-divider"></div>
    @if(isset($subtitle) && $subtitle)
        <p class="ul-section-subtitle">{{ $subtitle }}</p>
    @endif
</div>
<!-- Section Header End -->