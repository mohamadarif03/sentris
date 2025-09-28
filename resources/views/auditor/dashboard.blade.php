@extends('components.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="card-title fw-semibold">Auditor Data Explorer</h4>
            <p class="card-subtitle mb-0">Jelajahi dan verifikasi integritas data ESG yang telah divalidasi.</p>
        </div>
        <button class="btn btn-primary d-flex align-items-center gap-2">
            <i class="ti ti-download"></i> Ekspor Laporan Audit
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan ID data, nama, atau kata kunci...">
                </div>
                <div class="col-lg-4">
                     <select class="form-select">
                        <option selected>Filter berdasarkan Kategori...</option>
                        <option>Lingkungan</option>
                        <option>Sosial</option>
                        <option>Tata Kelola</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-outline-primary w-100">Cari</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Hasil Pencarian: <span class="text-muted">3 Data Ditemukan</span></h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID Data</th>
                            <th>Nama Data</th>
                            <th>Nilai</th>
                            <th>Tanggal Validasi</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h6 class="fw-semibold mb-0">#ESG-1132</h6></td>
                            <td><span class="fs-3">Tingkat Keberagaman Karyawan</span></td>
                            <td><h6 class="fw-semibold fs-4 mb-0">15%</h6></td>
                            <td><span class="fs-3">25 Sep 2025, 16:20</span></td>
                            <td class="text-end"><a href="#auditTrailDetail" class="btn btn-sm btn-outline-primary">Lihat Audit Trail</a></td>
                        </tr>
                        <tr>
                            <td><h6 class="fw-semibold mb-0">#ESG-1131</h6></td>
                            <td><span class="fs-3">Jumlah E-Waste Terkumpul</span></td>
                            <td><h6 class="fw-semibold fs-4 mb-0">12.5 Ton</h6></td>
                            <td><span class="fs-3">25 Sep 2025, 14:00</span></td>
                            <td class="text-end"><a href="#auditTrailDetail" class="btn btn-sm btn-outline-primary">Lihat Audit Trail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="auditTrailDetail" class="mt-5 pt-4 border-top">
                <h5 class="fw-semibold mb-3">Detail Jejak Audit untuk <span class="text-primary">#ESG-1132</span></h5>
                <div class="card bg-light-lighten">
                    <div class="card-body">
                        <ul class="timeline-widget">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center"><span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span><span class="timeline-badge-border d-block flex-shrink-0"></span></div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">
                                    <span class="fw-semibold">Data Dibuat</span> oleh Bunga Isma (PIC Divisi)
                                    <p class="fs-2 text-muted mb-0">22 Sep 2025, 10:00</p>
                                </div>
                            </li>
                             <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center"><span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span><span class="timeline-badge-border d-block flex-shrink-0"></span></div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">
                                    <span class="fw-semibold">Data Disetujui</span> oleh Andi Pratama (Validator)
                                    <p class="fs-2 text-muted mb-0">25 Sep 2025, 16:20</p>
                                </div>
                            </li>
                             <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center"><span class="timeline-badge border-2 border border-secondary flex-shrink-0 my-8"></span></div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">
                                    <span class="fw-semibold">Dicatat di Blockchain (Immutable)</span>
                                    <p class="fs-2 text-muted mb-0" style="word-break: break-all;">Hash: 0x1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t</p>
                                </div>
                            </li>
                        </ul>
                         <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-info">Unduh Dokumen Pendukung</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
