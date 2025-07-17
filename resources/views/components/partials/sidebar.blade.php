<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img" wire:navigate>
                <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" class="dark-logo" width="180" alt="Logo" />
                <img src="{{ asset('dist/images/logos/light-logo.svg') }}" class="light-logo" width="180"
                    alt="Logo" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}" wire:navigate aria-expanded="false">
                        <span>
                            <i class="ti ti-aperture"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                @role('Admin')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MASTER DATA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.management-user.*') ? 'active' : '' }}"
                            href="{{ route('admin.management-user.index') }}" wire:navigate aria-expanded="false">
                            <span>
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Manajemen Pengguna</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.customer.*') ? 'active' : '' }}"
                            href="{{ route('admin.customer.index') }}" wire:navigate aria-expanded="false">
                            <span>
                                <i class="ti ti-id-badge-2"></i>
                            </span>
                            <span class="hide-menu">Master Data Customer</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.question.*') ? 'active' : '' }}"
                            href="{{ route('admin.question.index') }}" wire:navigate aria-expanded="false">
                            <span>
                                <i class="ti ti-help-hexagon"></i>
                            </span>
                            <span class="hide-menu">Master Pertanyaan</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU UTAMA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.task.*') ? 'active' : '' }}"
                            href="{{ route('admin.task.index') }}" wire:navigate aria-expanded="false">
                            <span><i class="ti ti-file-text"></i></span>
                            <span class="hide-menu">Manajemen Tugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('admin.area.*') ? 'active' : '' }}"
                            href="{{ route('admin.area.index') }}" wire:navigate>
                            <span><i class="ti ti-map-pin"></i></span>
                            <span class="hide-menu">Manajemen Wilayah</span>
                        </a>
                    </li>
                @endrole
                @role('Field_Officer')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU UTAMA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('field-officer.task.*') ? 'active' : '' }}"
                            href="{{ route('field-officer.task.index') }}" wire:navigate>
                            <span><i class="ti ti-list-check"></i></span>
                            <span class="hide-menu">Daftar Tugas</span>
                        </a>
                    </li>
                @endrole
                @role('Sales')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU UTAMA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('sales.validation.*') ? 'active' : '' }}"
                            href="{{ route('sales.validation.index') }}" wire:navigate>
                            <span><i class="ti ti-user-check"></i></span>
                            <span class="hide-menu">Validasi Customer</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('sales.task-approval.*') ? 'active' : '' }}"
                            href="{{ route('sales.task-approval.index') }}" wire:navigate>
                            <span><i class="ti ti-thumb-up"></i></span>
                            <span class="hide-menu">Persetujuan Tugas</span>
                        </a>
                    </li>
                @endrole
                @role('Collector_Head')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU COLL HEAD</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('collector-head.escalation.*') ? 'active' : '' }}"
                            href="{{ route('collector-head.escalation.index') }}" wire:navigate>
                            <span><i class="ti ti-arrow-up-right-circle"></i></span>
                            <span class="hide-menu">Kasus Eskalasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('collector-head.history') ? 'active' : '' }}"
                            href="{{ route('collector-head.history') }}" wire:navigate>
                            <span><i class="ti ti-history"></i></span>
                            <span class="hide-menu">Riwayat Keputusan</span>
                        </a>
                    </li>
                @endrole
                @role('Branch_Manager')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU BM</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('branch-manager.approval') ? 'active' : '' }}"
                            href="{{ route('branch-manager.approval.index') }}" wire:navigate>
                            <span><i class="ti ti-check"></i></span>
                            <span class="hide-menu">Pusat Persetujuan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('branch-manager.approval.history') ? 'active' : '' }}"
                            href="{{ route('branch-manager.approval.history') }}" wire:navigate>
                            <span><i class="ti ti-history"></i></span>
                            <span class="hide-menu">Riwayat Persetujuan</span>
                        </a>
                    </li>
                @endrole
                @role('Field_Recovery_Officer')
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">MENU FRO</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('fro.execution.*') ? 'active' : '' }}"
                            href="{{ route('fro.execution.index') }}" wire:navigate>
                            <span><i class="ti ti-target-arrow"></i></span>
                            <span class="hide-menu">Tugas Eksekusi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->routeIs('fro.monitoring.*') ? 'active' : '' }}"
                            href="{{ route('fro.monitoring.index') }}" wire:navigate>
                            <span><i class="ti ti-zoom-money"></i></span>
                            <span class="hide-menu">Monitoring Tugas</span>
                        </a>
                    </li>
                @endrole
            </ul>
        </nav>
    </div>
</aside>
