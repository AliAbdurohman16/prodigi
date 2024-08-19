<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('/') }}">
                <?php $setting = App\Models\Setting::find(1); ?>
                <img src="{{ asset('storage/setting/' . $setting->logo_color) }}" height="50" class="logo-light-mode" alt="">
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
            <li class="{{ request()->routeIs('pages*') ? 'active' : '' }}"><a href="{{ route('pages.index') }}"><i class="ti ti-browser me-2"></i>Halaman</a></li>
            <li class="{{ request()->routeIs('services*') ? 'active' : '' }}"><a href="{{ route('services.index') }}"><i class="ti ti-file-info me-2"></i>Layanan</a></li>
            <li class="sidebar-dropdown {{ request()->is('product-types*') ? 'active' : '' }} || {{ request()->is('product-categories*') ? 'active' : '' }} || {{ request()->is('products*') ? 'active' : '' }}">
                <a href="javascript:void(0)"><i class="ti ti-apps me-2"></i>Produk</a>
                <div class="sidebar-submenu {{ request()->is('product-types*') ? 'd-block' : '' }} || {{ request()->is('product-categories*') ? 'd-block' : '' }} || {{ request()->is('products*') ? 'd-block' : '' }}">
                    <ul>
                        <li class="{{ request()->routeIs('product-types.*') ? 'active' : '' }}"><a href="{{ route('product-types.index') }}">Jenis Produk</a></li>
                        <li class="{{ request()->routeIs('product-categories.*') ? 'active' : '' }}"><a href="{{ route('product-categories.index') }}">Kategori Produk</a></li>
                        <li class="{{ request()->routeIs('products.*') ? 'active' : '' }}"><a href="{{ route('products.index') }}">Produk</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown {{ request()->is('portfolio-categories*') ? 'active' : '' }} || {{ request()->is('portfolio-posts*') ? 'active' : '' }}">
                <a href="javascript:void(0)"><i class="ti ti-camera me-2"></i>Portofolio</a>
                <div class="sidebar-submenu {{ request()->is('portfolio-categories*') ? 'd-block' : '' }} || {{ request()->is('portfolio-posts*') ? 'd-block' : '' }}">
                    <ul>
                        <li class="{{ request()->routeIs('portfolio-categories.*') ? 'active' : '' }}"><a href="{{ route('portfolio-categories.index') }}">Kategori Portofolio</a></li>
                        <li class="{{ request()->routeIs('portfolio-posts.*') ? 'active' : '' }}"><a href="{{ route('portfolio-posts.index') }}">Postingan Portofolio</a></li>
                    </ul>
                </div>
            </li>
            <li class="{{ request()->routeIs('teams*') ? 'active' : '' }}"><a href="{{ route('teams.index') }}"><i class="ti ti-users me-2"></i>Data Tim</a></li>
            <li class="sidebar-dropdown {{ request()->is('partners*') ? 'active' : '' }} || {{ request()->is('clients*') ? 'active' : '' }}">
                <a href="javascript:void(0)"><i class="ti ti-brand-gravatar me-2"></i>Logo Partner & Klient</a>
                <div class="sidebar-submenu {{ request()->is('partners*') ? 'd-block' : '' }} || {{ request()->is('clients*') ? 'd-block' : '' }}">
                    <ul>
                        <li class="{{ request()->routeIs('partners.*') ? 'active' : '' }}"><a href="{{ route('partners.index') }}">Partner</a></li>
                        <li class="{{ request()->routeIs('clients.*') ? 'active' : '' }}"><a href="{{ route('clients.index') }}">Klient</a></li>
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
            <li class="{{ request()->routeIs('setting.*') ? 'active' : '' }}"><a href="{{ route('setting.index') }}"><i class="ti ti-settings me-2"></i>Pengaturan</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->