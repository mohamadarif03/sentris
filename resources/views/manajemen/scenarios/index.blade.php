@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h4 class="card-title fw-semibold">Perencanaan Skenario (Scenario Planning)</h4>
            <p class="card-subtitle mb-0">Simulasikan dampak keputusan strategis terhadap target ESG Anda.</p>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Langkah 1: Pilih Skenario & Atur Parameter</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Pilih Inisiatif</label>
                        <select class="form-select">
                            <option selected>Investasi Panel Surya di BTS</option>
                            <option>Konversi Kendaraan Operasional ke EV</option>
                            <option>Peningkatan Efisiensi Air di Fasilitas Utama</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="customRange1" class="form-label">Parameter: Jumlah BTS yang di-upgrade</label>
                        <div class="d-flex align-items-center">
                            <input type="range" class="form-range" id="customRange1" min="0" max="5000"
                                step="100">
                            <span class="fw-semibold ms-3" style="width: 100px;">1,000 BTS</span>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">Jalankan Simulasi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-1">Langkah 2: Hasil Simulasi</h5>
                <p class="card-subtitle mb-4">Skenario: Investasi Panel Surya di 1,000 BTS</p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-light-success">
                            <div class="card-body">
                                <p class="fs-4 mb-1">Proyeksi Penurunan Emisi $CO_2$</p>
                                <h4 class="fw-bold fs-7 d-flex align-items-center mb-0">
                                    -1,250 <span class="fs-4 fw-semibold ms-2">ton/tahun</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-light-primary">
                            <div class="card-body">
                                <p class="fs-4 mb-1">Estimasi Penghematan Biaya</p>
                                <h4 class="fw-bold fs-7 d-flex align-items-center mb-0">
                                    $2.5M <span class="fs-4 fw-semibold ms-2">/tahun</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-light-info">
                            <div class="card-body">
                                <p class="fs-4 mb-1">Estimasi ROI</p>
                                <h4 class="fw-bold fs-7 d-flex align-items-center mb-0">
                                    4.5 <span class="fs-4 fw-semibold ms-2">Tahun</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h6 class="fw-semibold mb-3">Proyeksi Tren Emisi Hingga 2030</h6>
                        <div id="chart" style="height: 250px;"></div>
                    </div>
                    <div class="col-lg-5">
                        <h6 class="fw-semibold">Progress Menuju Target Dekarbonisasi 2030</h6>
                        <p class="mb-2">Dengan skenario ini, pencapaian target akan lebih cepat <strong>8%</strong> dari
                            proyeksi awal.</p>
                        <div class="progress mb-2" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">Proyeksi Awal (75%)</div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="83"
                                aria-valuemin="0" aria-valuemax="100">Proyeksi Baru (83%)</div>
                        </div>
                    </div>
                </div>

                <div class="border-top mt-4 pt-3">
                    <button class="btn btn-outline-primary">Ekspor Hasil Simulasi</button>
                </div>
            </div>
        </div>
    </div>
@endsection
