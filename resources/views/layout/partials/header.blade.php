<!-- HEADER SECTION START -->
<header class="ul-header ul-header--home">
    <div class="ul-header-bottom">
        <div class="ul-header-bottom-wrapper">
            <!-- header left -->
            <div class="header-bottom-left">
                <div class="logo-container">
                    <a href="{{ route('home.index') }}" class="d-inline-block"><img src="{{ asset('assets/img/brillian/company_logo_circle.png') }}" alt="logo" class="logo"></a>
                </div>
            </div>

            @include('layout.partials.navbar')

            <!-- actions -->
            <div class="ul-header-actions">
                <button class="ul-header-sidebar-opener"><i class="flaticon-menu-button"></i></button>
            </div>

            <!-- sidebar opener -->
            <div class="d-none">
                <button class="ul-header-sidebar-opener"><i class="flaticon-menu-button"></i></button>
            </div>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->