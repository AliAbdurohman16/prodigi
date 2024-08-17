@extends('layouts.frontend.main')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('frontend/assets/images/bg-detail.jpeg') }}') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title text-white title-dark mb-0"> Tim Kerja </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Prodigi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tim Kerja</li>
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
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center border-0">
                    <div class="position-relative">
                        <img src="{{ asset('storage/team/' . $team->image) }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                    </div>
                    <div class="card-body py-3 px-0 content">
                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">{{ $team->name }}</a></h5>
                        <small class="designation text-muted">{{ $team->position }}</small>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach

            <div class="d-flex justify-content-center mt-4">
                <ul class="pagination mb-0">
                    @if ($teams->lastPage() > 1)
                        <li class="page-item {{ ($teams->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $teams->url(1) }}">Previous</a>
                        </li>
                        @for ($i = 1; $i <= $teams->lastPage(); $i++)
                            <li class="page-item {{ ($teams->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $teams->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ ($teams->currentPage() == $teams->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $teams->url($teams->currentPage()+1) }}">Next</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
@endsection