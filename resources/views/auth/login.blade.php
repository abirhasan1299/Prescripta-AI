<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MediCore | Doctor Login</title>
    <!-- Bootstrap 5 CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Google Fonts for a premium look -->
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

        /* Subtle medical cross pattern overlay */
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

        /* Glass morphism card */
        .login-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 2.5rem;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.45), inset 0 1px 1px rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 2.8rem 2.5rem;
            max-width: 480px;
            width: 100%;
            color: #fff;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .login-card:hover {
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.55), inset 0 1px 1px rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.09);
        }

        /* Doctor icon / brand */
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

        .btn-login {
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

        .btn-login:hover {
            background: linear-gradient(115deg, #0d9488, #0f766e);
            box-shadow: 0 20px 30px -8px rgba(13, 148, 136, 0.7);
            transform: translateY(-2px);
            color: white;
        }

        .btn-login:active {
            transform: translateY(2px);
            box-shadow: 0 8px 15px -5px rgba(13, 148, 136, 0.6);
        }

        .extra-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.8rem;
            font-size: 0.9rem;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .extra-links a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .extra-links a:hover {
            color: #2dd4bf;
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
        }

        .footer-note {
            text-align: center;
            margin-top: 2rem;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.8rem;
            letter-spacing: 0.2px;
        }

        @media (max-width: 500px) {
            .login-card {
                padding: 2rem 1.5rem;
                border-radius: 2rem;
            }
        }
    </style>
</head>
<body>
<div class="login-card animate__animated animate__fadeIn">
    <!-- Brand / Icon -->
    <div class="brand-icon">
        <i class="bi bi-heart-pulse-fill"></i>
    </div>

    <!-- Welcome text -->
    <div class="welcome-text text-center">
        <h2>Doctor Portal</h2>
        <p>Sign in to your secure account</p>
    </div>

    <!-- Login Form -->
    <form id="doctorLoginForm" novalidate>
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
                    placeholder="dr.smith@medicore.com"
                    aria-label="Email"
                    aria-describedby="emailAddon"
                    required
                    autocomplete="email"
                >
            </div>
            <div class="invalid-feedback text-warning" style="font-size:0.8rem; margin-top:4px;">
                Please enter a valid medical email.
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
                    placeholder="••••••••"
                    aria-label="Password"
                    aria-describedby="passwordAddon"
                    required
                    minlength="6"
                    autocomplete="current-password"
                >
                <button class="btn btn-outline-light border-start-0 rounded-end" type="button" id="togglePassword" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.2);">
                    <i class="bi bi-eye-slash-fill" id="toggleIcon"></i>
                </button>
            </div>
            <div class="invalid-feedback text-warning" style="font-size:0.8rem; margin-top:4px;">
                Password must be at least 6 characters.
            </div>
        </div>

        <!-- Remember me & Forgot -->
        <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe" checked>
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <button class="btn btn-login w-100 mt-2" type="submit" id="loginButton">
            <i class="bi bi-box-arrow-in-right me-2"></i>Secure Login
        </button>

        <!-- Extra Links -->
        <div class="extra-links">
            <a href="#"><i class="bi bi-question-circle"></i> Need help?</a>
            <a href="#"><i class="bi bi-shield-check"></i> Privacy</a>
        </div>

        <div class="extra-links justify-content-center mt-2">
            <a href="#" class="text-decoration-underline-hover"><i class="bi bi-arrow-repeat"></i> Forgot password?</a>
        </div>
    </form>

    <div class="footer-note">
        <i class="bi bi-dot"></i> {{config('app.name')}} <i class="bi bi-dot"></i>
    </div>
</div>

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function() {
        'use strict';

        // Get form and inputs
        const form = document.getElementById('doctorLoginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePassword');
        const toggleIcon = document.getElementById('toggleIcon');

        // Toggle password visibility
        togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Change icon
            if (type === 'text') {
                toggleIcon.classList.remove('bi-eye-slash-fill');
                toggleIcon.classList.add('bi-eye-fill');
            } else {
                toggleIcon.classList.remove('bi-eye-fill');
                toggleIcon.classList.add('bi-eye-slash-fill');
            }
        });

        // Bootstrap form validation
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();

            // Check form validity
            if (form.checkValidity()) {
                // Gather data (demo)
                const email = emailInput.value.trim();
                const password = passwordInput.value.trim();
                const remember = document.getElementById('rememberMe').checked;

                // Simulate professional login action
                console.log('Doctor login attempt:', { email, remember });

                // Show subtle success feedback (replace with actual auth)
                const originalBtnText = document.getElementById('loginButton').innerHTML;
                const loginBtn = document.getElementById('loginButton');
                loginBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Authenticating...';
                loginBtn.disabled = true;

                // Simulate async (like API call)
                setTimeout(() => {
                    // For demo, show success alert (in production redirect to dashboard)
                    alert('✅ Welcome back, Dr. ' + email.split('@')[0].replace(/\./g, ' ').replace(/\b\w/g, l => l.toUpperCase()) + '! (Demo mode)');
                    loginBtn.innerHTML = originalBtnText;
                    loginBtn.disabled = false;

                    // Reset form if you want (optional)
                    // form.reset();
                    // passwordInput.setAttribute('type', 'password');
                    // toggleIcon.classList.remove('bi-eye-fill');
                    // toggleIcon.classList.add('bi-eye-slash-fill');
                }, 1400);
            } else {
                // Show validation errors
                form.classList.add('was-validated');
            }
        }, false);

        // Real-time validation improvement: remove was-validated on input change for better UX
        emailInput.addEventListener('input', function() {
            if (emailInput.checkValidity()) {
                emailInput.classList.remove('is-invalid');
            }
        });

        passwordInput.addEventListener('input', function() {
            if (passwordInput.checkValidity()) {
                passwordInput.classList.remove('is-invalid');
            }
        });

    })();
</script>
</body>
</html>
