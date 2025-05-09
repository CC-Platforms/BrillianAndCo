@extends('layout.main')

@section('content')
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">{{ $teamMember['name'] }}</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <a href="{{ url('/team') }}">Team</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">{{ $teamMember['name'] }}</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <!-- TEAM MEMBER DETAILS SECTION START -->
    <div class="ul-inner-page-content-wrapper">
        <div class="ul-container">
            <div class="ul-team-details">
                <div class="ul-team-details-img wow animate__fadeInUp">
                    <img src="{{ asset($teamMember['image']) }}" alt="{{ $teamMember['name'] }}">
                </div>

                <!-- txt -->
                <div class="txt wow animate__fadeInUp">
                    <h3 class="ul-team-details-name">{{ $teamMember['name'] }}</h3>
                    <h6 class="ul-team-details-role">{{ $teamMember['position'] }}</h6>
                    <p class="ul-team-details-descr">{{ $teamMember['description'] }}</p>
                    <ul class="ul-team-details-infos">
                        <li class="ul-team-details-info"> <span class="key">Phone Number:</span> <a
                                href="tel:{{ $teamMember['phone'] }}">{{ $teamMember['phone'] }}</a></li>
                        <li class="ul-team-details-info"><span class="key">Email:</span> <a
                                href="mailto:bricore161@gmail.com">bricore161@gmail.com</a></li>
                        <li class="ul-team-details-info"><span class="key">Experience:</span> {{ $teamMember['experience']
                            }}</li>
                        <li class="ul-team-details-info"><span class="key">Availability:</span> {{
                            $teamMember['availability'] }}</li>
                    </ul>

                    <!-- social links -->
                    <div class="ul-team-details-socials">
                        <a href="{{ $teamMember['social']['facebook'] }}"><i class="flaticon-facebook"></i></a>
                        <a href="{{ $teamMember['social']['instagram'] }}"><i class="flaticon-instagram"></i></a>
                        <a href="{{ $teamMember['social']['tiktok'] }}"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="ul-team-more-details ul-section-spacing">
            <div class="ul-container wow animate__fadeInUp">
                <h3 class="ul-team-more-details-title">Personal Information</h3>
                <p class="ul-team-details-descr">{{ $teamMember['description'] }}</p>

                <div class="ul-team-details-skills-details">
                    <h3 class="ul-team-details-skills-details-title">Personal Skills</h3>

                    <div class="skills-wrapper">
                        @foreach($teamMember['skills'] as $skill)
                        <div class="ul-team-details-skill">
                            <h6 class="skill-title">{{ $skill['title'] }}</h6>
                            <div class="skill-progress-container ul-progress-container">
                                <div class="skill-progressbar ul-progressbar"
                                    data-ul-progress-value={{ $skill['value'] }}>
                                    <div class="skill-progress-label ul-progress-label"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <p class="ul-team-details-descr">These are some of the key strengths {{ $teamMember['name'] }} brings to
                        the team.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM MEMBER DETAILS SECTION END -->
@endsection