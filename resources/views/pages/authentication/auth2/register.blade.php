@extends('layouts.base', ['title' => 'Create New Account'])

@section('css')
@endsection

@section('content')

<div class="auth-box d-flex align-items-center">
    <div class="container-xxl">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10">
                <div class="card rounded-4">
                    <div class="row justify-content-between g-0">
                        <div class="col-lg-6">
                            <div class="card-body">
                                <div class="auth-brand text-center mb-4">
                                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-dark">
                                        <img src="/images/logo-black.png" alt="dark logo" height="32">
                                    </a>
                                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="logo-light">
                                        <img src="/images/logo.png" alt="logo" height="32">
                                    </a>
                                    <h4 class="fw-bold mt-4">Register to IN+</h4>
                                    <p class="text-muted w-lg-75 mx-auto">Let’s get you started. Create your account by entering your details below.</p>
                                </div>

                                <form method="POST" action="{{ route('register') }}" novalidate id="registerForm">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="ti ti-user text-muted fs-xl"></i></span>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="userName" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama lengkap">
                                        </div>
                                        <div class="text-danger fs-13 mt-1 d-none" id="clientNameError"></div>
                                        @if ($errors->get('name'))
                                            <div class="text-danger fs-13 mt-1" id="serverNameError">
                                                @foreach ((array) $errors->get('name') as $message)
                                                    <div>{{ $message }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="ti ti-mail text-muted fs-xl"></i></span>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="userEmail" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
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

                                    <div class="mb-3" data-password="bar">
                                        <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="ti ti-lock-password text-muted fs-xl"></i></span>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="userPassword" name="password" placeholder="Masukkan Password">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" title="Tampilkan/Sembunyikan Password">
                                                <i class="ti ti-eye-off" id="togglePasswordIcon"></i>
                                            </button>
                                        </div>
                                        <div class="password-bar my-2"></div>
                                        <p class="text-muted fs-xs mb-0">Gunakan 8+ karakter dengan kombinasi huruf dan angka.</p>
                                        <div class="text-danger fs-13 mt-1 d-none" id="clientPasswordError"></div>
                                        @if ($errors->get('password'))
                                            <div class="text-danger fs-13 mt-1" id="serverPasswordError">
                                                @foreach ((array) $errors->get('password') as $message)
                                                    <div>{{ $message }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="userConfirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light"><i class="ti ti-lock-password text-muted fs-xl"></i></span>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="userConfirmPassword" name="password_confirmation" placeholder="Masukkan Konfirmasi Password">
                                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword" title="Tampilkan/Sembunyikan Password">
                                                <i class="ti ti-eye-off" id="toggleConfirmPasswordIcon"></i>
                                            </button>
                                        </div>
                                        <div class="text-danger fs-13 mt-1 d-none" id="clientConfirmPasswordError"></div>
                                        @if ($errors->get('password_confirmation'))
                                            <div class="text-danger fs-13 mt-1" id="serverConfirmPasswordError">
                                                @foreach ((array) $errors->get('password_confirmation') as $message)
                                                    <div>{{ $message }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input form-check-input-light fs-14" type="checkbox" checked id="termAndPolicy">
                                            <label class="form-check-label" for="termAndPolicy">Agree the Terms & Policy</label>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary fw-semibold py-2">Create Account</button>
                                    </div>
                                </form>

                                <p class="text-muted text-center mt-4 mb-0">
                                    Already have an account? <a href="{{ route('second', ['auth2', 'login'])}}" class="text-decoration-underline link-offset-3 fw-semibold">Login</a>
                                </p>

                                <p class="text-center text-muted mt-4 mb-0">
                                    © 2014 -
                                    <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@vite(['resources/js/pages/auth-password.js'])
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

    const toggleConfirmBtn = document.getElementById('toggleConfirmPassword');
    const confirmInput = document.getElementById('userConfirmPassword');
    const confirmIcon = document.getElementById('toggleConfirmPasswordIcon');

    if (toggleConfirmBtn && confirmInput && confirmIcon) {
        toggleConfirmBtn.addEventListener('click', function () {
            const isPassword = confirmInput.type === 'password';
            confirmInput.type = isPassword ? 'text' : 'password';
            confirmIcon.className = isPassword ? 'ti ti-eye' : 'ti ti-eye-off';
        });
    }

    const registerForm = document.getElementById('registerForm');
    const nameInput = document.getElementById('userName');
    const emailInput = document.getElementById('userEmail');

    const clientNameError = document.getElementById('clientNameError');
    const serverNameError = document.getElementById('serverNameError');

    const clientEmailError = document.getElementById('clientEmailError');
    const serverEmailError = document.getElementById('serverEmailError');

    const clientPasswordError = document.getElementById('clientPasswordError');
    const serverPasswordError = document.getElementById('serverPasswordError');

    const clientConfirmPasswordError = document.getElementById('clientConfirmPasswordError');
    const serverConfirmPasswordError = document.getElementById('serverConfirmPasswordError');

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

    if (nameInput) {
        nameInput.addEventListener('input', function () {
            if (serverNameError) serverNameError.style.display = 'none';
            if (nameInput.value.trim() !== '') {
                clientNameError.classList.add('d-none');
                nameInput.classList.remove('is-invalid');
            }
        });
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

    if (confirmInput) {
        confirmInput.addEventListener('input', function () {
            if (serverConfirmPasswordError) serverConfirmPasswordError.style.display = 'none';
            if (confirmInput.value !== '') {
                clientConfirmPasswordError.classList.add('d-none');
                confirmInput.classList.remove('is-invalid');
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', function (e) {
            let hasError = false;

            const valName = nameInput ? nameInput.value.trim() : '';
            const valEmail = emailInput ? emailInput.value.trim() : '';
            const valPass = passwordInput ? passwordInput.value : '';
            const valConfirm = confirmInput ? confirmInput.value : '';

            if (serverNameError) serverNameError.style.display = 'none';
            if (serverEmailError) serverEmailError.style.display = 'none';
            if (serverPasswordError) serverPasswordError.style.display = 'none';
            if (serverConfirmPasswordError) serverConfirmPasswordError.style.display = 'none';

            if (valName === '') {
                clientNameError.textContent = 'Nama lengkap wajib diisi.';
                clientNameError.classList.remove('d-none');
                nameInput.classList.add('is-invalid');
                hasError = true;
            }

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

            if (passwordInput && valPass === '') {
                clientPasswordError.textContent = 'Password wajib diisi.';
                clientPasswordError.classList.remove('d-none');
                passwordInput.classList.add('is-invalid');
                hasError = true;
            }

            if (confirmInput && valConfirm === '') {
                clientConfirmPasswordError.textContent = 'Konfirmasi password wajib diisi.';
                clientConfirmPasswordError.classList.remove('d-none');
                confirmInput.classList.add('is-invalid');
                hasError = true;
            } else if (passwordInput && confirmInput && valPass !== '' && valPass !== valConfirm) {
                clientConfirmPasswordError.textContent = 'Konfirmasi password tidak cocok.';
                clientConfirmPasswordError.classList.remove('d-none');
                confirmInput.classList.add('is-invalid');
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
