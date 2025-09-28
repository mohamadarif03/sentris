@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-4">
            <h4 class="card-title fw-semibold">Dasbor ESG Tagging (T-TAG)</h4>
            <p class="card-subtitle mb-0">Klasifikasikan transaksi keuangan yang belum memiliki tag.</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-light-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-warning rounded-1 me-3"><i class="ti ti-file-invoice text-white fs-7"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">82</h4>
                                <p class="fs-3 mb-0">Transaksi Menunggu Tag</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-4 bg-light-success rounded-1 me-3"><i class="ti ti-tags text-success fs-7"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fs-7 fw-semibold">153</h4>
                                <p class="fs-3 mb-0">Diproses Hari Ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Antrian Transaksi (Transaction Queue)</h5>

                <ul class="list-group">
                    <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <h6 class="fw-semibold fs-4">PO-2025-09-1123</h6>
                                <p class="mb-1 fs-3">Pengadaan Lampu LED Hemat Energi untuk Kantor Pusat</p>
                                <span class="fs-3 text-muted">26 Sep 2025 - $15,000</span>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <button class="btn btn-sm btn-outline-success me-1">Tag ESG</button>
                                <button class="btn btn-sm btn-outline-secondary">Tag Non-ESG</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <h6 class="fw-semibold fs-4">INV-2025-09-884</h6>
                                <p class="mb-1 fs-3">Jasa Konsultan Keamanan Siber</p>
                                <span class="fs-3 text-muted">26 Sep 2025 - $8,200</span>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <button class="btn btn-sm btn-outline-success me-1">Tag ESG</button>
                                <button class="btn btn-sm btn-outline-secondary">Tag Non-ESG</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <h6 class="fw-semibold fs-4">PO-2025-09-1122</h6>
                                <p class="mb-1 fs-3">Pembelian 10 Unit Kendaraan Operasional Listrik</p>
                                <span class="fs-3 text-muted">25 Sep 2025 - $350,000</span>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <button class="btn btn-sm btn-outline-success me-1">Tag ESG</button>
                                <button class="btn btn-sm btn-outline-secondary">Tag Non-ESG</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                <h6 class="fw-semibold fs-4">PO-2025-09-1121</h6>
                                <p class="mb-1 fs-3">Langganan Software Akuntansi (SaaS)</p>
                                <span class="fs-3 text-muted">25 Sep 2025 - $5,000</span>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <button class="btn btn-sm btn-outline-success me-1">Tag ESG</button>
                                <button class="btn btn-sm btn-outline-secondary">Tag Non-ESG</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
