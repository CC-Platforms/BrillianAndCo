<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Brillian & Co Real Estate Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>
<body>
    <div class="auth-container">
        <div class="header">
            <div class="logo-container">
                <a href="{{ route('home.index') }}" class="d-inline-block"><img src="{{ asset('assets/img/circle_logo_update.png') }}" alt="logo" class="logo"></a>
            </div>
            <div class="company-name">Brillian & Co. Group Ltd</div>
        </div>

        <div class="form-container">
            {{-- <h2 class="page-title">Welcome Back!</h2> --}}
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="submit-btn">Sign In</button>
            </form>

            {{-- <div class="divider">
                <span>or continue with</span>
            </div>

            <a href="{{ route('auth.google') }}" class="google-btn">
                <div class="google-icon"></div>
                Sign in with Google
            </a> --}}

            <div class="register-link">
                <p>Don't have an account?</p>
                <a href="{{ route('register') }}" class="register-btn">Create Account</a>
            </div>
        </div>
    </div>
</body>
</html>