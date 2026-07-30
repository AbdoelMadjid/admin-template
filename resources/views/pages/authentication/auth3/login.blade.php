@extends('layouts.base', ['title' => 'Login'])

@section('content')

<div class="auth-box p-0 w-100">
    <div class="row w-100 g-0">
        <div class="col">
            <div class="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                <div class="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">

                </div>
            </div>
        </div>
        <div class="col-md-auto">
            <!--Auth Box content -->
            <div class="card auth-box-form border-0 mb-0">
                <div class="card-body min-vh-100 d-flex flex-column justify-content-center">
                    <div class="auth-brand mb-0 text-center">
                        <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                            <img src="/images/logo.png" alt="logo" height="32">
                        </a>
                    </div>

                    <div class="mt-auto text-center">
                        <h4 class="fw-bold">Welcome to IN+</h4>
                        <p class="text-muted auth-sub-text mx-auto">Let’s get you signed in. Enter your email and password to continue.</p>

                        <form method="POST" action="{{ route('login') }}" novalidate id="loginForm" class="mt-4 text-start">
                            @csrf

                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light @error('email') is-invalid @enderror" id="userEmail" name="email" value="{{ old('email') }}" placeholder="Masukkan email">
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
                                <div class="input-group">
                                    <input type="password" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light @error('password') is-invalid @enderror" id="userPassword" name="password" placeholder="Enter password">
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

                                <a href="{{ route('second', ['auth3', 'forgot-password'])}}" class="text-decoration-underline link-offset-3 text-muted">Forgot Password?</a>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-bold py-2">Login</button>
                            </div>
                        </form>
                    </div>

                    <p class="text-muted text-center mt-4 mb-0">
                        New here? <a href="{{ route('second', ['auth3', 'register'])}}" class="text-decoration-underline link-offset-3 fw-semibold">Create an account</a>
                    </p>

                    <p class="text-center text-muted mt-auto mb-0">
                        © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                    </p>
                </div>
            </div>
            <!-- End Auth Box Content -->
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
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
