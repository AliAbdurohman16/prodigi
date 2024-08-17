<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="logo-light-mode">
                <img src="{{ asset('frontend') }}/assets/images/prodigi-color.png" class="l-dark" height="40" alt="">
                <img src="{{ asset('frontend') }}/assets/images/prodigi-white.png" class="l-light" height="40" alt="">
            </span>
            <img src="{{ asset('frontend') }}/assets/images/prodigi-white.png" class="logo-dark-mode" height="40" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            @if (Auth::user())
            <li class="list-inline-item mb-0">
                <a href="{{ route('dashboard') }}">
                    <div class="login-btn-primary"><button class="btn btn-primary">Dashboard</i></button></div>
                    <div class="login-btn-light"><button class="btn btn-light">Dashboard</i></button></div>
                </a>
            </li>
            @else
            <li class="list-inline-item mb-0">
                <a href="{{ route('login') }}">
                    <div class="login-btn-primary"><button class="btn btn-primary">Login</i></button></div>
                    <div class="login-btn-light"><button class="btn btn-light">Login</i></button></div>
                </a>
            </li>
            @endif
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-light">
                <li><a href="{{ route('/') }}" class="sub-menu-item">Beranda</a></li>
                <li><a href="#about" class="sub-menu-item">Tentang</a></li>
                <li><a href="#services" class="sub-menu-item">Layanan</a></li>
                <li><a href="#teams" class="sub-menu-item">Tim Kerja</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="sub-menu-item">Portofolio</a></li>
                <li><a href="#partner" class="sub-menu-item">Partner</a></li>
                <li><a href="#client" class="sub-menu-item">Client</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->