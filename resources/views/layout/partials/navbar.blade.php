<!-- header nav -->
<div class="ul-header-nav-wrapper">
    <div class="to-go-to-sidebar-in-mobile">
        <nav class="ul-header-nav">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('about.index') }}">About</a>
            <a href="{{ route('projects.index') }}">Properties</a>
            <a href="{{ route('services.index') }}">Services</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('team.index') }}">Team</a>
            <a href="{{ route('contact.index') }}">Contact</a>

            @guest
                <a href="{{ route('login') }}" class="nav-login-btn">Login</a>
                <a href="{{ route('register') }}" class="nav-register-btn">Register</a>
            @else
                <div class="user-dropdown">
                    <div class="user-avatar-wrapper" onclick="toggleDropdown()">
                        @if(Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" alt="User Avatar" class="user-avatar-img">
                        @else
                            <div class="user-avatar-initials">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}{{ strtoupper(substr(str_replace(' ', '', substr(Auth::user()->name, strpos(Auth::user()->name, ' ') + 1)), 0, 1)) }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="dropdown-menu" id="userDropdown">
                        {{-- <div class="dropdown-header">
                            <span class="user-name">{{ Auth::user()->name }}</span>
                            <span class="user-email">{{ Auth::user()->email }}</span>
                        </div>
                        <div class="dropdown-divider"></div> --}}
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-form">
                            @csrf
                            <button type="submit" class="dropdown-item logout-btn">
                                <i class="icon-logout"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endguest
        </nav>
    </div>
</div>

<style>
/* User Dropdown Styles */
.user-dropdown {
    position: relative;
    display: inline-block;
}

.user-avatar-wrapper {
    cursor: pointer;
    transition: transform 0.2s ease;
}

.user-avatar-wrapper:hover {
    transform: scale(1.05);
}

.user-avatar-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #3058af;
    object-fit: cover;
}

.user-avatar-initials {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3058af, #4a6bc7);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    border: 2px solid #3058af;
}

.dropdown-menu {
    position: absolute;
    top: calc(100% + 10px);
    right: 0;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(48, 88, 175, 0.15);
    border: 1px solid #e1e5e9;
    min-width: 220px;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu::before {
    content: '';
    position: absolute;
    top: -8px;
    right: 15px;
    width: 16px;
    height: 16px;
    background: white;
    border-left: 1px solid #e1e5e9;
    border-top: 1px solid #e1e5e9;
    transform: rotate(45deg);
}

.dropdown-header {
    padding: 15px 20px;
    border-bottom: 1px solid #f0f2f5;
}

.user-name {
    display: block;
    font-weight: 600;
    color: #2c3e50;
    font-size: 14px;
    margin-bottom: 4px;
}

.user-email {
    display: block;
    color: #666;
    font-size: 12px;
}

.dropdown-divider {
    height: 1px;
    background: #f0f2f5;
    margin: 8px 0;
}

.dropdown-item {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #555;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.2s ease;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    gap: 10px;
}

.dropdown-item:hover {
    background: #f8f9fa;
    color: #3058af;
}

.logout-btn {
    color: #dc3545;
}

.logout-btn:hover {
    background: #fff5f5;
    color: #c82333;
}

.dropdown-form {
    margin: 0;
    padding: 0;
}

.icon-logout::before { content: ''; }

/* Mobile responsiveness */
@media (max-width: 768px) {
    .dropdown-menu {
        right: -10px;
        min-width: 200px;
    }
    
    .user-avatar-img,
    .user-avatar-initials {
        width: 35px;
        height: 35px;
    }
    
    .user-avatar-initials {
        font-size: 12px;
    }
}
</style>

<script>
// Toggle dropdown menu
function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('show');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const userDropdown = document.querySelector('.user-dropdown');
    const dropdown = document.getElementById('userDropdown');
    
    if (!userDropdown.contains(event.target)) {
        dropdown.classList.remove('show');
    }
});

// Close dropdown when pressing escape
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const dropdown = document.getElementById('userDropdown');
        dropdown.classList.remove('show');
    }
});
</script>