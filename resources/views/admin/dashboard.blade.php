@extends('components.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold text-dark">✨ Admin Dashboard</h2>
                <p class="text-muted mb-0">Overview sistem <span class="fw-semibold text-primary">SENTRIS</span> secara
                    keseluruhan.</p>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="row g-4">
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body d-flex align-items-center">
                        <div
                            class="p-4 bg-success text-white rounded-3 me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-server-2 fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Online</h5>
                            <small class="text-muted">Status Sistem</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body d-flex align-items-center">
                        <div
                            class="p-4 bg-primary text-white rounded-3 me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-users fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">1,204</h5>
                            <small class="text-muted">Total Pengguna</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="p-4 bg-info text-white rounded-3 me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-cloud-upload fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">357</h5>
                            <small class="text-muted">Submission Hari Ini</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body d-flex align-items-center">
                        <div
                            class="p-4 bg-warning text-white rounded-3 me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-file-check fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">12</h5>
                            <small class="text-muted">Menunggu Validasi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Row -->
        <div class="row g-4 mt-2">
            <!-- Chart -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">📊 Aktivitas Submission Mingguan</h5>
                        <p class="text-muted">Data ESG yang masuk per hari</p>
                        <div id="chart" style="height: 320px;"></div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 rounded-3 glass-card h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">⚡ Log Aktivitas Terbaru</h5>
                        <ul class="list-unstyled timeline-modern">
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <span class="badge bg-primary me-3 rounded-circle">&nbsp;</span>
                                    <p class="mb-0">Admin <span class="fw-semibold text-primary">Reza P.</span>
                                        menambahkan role baru.</p>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <span class="badge bg-info me-3 rounded-circle">&nbsp;</span>
                                    <p class="mb-0">Pengguna <span class="fw-semibold text-info">Bunga I.</span> melakukan
                                        submission.</p>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <span class="badge bg-danger me-3 rounded-circle">&nbsp;</span>
                                    <p class="mb-0">Gagal login terdeteksi dari IP 103.22.XX.XX</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Health -->
        <div class="card shadow-lg border-0 rounded-3 glass-card mt-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">💻 Kesehatan Sistem</h5>
                <div class="row g-4">
                    <div class="col-md-4">
                        <p class="fw-semibold mb-2">CPU Load</p>
                        <div class="progress" style="height: 18px;">
                            <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: 34%">34%
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="fw-semibold mb-2">Memory Usage</p>
                        <div class="progress" style="height: 18px;">
                            <div class="progress-bar bg-warning rounded-pill" role="progressbar" style="width: 68%">68%
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="fw-semibold mb-2">Disk Space</p>
                        <div class="progress" style="height: 18px;">
                            <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="width: 85%">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .timeline-modern .badge {
            width: 12px;
            height: 12px;
        }
    </style>
@endsection
