@extends('components.layouts.app')

@section('content')
    <div class="container-fluid py-4">

        <!-- Stat Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card glass-card shadow-lg border-0 h-100">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="p-3 bg-primary text-white rounded me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-users fs-4"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">1,204</h3>
                            <p class="text-muted mb-0">Total Pengguna</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass-card shadow-lg border-0 h-100">
                    <div class="card-body d-flex align-items-center p-3">
                        <div
                            class="p-3 bg-success text-white rounded me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-user-check fs-4"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">987</h3>
                            <p class="text-muted mb-0">Pengguna Aktif</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass-card shadow-lg border-0 h-100">
                    <div class="card-body d-flex align-items-center p-3">
                        <div
                            class="p-3 bg-warning text-white rounded me-3 d-flex align-items-center justify-content-center">
                            <i class="ti ti-user-exclamation fs-4"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">12</h3>
                            <p class="text-muted mb-0">Menunggu Persetujuan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Management -->
        <div class="card glass-card shadow-lg border-0">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <div>
                        <h4 class="fw-bold mb-1">👥 Manajemen Pengguna</h4>
                        <p class="text-muted mb-0">Kelola semua pengguna sistem SENTRIS</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="position-relative" style="max-width: 250px;">
                            <input type="text" class="form-control ps-5" placeholder="Cari pengguna...">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        </div>
                        <button class="btn btn-primary d-flex align-items-center gap-2 shadow-sm">
                            <i class="ti ti-plus"></i> Tambah Pengguna
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-hover modern-table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Login Terakhir</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg"
                                            class="rounded-circle border border-3 border-primary-subtle" width="45"
                                            height="45" alt="user" />
                                        <div class="ms-3">
                                            <h6 class="fw-bold mb-0">Reza Pahlevi</h6>
                                            <small class="text-muted">reza.pahlevi@telkomsel.co.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary-subtle text-primary">System Administrator</span></td>
                                <td><span class="badge bg-success-subtle text-success">Aktif</span></td>
                                <td><small class="text-muted">25 Sep 2025, 14:30</small></td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light shadow-sm" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="ti ti-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-2.jpg"
                                            class="rounded-circle border border-3 border-info-subtle" width="45"
                                            height="45" alt="user" />
                                        <div class="ms-3">
                                            <h6 class="fw-bold mb-0">Bunga Isma Adila</h6>
                                            <small class="text-muted">bunga.isma@telkomsel.co.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info-subtle text-info">PIC Divisi</span></td>
                                <td><span class="badge bg-success-subtle text-success">Aktif</span></td>
                                <td><small class="text-muted">25 Sep 2025, 11:05</small></td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light shadow-sm" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ti ti-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="ti ti-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav class="mt-3">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-radius: .75rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .glass-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }

        .modern-table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.05);
            cursor: pointer;
        }
    </style>
@endsection
