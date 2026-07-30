@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('content')

<div class="row mt-3">
    <div class="col-12">
        <div class="card bg-primary bg-gradient text-white rounded-4 shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="fw-bold text-white mb-2">Selamat datang kembali, {{ Auth::user()->name }}! 👋</h3>
                        <p class="mb-0 text-white-50">
                            Anda login sebagai <span class="badge bg-light text-primary fw-semibold px-2 py-1">{{ Auth::user()->getRoleNames()->first() ?? 'User' }}</span>. Kelola aplikasi Anda dengan mudah dari dashboard ini.
                        </p>
                    </div>
                    <div class="d-none d-md-block">
                        <i class="ti ti-layout-dashboard fs-1 text-white opacity-50" style="font-size: 4rem !important;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Stat 1 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-semibold mb-2 fs-12">Status Otentikasi</h6>
                        <h4 class="fw-bold mb-0 text-success">Terverifikasi</h4>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-success-subtle text-success rounded-circle fs-20">
                            <i class="ti ti-shield-check"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 2 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-semibold mb-2 fs-12">Peran (Role)</h6>
                        <h4 class="fw-bold mb-0 text-primary">{{ ucfirst(Auth::user()->getRoleNames()->first() ?? 'User') }}</h4>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-20">
                            <i class="ti ti-user-check"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 3 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-semibold mb-2 fs-12">Total Permission</h6>
                        <h4 class="fw-bold mb-0 text-info">{{ Auth::user()->getAllPermissions()->count() }} Hak Akses</h4>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-20">
                            <i class="ti ti-key"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat 4 -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-semibold mb-2 fs-12">Sistem Auth</h6>
                        <h4 class="fw-bold mb-0 text-warning">Laravel Breeze</h4>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-20">
                            <i class="ti ti-lock"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Informasi Pengguna & Hak Akses (Spatie)</h5>
                <span class="badge bg-primary-subtle text-primary">Active Session</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle mb-0">
                        <tbody>
                            <tr>
                                <th style="width: 250px;">Nama Pengguna</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Peran (Spatie Roles)</th>
                                <td>
                                    @foreach(Auth::user()->getRoleNames() as $role)
                                        <span class="badge bg-success me-1">{{ $role }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Hak Akses (Spatie Permissions)</th>
                                <td>
                                    @forelse(Auth::user()->getAllPermissions() as $perm)
                                        <span class="badge bg-info me-1">{{ $perm->name }}</span>
                                    @empty
                                        <span class="text-muted fs-xs">Tidak ada permission khusus.</span>
                                    @endforelse
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
