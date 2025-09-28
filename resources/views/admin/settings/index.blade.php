@extends('components.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title fw-semibold mb-4">Pengaturan Sistem</h4>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab"
                            data-bs-target="#general-tab-pane" type="button" role="tab"
                            aria-controls="general-tab-pane" aria-selected="true">
                            <i class="ti ti-settings me-1"></i> Umum
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mail-tab" data-bs-toggle="tab" data-bs-target="#mail-tab-pane"
                            type="button" role="tab" aria-controls="mail-tab-pane" aria-selected="false">
                            <i class="ti ti-mail me-1"></i> Email
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security-tab-pane"
                            type="button" role="tab" aria-controls="security-tab-pane" aria-selected="false">
                            <i class="ti ti-lock me-1"></i> Keamanan
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel"
                        aria-labelledby="general-tab" tabindex="0">
                        <div class="p-3">
                            <div class="mb-3">
                                <label for="appName" class="form-label">Nama Aplikasi</label>
                                <input type="text" class="form-control" id="appName" value="SENTRIS">
                            </div>
                            <div class="mb-3">
                                <label for="appLogo" class="form-label">Logo Aplikasi</label>
                                <input class="form-control" type="file" id="appLogo">
                            </div>
                            <div class="mb-3">
                                <label for="appTimezone" class="form-label">Zona Waktu</label>
                                <select class="form-select" id="appTimezone">
                                    <option selected>Asia/Jakarta</option>
                                    <option value="1">Asia/Makassar</option>
                                    <option value="2">Asia/Jayapura</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mail-tab-pane" role="tabpanel" aria-labelledby="mail-tab" tabindex="0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="mailHost" class="form-label">Mail Host</label>
                                    <input type="text" class="form-control" id="mailHost"
                                        placeholder="smtp.mailtrap.io">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mailPort" class="form-label">Mail Port</label>
                                    <input type="text" class="form-control" id="mailPort" placeholder="2525">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="mailUser" class="form-label">Username</label>
                                <input type="text" class="form-control" id="mailUser" placeholder="your-username">
                            </div>
                            <div class="mb-3">
                                <label for="mailPass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="mailPass" placeholder="your-password">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="security-tab-pane" role="tabpanel" aria-labelledby="security-tab"
                        tabindex="0">
                        <div class="p-3">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="twoFactorSwitch"
                                    checked>
                                <label class="form-check-label" for="twoFactorSwitch">Aktifkan Two-Factor Authentication
                                    (2FA)</label>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="registerSwitch">
                                <label class="form-check-label" for="registerSwitch">Izinkan Pendaftaran Pengguna
                                    Baru</label>
                            </div>
                            <div class="mb-3">
                                <label for="sessionTimeout" class="form-label">Session Timeout (menit)</label>
                                <input type="number" class="form-control" id="sessionTimeout" value="120">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-top mt-3 pt-3 px-3">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>

            </div>
        </div>
    </div>
@endsection
