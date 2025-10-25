<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme shadow-lg">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('theme/img/favicon/favicon.ico') }}" alt="Logo" style="width: 40px; border-radius: 50%;">
            </span>
            <div class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase" style="font-size: 1rem;">TASK
                <br>
                Management
            </div>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- <li class="menu-item {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard" style="font-size: 1rem"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'JenisIzin' ? 'active' : '' }}">
            <a href="{{ route('JenisIzin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-add" style="font-size: 1rem"></i>
                <div data-i18n="Analytics">Jenis Izin</div>
            </a>
        </li> --}}
    </ul>
</aside>