@extends('layouts.base', ['title' => 'Forgot Password'])

@section('content')

<div class="auth-box p-0 w-100">
    <div class="row w-100 g-0">
        <div class="col">
            <div class="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                <div class="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                </div>
            </div>
        </div>

        <div class="col-xl-auto">
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
                        <h4 class="fw-bold">Forgot Password ? | IN++</h4>
                        <p class="text-muted auth-sub-text mx-auto">Enter your email address and we'll send you a link to reset your password.</p>

                        @if (session('status'))
                            <div class="alert alert-success mb-3 fs-13" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" novalidate id="forgotPasswordForm" class="mt-4 text-start">
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

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Send Request</button>
                            </div>
                        </form>
                    </div>

                    <p class="text-muted text-center mt-4 mb-0">
                        Return to <a href="{{ route('second', ['auth3', 'login'])}}" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                    </p>

                    <p class="text-center text-muted mt-auto mb-0">
                        © 2014 -
                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
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
