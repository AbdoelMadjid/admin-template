@extends('layouts.base', ['title' => 'View Not Found'])

@section('content')
<div class="auth-box overflow-hidden align-items-center d-flex min-vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-md-7 text-center">
                <div class="card shadow-sm border-0 p-4">
                    <div class="card-body">
                        <img src="/images/svg/404.svg" alt="View Not Found" class="img-fluid mb-3" style="max-height: 160px;">
                        <h4 class="fw-bold text-danger mb-2">View Blade Tidak Ditemukan</h4>
                        <p class="text-muted mb-4">View <code>{{ $viewName ?? 'halaman ini' }}</code> belum dibuat atau tidak ditemukan.</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-pill px-4">
                            <i class="ri-home-4-line me-1"></i> Ke Dashboard
                        </a>
                    </div>
                </div>
                <p class="text-muted mt-3 mb-0" style="font-size: 12px;">
                    © <script>document.write(new Date().getFullYear())</script> INSPINIA
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dashboardUrl = "{{ route('dashboard') }}";
        const viewName = "{{ $viewName ?? 'halaman ini' }}";

        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'error',
                title: 'View Not Found!',
                html: 'File view blade <code>' + viewName + '</code> tidak ditemukan.<br><br>Klik <b>OK</b> untuk kembali ke Dashboard.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
                allowOutsideClick: false,
                allowEscapeKey: false
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = dashboardUrl;
                }
            });
        } else {
            alert('View [' + viewName + '] tidak ditemukan. Mengarahkan ke Dashboard...');
            window.location.href = dashboardUrl;
        }
    });
</script>
@endsection
