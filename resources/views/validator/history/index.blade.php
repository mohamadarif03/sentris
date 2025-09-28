@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Riwayat Submission (Submission History)</h5>
                <p class="card-subtitle mb-4">Arsip semua data ESG yang telah diproses.</p>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Cari berdasarkan nama data atau ID</label>
                        <input type="text" class="form-control" placeholder="Contoh: #ESG-1135 atau Konsumsi Energi">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Filter berdasarkan Status</label>
                        <select class="form-select">
                            <option selected>Semua Status</option>
                            <option value="1">Disetujui</option>
                            <option value="2">Ditolak</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Filter berdasarkan Divisi</label>
                        <select class="form-select">
                            <option selected>Semua Divisi</option>
                            <option value="1">Network Operations</option>
                            <option value="2">Human Resources</option>
                            <option value="3">General Affairs</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button class="btn btn-outline-primary w-100">Filter</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID Submission</th>
                                <th>Nama Data</th>
                                <th>Tanggal Validasi</th>
                                <th>Validator</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1132</h6>
                                </td>
                                <td><span class="fs-3">Tingkat Keberagaman Karyawan</span></td>
                                <td><span class="fs-3">25 Sep 2025, 16:20</span></td>
                                <td>
                                    <h6 class="fw-normal fs-3 mb-0">Andi Pratama</h6>
                                </td>
                                <td><span class="badge bg-light-success text-success">Disetujui</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1131</h6>
                                </td>
                                <td><span class="fs-3">Jumlah E-Waste Terkumpul</span></td>
                                <td><span class="fs-3">25 Sep 2025, 14:00</span></td>
                                <td>
                                    <h6 class="fw-normal fs-3 mb-0">Siti Hartina</h6>
                                </td>
                                <td><span class="badge bg-light-success text-success">Disetujui</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1130</h6>
                                </td>
                                <td><span class="fs-3">Data Limbah B3 Gudang Cikarang</span></td>
                                <td><span class="fs-3">25 Sep 2025, 11:30</span></td>
                                <td>
                                    <h6 class="fw-normal fs-3 mb-0">Andi Pratama</h6>
                                </td>
                                <td><span class="badge bg-light-danger text-danger">Ditolak</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1129</h6>
                                </td>
                                <td><span class="fs-3">Program Pelatihan Keselamatan Kerja</span></td>
                                <td><span class="fs-3">24 Sep 2025, 17:00</span></td>
                                <td>
                                    <h6 class="fw-normal fs-3 mb-0">Siti Hartina</h6>
                                </td>
                                <td><span class="badge bg-light-success text-success">Disetujui</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
