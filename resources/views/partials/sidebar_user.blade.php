<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <!-- <span class="app-brand-logo demo"> -->
            <img src="../../../assets/img/logo-jpt1.png" height="40" width="160" alt="Logo 1" />
            <!-- </span> -->
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-house-chimney"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">JASAMARGA</span>
        </li>

        <!-- Pelaporan Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-file"></i>
                <div data-i18n="Layouts">Pelaporan data</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('slipgaji.index') }}" class="menu-link">
                        <div data-i18n="Container">Slip Gaji</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>
<!-- / Menu -->
