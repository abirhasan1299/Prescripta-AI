<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MediCore | Doctor Registration</title>
    <!-- Bootstrap 5 CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #0b2b5e 0%, #0a1f3f 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            position: relative;
            overflow-x: hidden;
        }

        /* Medical cross pattern */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.08"><path d="M20 10 L30 10 L30 20 L40 20 L40 30 L30 30 L30 40 L20 40 L20 30 L10 30 L10 20 L20 20 Z" fill="%23ffffff" /></svg>');
            background-size: 120px 120px;
            pointer-events: none;
        }

        /* Glass card */
        .register-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 2.5rem;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.45), inset 0 1px 1px rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 2.8rem 2.5rem;
            max-width: 520px;
            width: 100%;
            color: #fff;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .register-card:hover {
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.55), inset 0 1px 1px rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.09);
        }

        .brand-icon {
            background: linear-gradient(135deg, #2dd4bf 0%, #0d9488 100%);
            width: 75px;
            height: 75px;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 18px 30px -10px rgba(13, 148, 136, 0.5);
            transform: rotate(2deg);
            transition: transform 0.2s ease;
        }

        .brand-icon i {
            font-size: 2.8rem;
            color: white;
            filter: drop-shadow(0 6px 8px rgba(0,0,0,0.3));
        }

        .brand-icon:hover {
            transform: rotate(0deg) scale(1.03);
        }

        .welcome-text h2 {
            font-weight: 700;
            font-size: 2.2rem;
            letter-spacing: -0.5px;
            background: linear-gradient(to right, #ffffff, #d1e9ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
        }

        .welcome-text p {
            color: rgba(255, 255, 255, 0.7);
            font-weight: 400;
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-label i {
            font-size: 1.1rem;
            color: #2dd4bf;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(4px);
            border-right: none;
            border-radius: 0.9rem 0 0 0.9rem;
            padding: 0.7rem 1rem;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-left: none;
            border-radius: 0 0.9rem 0.9rem 0;
            padding: 0.7rem 1rem;
            font-size: 1rem;
            color: #ffffff;
            font-weight: 500;
            backdrop-filter: blur(4px);
            transition: all 0.25s ease;
        }

        /* For phone input which has addon on both sides */
        .input-group .form-control.phone-input {
            border-radius: 0;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #2dd4bf;
            box-shadow: 0 0 0 4px rgba(45, 212, 191, 0.25);
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.45);
            font-weight: 400;
        }

        .input-group:focus-within .input-group-text {
            border-color: #2dd4bf;
            background: rgba(45, 212, 191, 0.15);
            color: white;
        }

        .btn-register {
            background: linear-gradient(115deg, #14b8a6, #0d9488);
            border: none;
            border-radius: 0.9rem;
            padding: 0.8rem;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            color: white;
            text-transform: uppercase;
            transition: all 0.3s ease;
            box-shadow: 0 15px 25px -8px rgba(13, 148, 136, 0.5);
            margin-top: 0.75rem;
            position: relative;
            overflow: hidden;
        }

        .btn-register:hover {
            background: linear-gradient(115deg, #0d9488, #0f766e);
            box-shadow: 0 20px 30px -8px rgba(13, 148, 136, 0.7);
            transform: translateY(-2px);
            color: white;
        }

        .btn-register:active {
            transform: translateY(2px);
            box-shadow: 0 8px 15px -5px rgba(13, 148, 136, 0.6);
        }

        .extra-links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1.8rem;
            font-size: 0.95rem;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .extra-links a {
            color: #2dd4bf;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
            margin-left: 0.2rem;
        }

        .extra-links a:hover {
            color: #ffffff;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .form-check-input {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            width: 1.1em;
            height: 1.1em;
            margin-top: 0.2em;
        }

        .form-check-input:checked {
            background-color: #14b8a6;
            border-color: #14b8a6;
        }

        .form-check-label {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .footer-note {
            text-align: center;
            margin-top: 2rem;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.8rem;
            letter-spacing: 0.2px;
        }

        .invalid-feedback {
            color: #ffb3b3;
            font-weight: 500;
            margin-left: 0.3rem;
        }

        @media (max-width: 500px) {
            .register-card {
                padding: 2rem 1.5rem;
                border-radius: 2rem;
            }
        }
    </style>
</head>
<body>
<div class="register-card animate__animated animate__fadeIn">
    <!-- Brand Icon -->
    <div class="brand-icon">
        <i class="bi bi-heart-pulse-fill"></i>
    </div>

    <!-- Header -->
    <div class="welcome-text text-center">
        <h2>Join MediCore</h2>
        <p>Create your professional doctor account</p>
    </div>

    <!-- Registration Form -->
    <form id="doctorRegisterForm" action="{{route('register.verify')}}" method="post">
        @csrf
        <!-- Username Field -->
        <div class="mb-3">
            <label for="username" class="form-label">
                <i class="bi bi-person-badge-fill"></i> Username
            </label>
            <div class="input-group">
                <span class="input-group-text" id="usernameAddon"><i class="bi bi-person-fill"></i></span>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="username"
                    placeholder="dr.johnsmith"
                    aria-label="Username"
                    aria-describedby="usernameAddon"
                    required
                    minlength="3"
                    autocomplete="username"
                >
            </div>
            <div class="invalid-feedback">
                Please choose a username (at least 3 characters).
            </div>
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label">
                <i class="bi bi-envelope-fill"></i> Professional Email
            </label>
            <div class="input-group">
                <span class="input-group-text" id="emailAddon"><i class="bi bi-at"></i></span>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="dr.smith@hospital.com"
                    aria-label="Email"
                    aria-describedby="emailAddon"
                    required
                    autocomplete="email"
                >
            </div>
            <div class="invalid-feedback">
                Please enter a valid medical email address.
            </div>
        </div>

        <!-- Phone Field -->
        <div class="mb-3">
            <label for="phone" class="form-label">
                <i class="bi bi-telephone-fill"></i> Phone Number
            </label>
            <div class="input-group">
                <span class="input-group-text" id="phoneAddon"><i class="bi bi-flag-fill"></i></span>
                <input
                    type="tel"
                    class="form-control phone-input"
                    id="phone"
                    name="phone"
                    placeholder="(555) 123-4567"
                    aria-label="Phone"
                    aria-describedby="phoneAddon"
                    required
                    pattern="^[\+]?[(]?[0-9]{1,4}[)]?[-\s\./0-9]*$"
                    autocomplete="tel"
                >
            </div>
            <div class="invalid-feedback">
                Please enter a valid phone number (e.g., +1 555 123 4567).
            </div>
            <div class="form-text text-white-50" style="font-size:0.75rem; margin-top:4px;">
                <i class="bi bi-info-circle-fill me-1"></i>We'll send verification code to this number.
            </div>
        </div>

        <!-- Password Field -->
        <div class="mb-3">
            <label for="password" class="form-label">
                <i class="bi bi-shield-lock-fill"></i> Password
            </label>
            <div class="input-group">
                <span class="input-group-text" id="passwordAddon"><i class="bi bi-key-fill"></i></span>
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="••••••••"
                    aria-label="Password"
                    aria-describedby="passwordAddon"
                    required
                    minlength="8"
                    autocomplete="new-password"
                >
                <button class="btn btn-outline-light border-start-0 rounded-end" type="button" id="togglePassword" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.2);">
                    <i class="bi bi-eye-slash-fill" id="toggleIcon"></i>
                </button>
            </div>
            <div class="invalid-feedback">
                Password must be at least 8 characters.
            </div>
        </div>

        <!-- Terms & Conditions -->
        <div class="form-check mb-3 mt-3">
            <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
            <label class="form-check-label" for="termsCheck">
                I agree to the <a href="#" style="color:#2dd4bf; text-decoration:underline;">Terms of Service</a> and <a href="#" style="color:#2dd4bf; text-decoration:underline;">Privacy Policy</a>
            </label>
            <div class="invalid-feedback" style="display:block; margin-top:0.25rem;" id="termsFeedback">
                You must agree before registering.
            </div>
        </div>

        <!-- Submit Button -->
        <button class="btn btn-register w-100 mt-2" type="submit" id="registerButton">
            <i class="bi bi-person-plus-fill me-2"></i>Create Account
        </button>

        <!-- Login Link -->
        <div class="extra-links">
            <span>Already have an account?</span>
            <a href="{{route('login')}}"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
        </div>
    </form>

    <div class="footer-note">
        <i class="bi bi-dot"></i> Secure Registration · {{config('app.name')}} <i class="bi bi-dot"></i>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function() {
        'use strict';

        const form = document.getElementById('doctorRegisterForm');
        const usernameInput = document.getElementById('username');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const passwordInput = document.getElementById('password');
        const termsCheck = document.getElementById('termsCheck');
        const togglePasswordBtn = document.getElementById('togglePassword');
        const toggleIcon = document.getElementById('toggleIcon');
        const termsFeedback = document.getElementById('termsFeedback');

        // Toggle password visibility
        togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'text') {
                toggleIcon.classList.remove('bi-eye-slash-fill');
                toggleIcon.classList.add('bi-eye-fill');
            } else {
                toggleIcon.classList.remove('bi-eye-fill');
                toggleIcon.classList.add('bi-eye-slash-fill');
            }
        });

        // Custom terms validation styling
        termsCheck.addEventListener('change', function() {
            if (termsCheck.validity.valid) {
                termsFeedback.style.display = 'none';
            } else {
                termsFeedback.style.display = 'block';
            }
        });

        // Real-time validation improvements
        const inputs = [usernameInput, emailInput, phoneInput, passwordInput];
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                if (input.checkValidity()) {
                    input.classList.remove('is-invalid');
                } else {
                    input.classList.add('is-invalid');
                }
            });
        });

        // Phone formatting (simple auto-format)
        phoneInput.addEventListener('input', function(e) {
            let value = phoneInput.value.replace(/[^\d\+\-\(\)\s]/g, '');
            phoneInput.value = value;
        });

    })();
</script>
</body>
</html>
