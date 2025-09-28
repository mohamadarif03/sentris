@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title text-white fw-semibold">Selamat Datang, Bunga Isma!</h4>
                        <p class="card-subtitle mb-0 text-white">Anda adalah PIC untuk Divisi Human Resources. Siap
                            melaporkan data ESG terbaru?</p>
                    </div>
                    <a href="{{ route('kontributor.submit.index') }}" class="btn btn-light">Submit Data Baru</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 fs-7 fw-semibold text-center">25</h4>
                        <p class="fs-3 mb-0 text-center">Total Submission</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 fs-7 fw-semibold text-center text-warning">2</h4>
                        <p class="fs-3 mb-0 text-center">Menunggu Persetujuan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 fs-7 fw-semibold text-center text-success">22</h4>
                        <p class="fs-3 mb-0 text-center">Disetujui</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 fs-7 fw-semibold text-center text-danger">1</h4>
                        <p class="fs-3 mb-0 text-center">Ditolak</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Riwayat Submission Saya</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID Submission</th>
                                <th>Nama Data</th>
                                <th>Periode Laporan</th>
                                <th>Tanggal Submit</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1134</h6>
                                </td>
                                <td><span class="fs-3">Data Pelatihan Karyawan Q3</span></td>
                                <td><span class="fs-3">Juli - Sep 2025</span></td>
                                <td><span class="fs-3">26 Sep 2025, 11:15</span></td>
                                <td><span class="badge bg-light-warning text-warning">Menunggu Validasi</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1120</h6>
                                </td>
                                <td><span class="fs-3">Tingkat Keberagaman Karyawan</span></td>
                                <td><span class="fs-3">Juli - Sep 2025</span></td>
                                <td><span class="fs-3">22 Sep 2025, 10:00</span></td>
                                <td><span class="badge bg-light-danger text-danger">Ditolak</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1115</h6>
                                </td>
                                <td><span class="fs-3">Program Pelatihan Keselamatan Kerja</span></td>
                                <td><span class="fs-3">Juli - Sep 2025</span></td>
                                <td><span class="fs-3">20 Sep 2025, 15:30</span></td>
                                <td><span class="badge bg-light-success text-success">Disetujui</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1098</h6>
                                </td>
                                <td><span class="fs-3">Jumlah Jam Pelatihan per Karyawan</span></td>
                                <td><span class="fs-3">April - Juni 2025</span></td>
                                <td><span class="fs-3">15 Jul 2025, 09:00</span></td>
                                <td><span class="badge bg-light-success text-success">Disetujui</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
