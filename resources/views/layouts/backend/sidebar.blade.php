<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('/') }}">
                <img src="{{ asset('default/prodigi-color.png') }}" height="50" class="logo-light-mode" alt="">
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
            <li><a href=""><i class="ti ti-file-info me-2"></i>Halaman</a></li>
            <li><a href=""><i class="ti ti-apps me-2"></i>Produk</a></li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-camera me-2"></i>Portofolio</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('portfolio-categories.index') }}">Kategori Portofolio</a></li>
                        <li><a href="">Postingan Portofolio</a></li>
                    </ul>
                </div>
            </li>
            <li><a href=""><i class="ti ti-users me-2"></i>Tim</a></li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-brand-gravatar me-2"></i>Logo Partner & Client</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="">Partner</a></li>
                        <li><a href="">Client</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-users me-2"></i>Pelanggan & Pengguna</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="">Data Pelanggan</a></li>
                        <li><a href="">Data Pengguna</a></li>
                    </ul>
                </div>
            </li>
            <li><a href=""><i class="ti ti-user me-2"></i>Profil</a></li>
            <li><a href=""><i class="ti ti-key me-2"></i>Ganti Kata Sandi</a></li>
            <li><a href=""><i class="ti ti-settings me-2"></i>Pengaturan</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->