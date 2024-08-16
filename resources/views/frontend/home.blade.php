@extends('layouts.frontend.main')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 pb-0 bg-primary d-table w-100" style="background: url('{{ asset('frontend') }}/assets/images/bg.png') center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6">
                    <div class="title-heading mb-md-5 pb-md-5">
                        <h4 class="text-white-50">Selamat Datang Di Layanan Kami</h4>
                        <h4 class="heading text-white mb-3 title-dark">Integrator IT Profesional </h4>
                        <p class="para-desc text-white-50">Kita siap memberikan solusi IT yang keren dan mudah untuk semua kebutuhan Anda.</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-light">Gabung Sekarang</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5 mt-sm-0">
                    <img src="{{ asset('frontend') }}/assets/images/hero-with-laptop.png" class="img-fluid" alt="hero">
                </div>
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    
    <section class="section">
        <!-- About Start -->
        <div class="container" id="about">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                <div class="card-body p-0">
                                    <img src="{{ asset('frontend') }}/assets/images/1.jpg" class="img-fluid" alt="work-image">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('frontend') }}/assets/images/2.jpg" class="img-fluid" alt="work-image">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('frontend') }}/assets/images/3.jpg" class="img-fluid" alt="work-image">
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                    <div class="ms-lg-4">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Tentang Kami</h4>
                            <p class="text-muted para-desc">PT Prodigi Solusi Integrasi (Prodigi) merupakan perusahaan penyedia layanan, solusi dan installer atau integrator produk inovasi teknologi informasi yang berdiri pada tahun 2022.</p>
                            <p class="text-muted para-desc">PT Prodigi Solusi integrasi berkantor pusat di Kota Depok dekat perbatasan Kota Tangerang selatan</p>
                            <p class="text-muted para-desc">Walaupun secara legal baru berdiri tahun 2022, namun sebelum itu berpengalaman sebagai usaha perorangan di bidang IT dari tahun 2008 (sekitar 21 tahun) konsisten bergelut di bidang TIK, dan Instalasi ME</p>
                            <p class="text-muted para-desc">Saat ini Prodigi telah melayani 70 klien B2B di sekitaran DKI Jakarta dan Jawa barat. Seiring perkembangan perusahaan, sekarang Prodigi tidak hanya menghadirkan layanan jasa Instalasi, tetapi juga dapat membuat aplikasi serta mikrokontroler custom sesuai kebutuhan customer dilapangan.</p>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <!-- Services Start -->
        <div class="container mt-100 mt-60" id="services">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Layanan</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-server-network"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Jaringan Komputer & Keamanan Cyber</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-server-network"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-crosshairs"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Sistem Akses Control, Keamanan dan Absensi</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-crosshairs"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-hdd"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Solusi Otomasi perangkat keras</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-hdd"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-monitor"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Pembuatan Aplikasi Web,Desktop, Mobile</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-monitor"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-processor"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Instalasi Perangkat Keras dan Lunak</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-processor"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Maintenance Perangkat Keras dan Lunak</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-users-alt"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-file-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Pembuatan Perangkat Keras Custom</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-file-alt"></i>
                        </span>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-robot"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>⁠Implementasi Kecerdasan Buatan (AI) & Machine Learning</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-robot"></i>
                        </span>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    
    <!-- Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="p-4 rounded shadow bg-primary bg-gradient position-relative" style="z-index: 1;">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="progress-box">
                            <h6 class="title text-white">Jaringan Komputer & Keamanan Cyber</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:84%;">
                                    <div class="progress-value d-block text-white-50 h6">84%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-white">Sistem Akses Control</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:75%;">
                                    <div class="progress-value d-block text-white-50 h6">75%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-white">Perangkat Keras Custom</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:79%;">
                                    <div class="progress-value d-block text-white-50 h6">79%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="progress-box mt-4 mt-sm-0">
                            <h6 class="title text-white">Aplikasi Web, Desktop, Mobile</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:84%;">
                                    <div class="progress-value d-block text-white-50 h6">84%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-white">Kecerdasan Buatan (AI)</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:75%;">
                                    <div class="progress-value d-block text-white-50 h6">75%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-white">Pekerjaan Sipil Pendukung</h6>
                            <div class="progress title-bg-dark" style="height: 10px; padding: 3px">
                                <div class="progress-bar position-relative bg-black" style="width:79%;">
                                    <div class="progress-value d-block text-white-50 h6">79%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                    </div><!--end col-->
                </div><!--end row -->
            </div>

            <div class="row mt-4 pt-2 position-relative" id="counter" style="z-index: 1;">
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="{{ asset('frontend') }}/assets/images/illustrator/Asset190.svg" class="avatar avatar-small" alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value" data-target="96">96</span>%</h2>
                        <h6 class="counter-head text-muted">Happy Client</h6>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="{{ asset('frontend') }}/assets/images/illustrator/Asset192.svg" class="avatar avatar-small" alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value" data-target="674">674</span>+</h2>
                        <h6 class="counter-head text-muted">Job Placement</h6>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="{{ asset('frontend') }}/assets/images/illustrator/Asset187.svg" class="avatar avatar-small" alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value" data-target="97">97</span>%</h2>
                        <h6 class="counter-head text-muted">Project Complete</h6>
                    </div><!--end counter box-->
                </div>
            </div><!--end row-->
            <div class="feature-posts-placeholder bg-light"></div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class="text-primary">Proses Kerja</h6>
                        <h4 class="title mb-4">Bagaimana cara kami bekerja?</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-head-side d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Diskusi Gratis</h5>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-presentation-edit d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Perancangan Solusi</h5>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-list-ul d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">List Daftar Kebutuhan</h5>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-process d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Implementasi</h5>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-clipboard-notes d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Test Comisioning</h5>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-image-check d-block rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Reporting</h5>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60" id="teams">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Tim Kerja</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/syamsul.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sam</a></h5>
                            <small class="designation text-muted">CEO</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/kesy.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Kesy</a></h5>
                            <small class="designation text-muted">Finance</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/chiko.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Chiko</a></h5>
                            <small class="designation text-muted">Project Manager</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/ali.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ali</a></h5>
                            <small class="designation text-muted">Fullstack Developer</small>
                        </div>
                    </div>
                </div><!--end col-->   

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/sandi.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sandi</a></h5>
                            <small class="designation text-muted">Site Surveyor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/tomy.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Tomy</a></h5>
                            <small class="designation text-muted">Site Supervisor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/bili.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Bili</a></h5>
                            <small class="designation text-muted">Engineer</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center border-0">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/teams/andre.jpeg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Andre</a></h5>
                            <small class="designation text-muted">Engineer</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
<!-- 
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <h6 class="text-primary">Blog</h6>
                        <h4 class="title mb-4 mb-lg-0">Reads Our Latest <br> News & Blog</h4>
                    </div>
                </div> -->
                <!--end col-->

                <!-- <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <p class="text-muted mb-0 mx-auto para-desc">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div> -->
                <!--end col-->
            <!-- </div> -->
            <!--end row-->

            <!-- <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div> -->
                <!--end col-->
                
                <!-- <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div> -->
                <!--end col-->
                
                <!-- <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/blog/03.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                        </div>
                    </div>
                </div> -->
                <!--end col-->
            <!-- </div> -->
            <!--end row-->
        <!-- </div> -->
        <!--end container-->
    <!-- </section> -->
    <!--end section-->

    <!-- Gallery Start -->
    <section class="section" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Galeri</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/gallery/1.jpeg" class="card-img-top rounded-top" alt="Galeri">
                            <div class="overlay rounded-top"></div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/gallery/2.jpeg" class="card-img-top rounded-top" alt="Galeri">
                            <div class="overlay rounded-top"></div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend') }}/assets/images/gallery/3.jpeg" class="card-img-top rounded-top" alt="Galeri">
                            <div class="overlay rounded-top"></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Gallery End -->

    <!-- Partners & Client start -->
    <section class="section bg-light" id="partner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Partner</h4>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/zkteco.png" class="avatar" width="80px" height="50px" alt="partner">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/unv.png" class="avatar" width="80px" height="50px" alt="partner">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/mikrotik.png" class="avatar" width="100px" height="50px" alt="partner">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/huawei-enterprise.png" class="avatar" width="150px" height="50px" alt="partner">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/dell.png" class="avatar" width="70px" height="70px"alt="partner">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/hikvision.png" class="avatar" width="140px" height="40px" alt="partner">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/partner/cisco.png" class="avatar" width="80px" height="60px"alt="partner">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Client</h4>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/ciputra.png" class="avatar" width="100px" height="80px" alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/dapen-telkom.png" class="avatar" width="130px" height="100px" alt="client">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/logo-telkom-indonesia.png" class="avatar" width="100px" height="75px" alt="client">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/ind-power.png" class="avatar" width="100px" height="100px" alt="client">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/pt-system-integrators.png" class="avatar" width="100px" height="100px"alt="client">
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/kemenhub.png" class="avatar" width="100px" height="90px" alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/bangunindo.png" class="avatar" width="100px" height="60px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/jalesveva-jayamahe.png" class="avatar" width="100px" height="100px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/korps-brimob.png" class="avatar" width="70px" height="80px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/oli-ebike-systems.png" class="avatar" width="100px" height="100px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/paradigm.png" class="avatar" width="100px" height="100px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/telkom-property.png" class="avatar" width="120px" height="100px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/totalpersadaindonesia.png" class="avatar" width="100px" height="70px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/united-tractors-logo.png" class="avatar" width="140px" height="100px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/bumn.png" class="avatar" width="150px" height="70px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/bksda.png" class="avatar" width="150px" height="70px"alt="client">
                </div><!--end col-->

                <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                    <img src="{{ asset('frontend') }}/assets/images/client/cnlc.png" class="avatar" width="100px" height="100px"alt="client">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Partners & Client End -->
@endsection