    <!-- TEAM SECTION START -->
    <section class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container wow animate__fadeInUp">
            <div class="row ul-bs-row row-cols-lg-4 row-cols-md-3 row-cols-2 row-cols-xxs-1">
                @foreach($teamMembers as $member)
                    <x-team-card 
                        name="{{ $member->name }}"
                        position="{{ $member->position }}"
                        image="{{ $member->image }}"
                        slug="{{ $member->slug }}"
                        :socialLinks="json_decode($member->social_links_json, true) ?? []"
                    />
                @endforeach
            </div>
        </div>
    </section>
    <!-- TEAM SECTION END -->