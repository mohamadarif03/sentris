<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img">
                <img src="{{ asset('dist/images/logo.webp') }}" width="200" alt="" srcset="">
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                {{-- ============================================= --}}
                {{-- MENU UNTUK SYSTEM ADMINISTRATOR               --}}
                {{-- Tampil jika route diawali 'admin.'            --}}
                {{-- ============================================= --}}
                @if (request()->routeIs('admin.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Admin Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-layout-dashboard"></i></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}"
                            href="{{ route('admin.users.index') }}" aria-expanded="false">
                            <span><i class="ti ti-users"></i></span>
                            <span class="hide-menu">User Management</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.settings.index') ? 'active' : '' }}"
                            href="{{ route('admin.settings.index') }}" aria-expanded="false">
                            <span><i class="ti ti-settings"></i></span>
                            <span class="hide-menu">System Settings</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.logs.index') ? 'active' : '' }}"
                            href="{{ route('admin.logs.index') }}" aria-expanded="false">
                            <span><i class="ti ti-file-text"></i></span>
                            <span class="hide-menu">Audit Log</span>
                        </a>
                    </li>
                @endif

                @if (request()->routeIs('manajemen.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">T-INSIGHT</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('manajemen.dashboard') ? 'active' : '' }}"
                            href="{{ route('manajemen.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-chart-pie"></i></span>
                            <span class="hide-menu">ESG Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('manajemen.reports.index') ? 'active' : '' }}"
                            href="{{ route('manajemen.reports.index') }}" aria-expanded="false">
                            <span><i class="ti ti-report-analytics"></i></span>
                            <span class="hide-menu">Report Generation</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('manajemen.scenarios.index') ? 'active' : '' }}"
                            href="{{ route('manajemen.scenarios.index') }}" aria-expanded="false">
                            <span><i class="ti ti-bulb"></i></span>
                            <span class="hide-menu">Scenario Planning</span>
                        </a>
                    </li>
                @endif
                @if (request()->routeIs('validator.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Validator Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('validator.dashboard') ? 'active' : '' }}"
                            href="{{ route('validator.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-playlist-check"></i></span>
                            <span class="hide-menu">Validation Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('validator.history.index') ? 'active' : '' }}"
                            href="{{ route('validator.history.index') }}" aria-expanded="false">
                            <span><i class="ti ti-history"></i></span>
                            <span class="hide-menu">Submission History</span>
                        </a>
                    </li>
                @endif
                @if (request()->routeIs('kontributor.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Kontributor Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('kontributor.dashboard') ? 'active' : '' }}"
                            href="{{ route('kontributor.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-dashboard"></i></span>
                            <span class="hide-menu">Dasbor Saya</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('kontributor.submit.index') ? 'active' : '' }}"
                            href="{{ route('kontributor.submit.index') }}" aria-expanded="false">
                            <span><i class="ti ti-cloud-upload"></i></span>
                            <span class="hide-menu">Submit Data Baru</span>
                        </a>
                    </li>
                @endif
                @if (request()->routeIs('keuangan.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">T-TAG Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('keuangan.dashboard') ? 'active' : '' }}"
                            href="{{ route('keuangan.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-tag"></i></span>
                            <span class="hide-menu">ESG Tagging Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('keuangan.history.index') ? 'active' : '' }}"
                            href="{{ route('keuangan.history.index') }}" aria-expanded="false">
                            <span><i class="ti ti-history"></i></span>
                            <span class="hide-menu">Riwayat Transaksi</span>
                        </a>
                    </li>
                @endif
                @if (request()->routeIs('auditor.*'))
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Auditor Menu</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('auditor.dashboard') ? 'active' : '' }}"
                            href="{{ route('auditor.dashboard') }}" aria-expanded="false">
                            <span><i class="ti ti-search"></i></span>
                            <span class="hide-menu">Data Explorer</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" aria-expanded="false">
                            <span><i class="ti ti-download"></i></span>
                            <span class="hide-menu">Export Reports</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
