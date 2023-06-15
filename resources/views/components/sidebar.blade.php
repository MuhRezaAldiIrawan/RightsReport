<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mt-3 ml-3 align-content-center justify-content-center">
        <a href="index.html" class="app-brand-link ">
            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>

        <li class="menu-item {{ request()->is('new_report') ? 'active' : '' }}">
            <a href="/new_report" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-alt-add"></i>
                <div data-i18n="Analytics">Laporan Baru</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('proggress_report') ? 'active' : '' }}">
            <a href="/proggress_report" class="menu-link">
                <i class="menu-icon tf-icons bx bx-walk"></i>
                <div data-i18n="Analytics">Laporan Berjalan</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('histori_report') ? 'active' : '' }}">
            <a href="/histori_report" class="menu-link">
                <i class="menu-icon tf-icons bx bx-history"></i>
                <div data-i18n="Analytics">Riwayat Laporan</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase"><span class="menu-header-text">Informasi</span></li>

        <li class="menu-item {{ request()->is('kategori') ? 'active' : '' }}">
            <a href="/kategori" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Kategori</div>
            </a>
        </li>
    </ul>
</aside>
