@extends('layouts.frontend.main')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/assets/images/bg-detail.jpeg') }}') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title text-white title-dark mb-0"> Portofolio Detail </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Prodigi</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portofolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
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

<section class="bg-half">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-title">
                    <div class="text-center">
                        <h4 class="title mb-4">{{ $post->title }}</h4>
                        <img src="{{ asset('storage/portfolio/' . $post->image) }}" class="img-fluid rounded-md shadow-md" alt="image">
                    </div>
                    <div class="text-muted mb-0 mt-4">
                        {!! $post->description !!}
                    </div> 
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
@endsection