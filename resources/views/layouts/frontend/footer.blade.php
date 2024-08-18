<!-- Footer Start -->
<footer class="footer">    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2 mb-4">
                            <a href="{{ route('/') }}" class="logo-footer">
                                <img src="{{ asset('frontend') }}/assets/images/prodigi-white.png" height="50" alt="logo">
                            </a>
                            <p class="mt-4">Integrator IT Profesional siap memberikan solusi IT yang keren dan mudah untuk semua kebutuhan Anda.</p>
                            <!-- <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul>end icon -->
                        </div><!--end col-->
                
                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 mb-4">
                            <h5 class="footer-head">Perusahaan</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="{{ route('page.index', 'tentang') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Tentang</a></li>
                                <li><a href="{{ route('product.index') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Produk</a></li>
                                <li><a href="{{ route('portfolio.index') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Portofolio</a></li>
                            </ul>
                        </div><!--end col-->
                
                        <div class="col-lg-6 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 mb-4">
                            <h5 class="footer-head">Layanan</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <?php $services = App\Models\Service::all(); ?>
                                @foreach ($services as $service)
                                <li><a href="{{ route('service.index', $service->slug) }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Kontak</h5>
                            <p class="mt-4">Email : admin@prodigisi.co.id</p>
                            <p class="mt-4">Telepon : +62 812-9398-8251</p>
                            <p class="mt-4">Whatsapp : +62 812-9398-8251</p>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-start">
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Prodigi. Created with <i class="mdi mdi-heart text-danger"></i> by PT Prodigi Solusi Integrasi (Prodigi).</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->