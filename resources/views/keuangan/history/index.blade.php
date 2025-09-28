@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h4 class="card-title fw-semibold">Riwayat Transaksi T-TAG</h4>
            <p class="card-subtitle mb-0">Arsip semua transaksi yang telah diklasifikasikan.</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-light-success">
                    <div class="card-body">
                        <p class="mb-1 fs-3">Total Anggaran ESG (YTD)</p>
                        <h4 class="fw-semibold fs-7">$1,280,500</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-1 fs-3">Total Anggaran Non-ESG (YTD)</p>
                        <h4 class="fw-semibold fs-7">$4,730,120</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row align-items-end mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Cari PO / Deskripsi</label>
                        <input type="text" class="form-control" placeholder="Contoh: PO-2025-09-1123">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Filter Klasifikasi</label>
                        <select class="form-select">
                            <option selected>Semua</option>
                            <option>ESG</option>
                            <option>Non-ESG</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Rentang Tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-outline-primary w-100">Filter</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Deskripsi</th>
                                <th>Nilai</th>
                                <th>Klasifikasi</th>
                                <th>Tanggal Tag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">PO-2025-09-1123</h6>
                                </td>
                                <td><span class="fs-3">Pengadaan Lampu LED Hemat Energi</span></td>
                                <td>
                                    <h6 class="fw-semibold fs-4 mb-0">$15,000.00</h6>
                                </td>
                                <td><span class="badge bg-light-success text-success">ESG</span></td>
                                <td><span class="fs-3">26 Sep 2025, 20:10</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">INV-2025-09-884</h6>
                                </td>
                                <td><span class="fs-3">Jasa Konsultan Keamanan Siber</span></td>
                                <td>
                                    <h6 class="fw-semibold fs-4 mb-0">$8,200.00</h6>
                                </td>
                                <td><span class="badge bg-light-secondary text-secondary">Non-ESG</span></td>
                                <td><span class="fs-3">26 Sep 2025, 20:09</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">PO-2025-09-1122</h6>
                                </td>
                                <td><span class="fs-3">Pembelian 10 Unit Kendaraan Listrik</span></td>
                                <td>
                                    <h6 class="fw-semibold fs-4 mb-0">$350,000.00</h6>
                                </td>
                                <td><span class="badge bg-light-success text-success">ESG</span></td>
                                <td><span class="fs-3">26 Sep 2025, 19:55</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">PO-2025-09-1121</h6>
                                </td>
                                <td><span class="fs-3">Langganan Software Akuntansi</span></td>
                                <td>
                                    <h6 class="fw-semibold fs-4 mb-0">$5,000.00</h6>
                                </td>
                                <td><span class="badge bg-light-secondary text-secondary">Non-ESG</span></td>
                                <td><span class="fs-3">26 Sep 2025, 19:54</span></td>
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
