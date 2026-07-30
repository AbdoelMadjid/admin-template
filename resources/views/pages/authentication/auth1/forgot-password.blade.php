@extends('layouts.base', ['title' => 'Forgot Password'])

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
                    <h4 class="fw-bold mt-3">Forgot Password ? | IN+</h4>
                    <p class="text-muted w-lg-75 mx-auto">Enter your email address and we'll send you a link to reset your password.</p>
                </div>

                <div class="card p-4 rounded-4">
                    @if (session('status'))
                        <div class="alert alert-success mb-3 fs-13" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" novalidate id="forgotPasswordForm">
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

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">Send Request</button>
                        </div>
                    </form>

                    <p class="text-muted text-center mt-4 mb-0">
                        Return to <a href="{{ route('login') }}" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                    </p>
                </div>

                <p class="text-center text-muted mt-4 mb-0">
                    © 2014 -
                    <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const forgotPasswordForm = document.getElementById('forgotPasswordForm');
    const emailInput = document.getElementById('userEmail');
    const clientEmailError = document.getElementById('clientEmailError');
    const serverEmailError = document.getElementById('serverEmailError');

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

    if (forgotPasswordForm && emailInput) {
        forgotPasswordForm.addEventListener('submit', function (e) {
            const valEmail = emailInput.value.trim();

            if (serverEmailError) serverEmailError.style.display = 'none';

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

            if (hasError) {
                e.preventDefault();
            }
        });
    }
});
</script>
@endsection
