@extends('layouts.base', ['title' => 'Login'])

@section('content')

<div class="auth-box overflow-hidden align-items-center d-flex">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-md-6 col-sm-8">
                <div class="auth-brand text-center mb-4">
                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                        <img src="/images/logo-black.png" alt="dark logo" height="32">
                    </a>
                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                        <img src="/images/logo.png" alt="logo" height="32">
                    </a>
                    <h4 class="fw-bold mt-3">Welcome to IN+</h4>
                    <p class="text-muted w-lg-75 mx-auto">Let’s get you signed in. Enter your email and password to continue.</p>
                </div>

                <div class="card p-4 rounded-4">
                    <form method="POST" action="{{ route('login') }}" novalidate id="loginForm">

                        @csrf

                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="userEmail" name="email" value="{{ old('email') }}" placeholder="Masukkan email">
                            </div>
                            <div class="text-danger fs-13 mt-1 d-none" id="clientEmailError"></div>
                            @if ($errors->get('email'))
                                <div class="text-danger fs-13 mt-1" id="serverEmailError">
                                    @foreach ((array) $errors->get('email') as $message)
                                        <div>{{ $message }}</div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="userPassword" name="password" placeholder="Masukkan password">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" title="Tampilkan/Sembunyikan Password">
                                    <i class="ti ti-eye-off" id="togglePasswordIcon"></i>
                                </button>
                            </div>
                            <div class="text-danger fs-13 mt-1 d-none" id="clientPasswordError"></div>
                            @if ($errors->get('password'))
                                <div class="text-danger fs-13 mt-1" id="serverPasswordError">
                                    @foreach ((array) $errors->get('password') as $message)
                                        <div>{{ $message }}</div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">Login</button>
                        </div>
                    </form>

                    <p class="text-muted text-center mt-4 mb-0">
                        New here? <a href="{{ route('register') }}" class="text-decoration-underline link-offset-3 fw-semibold">Create an account</a>
                    </p>
                </div>

                <p class="text-center text-muted mt-4 mb-0">
                    © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Toggle Password Visibility (Eye Icon)
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('userPassword');
    const passwordIcon = document.getElementById('togglePasswordIcon');

    if (togglePasswordBtn && passwordInput && passwordIcon) {
        togglePasswordBtn.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            passwordIcon.className = isPassword ? 'ti ti-eye' : 'ti ti-eye-off';
        });
    }

    // 2. Real-time Email & Password validation
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('userEmail');
    const clientEmailError = document.getElementById('clientEmailError');
    const serverEmailError = document.getElementById('serverEmailError');

    const clientPasswordError = document.getElementById('clientPasswordError');
    const serverPasswordError = document.getElementById('serverPasswordError');

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    function validateEmailRealtime() {
        const valEmail = emailInput.value.trim();

        if (serverEmailError) serverEmailError.style.display = 'none';

        if (valEmail === '') {
            clientEmailError.textContent = 'Email wajib diisi.';
            clientEmailError.classList.remove('d-none');
            emailInput.classList.add('is-invalid');
        } else if (!emailRegex.test(valEmail)) {
            clientEmailError.textContent = "Format email tidak valid.";
            clientEmailError.classList.remove('d-none');
            emailInput.classList.add('is-invalid');
        } else {
            clientEmailError.classList.add('d-none');
            emailInput.classList.remove('is-invalid');
        }
    }

    if (emailInput) {
        // Validasi real-time saat mengetik
        emailInput.addEventListener('input', validateEmailRealtime);
    }

    if (passwordInput) {
        passwordInput.addEventListener('input', function () {
            if (serverPasswordError) serverPasswordError.style.display = 'none';
            if (passwordInput.value !== '') {
                clientPasswordError.classList.add('d-none');
                passwordInput.classList.remove('is-invalid');
            }
        });
    }

    if (loginForm && emailInput) {
        loginForm.addEventListener('submit', function (e) {
            const valEmail = emailInput.value.trim();
            const valPassword = passwordInput ? passwordInput.value : '';

            if (serverEmailError) serverEmailError.style.display = 'none';
            if (serverPasswordError) serverPasswordError.style.display = 'none';

            let hasError = false;

            if (valEmail === '') {
                clientEmailError.textContent = 'Email wajib diisi.';
                clientEmailError.classList.remove('d-none');
                emailInput.classList.add('is-invalid');
                hasError = true;
            } else if (!emailRegex.test(valEmail)) {
                clientEmailError.textContent = "Format email tidak valid.";
                clientEmailError.classList.remove('d-none');
                emailInput.classList.add('is-invalid');
                hasError = true;
            }

            if (passwordInput && valPassword === '') {
                clientPasswordError.textContent = 'Password wajib diisi.';
                clientPasswordError.classList.remove('d-none');
                passwordInput.classList.add('is-invalid');
                hasError = true;
            }

            if (hasError) {
                e.preventDefault();
            }
        });
    }
});
</script>
@endsection
