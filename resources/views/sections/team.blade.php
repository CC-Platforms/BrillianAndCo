    <!-- TEAM SECTION START -->
    <section class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container wow animate__fadeInUp">
            <div class="row ul-bs-row row-cols-lg-4 row-cols-md-3 row-cols-2 row-cols-xxs-1">
                @php
                    $teamMembers = [
                        [
                            'name' => 'John Doe',
                            'position' => 'Real Estate Agent',
                            'phone' => '+237652383694',
                            'image' => 'assets/img/team-1.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                        [
                            'name' => 'Jane Smith',
                            'position' => 'Property Manager',
                            'phone' => '+237652383695',
                            'image' => 'assets/img/team-2.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                        [
                            'name' => 'Mike Johnson',
                            'position' => 'Sales Consultant',
                            'phone' => '+237652383696',
                            'image' => 'assets/img/team-3.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                        [
                            'name' => 'Sarah Williams',
                            'position' => 'Marketing Director',
                            'phone' => '+237652383697',
                            'image' => 'assets/img/team-1.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                        [
                            'name' => 'David Brown',
                            'position' => 'Construction Manager',
                            'phone' => '+237652383698',
                            'image' => 'assets/img/team-2.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                        [
                            'name' => 'Emily Davis',
                            'position' => 'Client Relations',
                            'phone' => '+237652383699',
                            'image' => 'assets/img/team-3.jpg',
                            'social' => [
                                'facebook' => '#',
                                'twitter' => '#',
                                'linkedin' => '#',
                                'instagram' => '#'
                            ]
                        ],
                    ];
                @endphp

                @foreach($teamMembers as $member)
                    <x-team-card 
                        name="{{ $member['name'] }}"
                        position="{{ $member['position'] }}"
                        phone="{{ $member['phone'] }}"
                        image="{{ $member['image'] }}"
                        :socialLinks="$member['social']"
                    />
                @endforeach
            </div>
        </div>
    </section>
    <!-- TEAM SECTION END -->