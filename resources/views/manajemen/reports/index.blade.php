@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h4 class="card-title fw-semibold">Pusat Laporan (Report Center)</h4>
            <p class="card-subtitle mb-0">Buat, kelola, dan unduh laporan keberlanjutan sesuai kebutuhan.</p>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Buat Laporan Baru</h5>
                <div class="row align-items-end">
                    <div class="col-lg-4 mb-3">
                        <label for="reportTemplate" class="form-label">Template Laporan</label>
                        <select class="form-select" id="reportTemplate">
                            <option selected>Laporan Tahunan (GRI Standard)</option>
                            <option>Ringkasan Eksekutif Kuartalan</option>
                            <option>Laporan Emisi (TCFD Standard)</option>
                            <option>Laporan Kustom</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="reportPeriod" class="form-label">Periode Laporan</label>
                        <input type="date" class="form-control" id="reportPeriod">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label">Format File</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="format" id="formatPdf" value="pdf"
                                    checked>
                                <label class="form-check-label" for="formatPdf">PDF</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="format" id="formatXlsx"
                                    value="xlsx">
                                <label class="form-check-label" for="formatXlsx">XLSX</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <button class="btn btn-primary w-100">Generate</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Riwayat Laporan</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Laporan</th>
                                <th>Tanggal Dibuat</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">Laporan Tahunan 2024</h6>
                                </td>
                                <td><span class="fs-3">15 Jan 2025, 10:30</span></td>
                                <td><span class="fs-3">01 Jan 2024 - 31 Des 2024</span></td>
                                <td><span class="badge bg-light-success text-success">Tersedia</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1 ms-auto">
                                        <i class="ti ti-download"></i> Unduh
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">Ringkasan Eksekutif Q3 2025</h6>
                                </td>
                                <td><span class="fs-3">26 Sep 2025, 09:15</span></td>
                                <td><span class="fs-3">01 Jul 2025 - 30 Sep 2025</span></td>
                                <td><span class="badge bg-light-success text-success">Tersedia</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1 ms-auto">
                                        <i class="ti ti-download"></i> Unduh
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">Laporan Emisi (TCFD)</h6>
                                </td>
                                <td><span class="fs-3">26 Sep 2025, 19:48</span></td>
                                <td><span class="fs-3">01 Jan 2025 - 30 Sep 2025</span></td>
                                <td><span class="badge bg-light-warning text-warning">Processing...</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1 ms-auto"
                                        disabled>
                                        <i class="ti ti-download"></i> Unduh
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
