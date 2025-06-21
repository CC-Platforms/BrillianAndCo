<div class="col">
    <div class="ul-team-card h-100" style="display: flex; flex-direction: column;">
        <div class="ul-team-card-img" style="height: 320px; overflow: hidden;">
            <img src="{{ asset($image) }}" alt="{{ $name }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <div class="ul-team-card-txt" style="height: 160px; display: flex; flex-direction: column;">
            <h4 class="ul-team-card-title" style="font-weight: 400; margin-bottom: 8px;">
                <a href="{{ route('team.show', ['slug' => $slug]) }}">{{ $name }}</a>
            </h4>
            <span class="ul-team-card-position" style="font-weight: 600; color: var(--ul-gray2); margin-bottom: 12px;">{{ $position }}</span>
            <div class="ul-team-card-socials" style="margin-top: auto;">
                <div class="ul-team-card-socials-links" style="display: flex; gap: 12px; justify-content: center;">
                    @if($socialLinks && is_array($socialLinks))
                        @foreach($socialLinks as $network => $url)
                            @if($url)
                                <a href="{{ $url }}" class="" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-{{ $network }}"></i>
                                </a>
                            @endif
                        @endforeach
                    @endif
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