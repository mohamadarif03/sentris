@extends('components.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-4">
            <h2 class="fw-bold">Pilih Role Anda</h2>
            <p class="text-muted">Silakan pilih role untuk melanjutkan ke dashboard masing-masing.</p>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <!-- Admin -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                         alt="Admin" width="80" class="mb-3">
                    <h5 class="fw-semibold">Admin</h5>
                    <p class="text-muted small">Kelola pengguna, sistem, dan pengaturan.</p>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary w-100">Masuk sebagai Admin</a>
                </div>
            </div>
        </div>

        <!-- Manajemen -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135679.png"
                         alt="Manajemen" width="80" class="mb-3">
                    <h5 class="fw-semibold">Manajemen</h5>
                    <p class="text-muted small">Pantau laporan, scenario, dan hasil analisis.</p>
                    <a href="{{ route('manajemen.dashboard') }}" class="btn btn-warning w-100">Masuk sebagai Manajemen</a>
                </div>
            </div>
        </div>

        <!-- Validator -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png"
                         alt="Validator" width="80" class="mb-3">
                    <h5 class="fw-semibold">Validator</h5>
                    <p class="text-muted small">Lakukan validasi data & riwayat verifikasi.</p>
                    <a href="{{ route('validator.dashboard') }}" class="btn btn-success w-100">Masuk sebagai Validator</a>
                </div>
            </div>
        </div>

        <!-- Kontributor -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135719.png"
                         alt="Kontributor" width="80" class="mb-3">
                    <h5 class="fw-semibold">Kontributor</h5>
                    <p class="text-muted small">Tambahkan konten, data, dan informasi baru.</p>
                    <a href="{{ route('kontributor.dashboard') }}" class="btn btn-info w-100">Masuk sebagai Kontributor</a>
                </div>
            </div>
        </div>

        <!-- Keuangan -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135730.png"
                         alt="Keuangan" width="80" class="mb-3">
                    <h5 class="fw-semibold">Keuangan</h5>
                    <p class="text-muted small">Kelola transaksi, laporan, dan anggaran.</p>
                    <a href="{{ route('keuangan.dashboard') }}" class="btn btn-secondary w-100">Masuk sebagai Keuangan</a>
                </div>
            </div>
        </div>

        <!-- Auditor -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 hover-zoom">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135745.png"
                         alt="Auditor" width="80" class="mb-3">
                    <h5 class="fw-semibold">Auditor</h5>
                    <p class="text-muted small">Audit sistem, validasi keuangan, dan review data.</p>
                    <a href="{{ route('auditor.dashboard') }}" class="btn btn-dark w-100">Masuk sebagai Auditor</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Optional CSS efek hover --}}
<style>
    .hover-zoom {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-zoom:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
</style>
@endsection
