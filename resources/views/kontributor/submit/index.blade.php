@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title fw-semibold mb-1">Formulir Submission Data ESG</h4>
                <p class="card-subtitle mb-4">Pastikan data yang Anda masukkan akurat dan disertai bukti pendukung.</p>

                <form>
                    <div class="mb-4 pb-4 border-bottom">
                        <h5 class="fw-semibold mb-3"><span class="badge bg-primary rounded-circle me-2">1</span>Informasi
                            Dasar</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dataCategory" class="form-label">Kategori Data</label>
                                <select class="form-select" id="dataCategory">
                                    <option>Sosial</option>
                                    <option selected>Lingkungan</option>
                                    <option>Tata Kelola</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dataMetric" class="form-label">Metrik Spesifik</label>
                                <select class="form-select" id="dataMetric">
                                    <option>Konsumsi Energi Listrik</option>
                                    <option>Penggunaan Air Fasilitas</option>
                                    <option selected>Jumlah E-Waste Terkumpul</option>
                                    <option>Emisi Scope 1</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="reportPeriod" class="form-label">Periode Laporan</label>
                                <input type="month" class="form-control" id="reportPeriod" value="2025-09">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 pb-4 border-bottom">
                        <h5 class="fw-semibold mb-3"><span class="badge bg-primary rounded-circle me-2">2</span>Input Nilai
                            & Deskripsi</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="metricValue" class="form-label">Nilai Metrik</slabel>
                                    <input type="number" class="form-control" id="metricValue"
                                        placeholder="Masukkan angka...">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="metricUnit" class="form-label">Satuan</label>
                                <select class="form-select" id="metricUnit">
                                    <option>kWh</option>
                                    <option>Liter</option>
                                    <option selected>Ton</option>
                                    <option>Jam</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Catatan / Deskripsi (Opsional)</label>
                                <textarea class="form-control" id="description" rows="3" placeholder="Tambahkan konteks jika diperlukan..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-semibold mb-3"><span class="badge bg-primary rounded-circle me-2">3</span>Unggah Bukti
                            Pendukung</h5>
                        <div class="card bg-light-lighten border-2 border-dashed">
                            <div class="card-body text-center">
                                <div class="p-3">
                                    <i class="ti ti-cloud-upload fs-9 text-muted"></i>
                                    <h5 class="mt-2">Drag & drop file di sini atau klik untuk upload</h5>
                                    <p class="fs-3 text-muted">Mendukung format: PDF, XLSX, DOCX, JPG, PNG</p>
                                    <input type="file" class="d-none">
                                    <button type="button" class="btn btn-secondary mt-2">Pilih File</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
