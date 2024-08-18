@extends('layouts.frontend.main')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/assets/images/bg-detail.jpeg') }}') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title text-white title-dark mb-0"> Kategori - {{ $category->title }} </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Prodigi</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ul>
            </nav>
        </div>
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start Products -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12 mr-2">
                <div class="row">
                    @if(count($products) > 0)
                    @foreach ($products as $product)
                    <div class="col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 shadow position-relative">
                            <ul class="label list-unstyled mb-0">
                                <li><a href="{{ route('product.type', $product->Type->slug) }}" class="badge badge-link rounded-pill bg-success">{{ $product->Type->title }}</a></li>
                                <li><a href="{{ route('product.category', $product->Category->slug) }}" class="badge badge-link rounded-pill bg-primary">{{ $product->Category->title }}</a></li>
                            </ul>
                            <div class="row align-items-center g-0">
                                <div class="col-lg-4 col-md-6">
                                    <div class="shop-image position-relative overflow-hidden">
                                        <a href="{{ route('product.show', $product->slug) }}"><img src="{{ asset('storage/product/' . $product->image) }}" class="img-fluid" alt="product"></a>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-8 col-md-6">
                                    <div class="card-body content p-4">
                                        <a href="{{ route('product.show', $product->slug) }}" class="text-dark product-name h4">{{ $product->name }}</a>
                                        <p class="para-desc text-muted mb-1">{{ $product->short_description }}</p>
                                    </div>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end blog post-->
                    </div><!--end col-->
                    @endforeach
                    @else
                        <h3 class="text-center">Tidak ada produk.</h3>
                    @endif

                    <!-- PAGINATION START -->
                    <div class="col-12 mt-4 pt-2">
                        <ul class="pagination justify-content-center mb-0">
                            @if ($products->lastPage() > 1)
                                <li class="page-item {{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->url(1) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-item {{ ($products->currentPage() == $i) ? ' active' : '' }}">
                                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->url($products->currentPage()+1) }}">Next</a>
                                </li>
                            @endif
                        </ul>
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar">
                    <div class="card-body p-0">
                        <!-- Types -->
                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Jenis</h5>
                            <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                @foreach ($types as $type)
                                <li><a href="{{ route('product.type', $type->slug) }}">{{ $type->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Types -->

                        <!-- Categories -->
                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                @foreach ($categories as $category)
                                <li><a href="{{ route('product.category', $category->slug) }}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Categories -->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Products -->
@endsection