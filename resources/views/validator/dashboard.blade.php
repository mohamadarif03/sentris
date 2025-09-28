@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h4 class="card-title fw-semibold">Dasbor Validasi</h4>
            <p class="card-subtitle mb-0">Selamat datang! Berikut adalah data ESG yang memerlukan review Anda.</p>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-warning rounded-1 me-3"><i class="ti ti-file-info text-white fs-7"></i></div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">12</h4>
                                <p class="fs-3 mb-0">Menunggu Validasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-success rounded-1 me-3"><i class="ti ti-file-check text-white fs-7"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">32</h4>
                                <p class="fs-3 mb-0">Disetujui Hari Ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-danger rounded-1 me-3"><i class="ti ti-file-x text-white fs-7"></i></div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">3</h4>
                                <p class="fs-3 mb-0">Ditolak Hari Ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-light-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-primary rounded-1 me-3"><i class="ti ti-clock-hour-4 text-white fs-7"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">2.5 Jam</h4>
                                <p class="fs-3 mb-0">Waktu Rata-rata Validasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Antrian Validasi (Validation Queue)</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID Submission</th>
                                <th>Nama Data</th>
                                <th>Divisi Pengirim</th>
                                <th>Tanggal Submit</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1135</h6>
                                </td>
                                <td><span class="fs-3">Konsumsi Energi BTS Wilayah Jawa Timur</span></td>
                                <td><span class="badge bg-light-primary text-primary">Network Operations</span></td>
                                <td><span class="fs-3">26 Sep 2025, 14:30</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-primary">Review Data</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1134</h6>
                                </td>
                                <td><span class="fs-3">Data Pelatihan Karyawan Q3</span></td>
                                <td><span class="badge bg-light-info text-info">Human Resources</span></td>
                                <td><span class="fs-3">26 Sep 2025, 11:15</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-primary">Review Data</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">#ESG-1133</h6>
                                </td>
                                <td><span class="fs-3">Penggunaan Air Fasilitas Kantor Pusat</span></td>
                                <td><span class="badge bg-light-success text-success">General Affairs</span></td>
                                <td><span class="fs-3">26 Sep 2025, 10:05</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-primary">Review Data</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
