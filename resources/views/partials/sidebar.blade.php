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
        <!-- Transaksi Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-money-bill-trend-up"></i>
                <div data-i18n="Layouts">Transaksi Data</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('absensi.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Absensi / Kehadiran</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('terimapotong.index') }}" class="menu-link">
                        <div data-i18n="Without navbar">Penerimaan dan Potongan Lain</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('lembur.index') }}" class="menu-link">
                        <div data-i18n="Container">Lembur Karyawan</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Proses Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-print"></i>
                <div data-i18n="Layouts">Proses data</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Without menu">Penghasilan / Gaji Bulan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Without navbar">BackUp Data Gaji</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Container">Proses Iuran Karyawan JSMR</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Container">Cek Hasil Proses Gaji Bulanan</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Pelaporan Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-file"></i>
                <div data-i18n="Layouts">Pelaporan data</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Without menu">Rekapitulasi dan Rincian Penghasilan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Without navbar">Jamsostek dan Lapor Instansi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Container">PPA + RAB + PP Gaji</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Container">Amplop Surat Ke Instansi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('slipgaji.index') }}" class="menu-link">
                        <div data-i18n="Container">Slip Gaji</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Pemeliharaan Data -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-laptop-file"></i>
                <div data-i18n="Layouts">Pemeliharaan data</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('karyawan.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Data Karyawan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('refrensi.index') }}" class="menu-link">
                        <div data-i18n="Without navbar">Tabel Referensi</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Lainnya -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa fa-ellipsis-h"></i>
                <div data-i18n="Layouts">Lainnya</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('remunerasi.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Tabel Remunarasi Tunjangan</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- end of lainnya -->

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Account</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="fa-solid fa-user menu-icon "></i>
                <div data-i18n="Layouts">Account</div>
            </a>
        </li>
    </ul>

</aside>
<!-- / Menu -->
