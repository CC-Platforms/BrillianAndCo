<div class="col">
    <div class="ul-team-card">
        <div class="ul-team-card-img">
            <img src="{{ asset($image) }}" alt="{{ $name }}">
        </div>

        <div class="ul-team-card-txt">
            <h4 class="ul-team-card-title"><a href="{{ route('team.show', ['slug' => $slug]) }}">{{ $name }}</a></h4>
            <span class="ul-team-card-subtitle">Call <a href="tel:{{ $phone }}">{{ $phone }}</a></span>
            <div class="ul-team-card-socials">
                <div class="ul-team-card-socials-links">
                    @foreach($socialLinks as $network => $url)
                        @if($url)
                            <a href="{{ $url }}" class="" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-{{ $network }}"></i>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 

    <x-team-card 
        name="John Doe" 
        position="Real Estate Agent" 
        phone="+237652383694" 
        image="assets/img/team-3.jpg"
        :socialLinks="[
            'facebook' => 'https://facebook.com/profile',
            'twitter' => 'https://twitter.com/profile',
            'linkedin' => 'https://linkedin.com/in/profile',
            'instagram' => 'https://instagram.com/profile'
        ]"
    />

--}}