@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Log Audit Sistem</h5>
                <p class="card-subtitle mb-4">Lacak semua aktivitas dan perubahan yang terjadi dalam sistem.</p>

                <div class="row mb-4 align-items-end">
                    <div class="col-md-4">
                        <label for="dateRange" class="form-label">Rentang Tanggal</label>
                        <input type="text" class="form-control" id="dateRange" placeholder="Pilih tanggal...">
                    </div>
                    <div class="col-md-3">
                        <label for="userFilter" class="form-label">Pengguna</label>
                        <select class="form-select" id="userFilter">
                            <option selected>Semua Pengguna</option>
                            <option value="1">Reza Pahlevi</option>
                            <option value="2">Bunga Isma</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="eventFilter" class="form-label">Tipe Event</label>
                        <select class="form-select" id="eventFilter">
                            <option selected>Semua Event</option>
                            <option value="1">LOGIN</option>
                            <option value="2">CREATE</option>
                            <option value="3">UPDATE</option>
                            <option value="4">DELETE</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Filter</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Pengguna</th>
                                <th scope="col">Event</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fs-3">26 Sep 2025, 19:25:02</span></td>
                                <td>
                                    <h6 class="fw-semibold mb-0">Bunga Isma Adila</h6>
                                    <span class="fs-3 text-muted">PIC Divisi</span>
                                </td>
                                <td><span class="badge bg-light-info text-info"><i class="ti ti-cloud-upload me-1"></i>
                                        SUBMIT</span></td>
                                <td><span class="fs-3">Submit data "Limbah B3 Q3"</span></td>
                            </tr>
                            <tr>
                                <td><span class="fs-3">26 Sep 2025, 19:22:11</span></td>
                                <td>
                                    <h6 class="fw-semibold mb-0">Reza Pahlevi</h6>
                                    <span class="fs-3 text-muted">Admin</span>
                                </td>
                                <td><span class="badge bg-light-warning text-warning"><i class="ti ti-edit me-1"></i>
                                        UPDATE</span></td>
                                <td><span class="fs-3">Mengubah status pengguna "Panangian" menjadi tidak aktif</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fs-3">26 Sep 2025, 19:20:45</span></td>
                                <td>
                                    <h6 class="fw-semibold mb-0">System</h6>
                                    <span class="fs-3 text-muted">-</span>
                                </td>
                                <td><span class="badge bg-light-danger text-danger"><i
                                            class="ti ti-alert-triangle me-1"></i> FAILED_LOGIN</span></td>
                                <td><span class="fs-3">Upaya login gagal dari IP: 103.45.XX.XX</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation" class="mt-4">
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
@endsection

@push('scripts')
    <script></script>
@endpush
