@extends('layouts.frontend.main')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/assets/images/bg-detail.jpg') }}') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title text-white title-dark mb-0"> Portofolio </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Prodigi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portofolio</li>
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


<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">All</li>
                        @foreach ($categories as $category)
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="{{ $category->slug }}">{{ $category->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div id="grid" class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["{{ $post->Category->slug }}"]'>
                <div class="card blog border-0 work-container work-primary work-classic shadow rounded-md overflow-hidden">
                    <img src="{{ asset('storage/portfolio/' . $post->image) }}" class="img-fluid work-image" alt="image">
                    <div class="card-body">
                        <div class="content">
                            <a href="javascript:void(0)" class="badge badge-link bg">{{ $post->Category->title }}</a>
                            <h5 class="mt-3"><a href="{{ route('portfolio.show', $post->id) }}" class="text-dark title">{{ $post->title }}</a></h5>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
@endsection

@section('javascript')
<script src="{{ asset('frontend') }}/assets/libs/shufflejs/shuffle.min.js"></script>
@endsection