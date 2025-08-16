<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Brillian & Co Real Estate Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-container {
            width: 100%;
            max-width: 450px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(48, 88, 175, 0.15);
            border: 1px solid #e1e5e9;
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #3058af, #4a6bc7);
            padding: 40px 30px 30px;
            text-align: center;
            color: white;
            position: relative;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: #3058af;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .company-name {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .company-tagline {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 300;
        }

        .form-container {
            padding: 40px 30px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #fafbfc;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3058af;
            background: white;
            box-shadow: 0 0 0 3px rgba(48, 88, 175, 0.1);
        }

        .form-group input::placeholder {
            color: #a0a6b0;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #3058af, #4a6bc7);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(48, 88, 175, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(48, 88, 175, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: #a0a6b0;
            font-size: 14px;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e1e5e9;
            z-index: 1;
        }

        .divider span {
            background: white;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .google-btn {
            width: 100%;
            padding: 15px;
            background: white;
            color: #333;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .google-btn:hover {
            border-color: #3058af;
            background: #f8f9fa;
        }

        .google-icon {
            width: 20px;
            height: 20px;
            background: linear-gradient(45deg, #EA4335 25%, #4285F4 25%, #4285F4 50%, #34A853 50%, #34A853 75%, #FBBC05 75%);
            border-radius: 2px;
        }

        .login-link {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #e1e5e9;
        }

        .login-link p {
            color: #666;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .login-btn {
            display: inline-block;
            padding: 12px 30px;
            background: transparent;
            color: #3058af;
            border: 2px solid #3058af;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: #3058af;
            color: white;
            transform: translateY(-1px);
        }

        @media (max-width: 480px) {
            .auth-container {
                margin: 10px;
            }
            
            .header {
                padding: 30px 20px 20px;
            }
            
            .form-container {
                padding: 30px 20px;
            }
            
            .company-name {
                font-size: 18px;
            }
        }
    </style>
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
            {{-- <h2 class="page-title">Create Your Account</h2> --}}
            
            <form method="POST" action="{{ route('sign-up') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="submit-btn">Create Account</button>
            </form>

            {{-- <div class="divider">
                <span>or continue with</span>
            </div> --}}

            {{-- <a href="{{ route('auth.google') }}" class="google-btn">
                <div class="google-icon"></div>
                Register with Google
            </a> --}}

            <div class="login-link">
                <p>Already have an account?</p>
                <a href="{{ route('login') }}" class="login-btn">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>