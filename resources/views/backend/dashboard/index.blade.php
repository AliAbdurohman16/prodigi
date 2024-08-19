@extends('layouts.backend.main')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Selamat Datang, {{ Auth::user()->name }}!</h6>
                <h5 class="mb-0">@yield('title')</h5>
            </div>
        </div>
    
        <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
            @if (Auth::user()->hasRole('superadmin'))
            <div class="col mt-4">
                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-file-info fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Layanan</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $services }}"></span></p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
            @endif
            
            <div class="col mt-4">
                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-apps fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Produk</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $products }}"></span></p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
            
            <div class="col mt-4">
                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-camera fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Portofolio</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $portfolios }}"></span></p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
            
            <div class="col mt-4">
                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-users fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Partner</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $partners }}"></span></p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
            
            <div class="col mt-4">
                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-users fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Klien</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $clients }}"></span></p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</div><!--end container-->
@endsection