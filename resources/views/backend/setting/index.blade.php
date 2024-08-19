@extends('layouts.backend.main')

@section('title', 'Pengaturan')

@section('css')
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/summernote/summernote.min.css"/>
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css"/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">@yield('title')</h5>

            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="{{ route('setting.index') }}">@yield('title')</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="container">
                    <div class="card-body">
                        <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Logo Berwarna <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->logo_color) }}" width="200px" alt="image" class="img-thumbnail logo-color">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="logo_color" id="logo_color" class="form-control @error('logo_color') is-invalid @enderror" accept="image/*" onchange="previewLogoColor()">
                                                @error('logo_color')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Logo Putih <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->logo_white) }}" width="200px" alt="image" class="img-thumbnail logo-white">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="logo_white" id="logo_white" class="form-control @error('logo_white') is-invalid @enderror" accept="image/*" onchange="previewLogoWhite()">
                                                @error('logo_white')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Judul <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Judul" name="title" value="{{ $setting->title }}" autocomplete="title">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Deskrispsi <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('desc') is-invalid @enderror" placeholder="Deskrispsi" name="desc" value="{{ $setting->desc }}" autocomplete="desc">
                                        @error('desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Hero <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->hero) }}" width="200px" alt="image" class="img-thumbnail hero">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="hero" id="hero" class="form-control @error('hero') is-invalid @enderror" accept="image/*" onchange="previewHero()">
                                                @error('hero')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Foto Tentang 1 <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->about_image_1) }}" width="200px" alt="image" class="img-thumbnail about-image-1">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="about_image_1" id="about_image_1" class="form-control @error('about_image_1') is-invalid @enderror" accept="image/*" onchange="previewAboutImage1()">
                                                @error('about_image_1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Foto Tentang 2 <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->about_image_2) }}" width="200px" alt="image" class="img-thumbnail about-image-2">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="about_image_2" id="about_image_2" class="form-control @error('about_image_2') is-invalid @enderror" accept="image/*" onchange="previewAboutImage2()">
                                                @error('about_image_2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Foto Tentang 3 <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/setting/' . $setting->about_image_3) }}" width="200px" alt="image" class="img-thumbnail about-image-3">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="about_image_3" id="about_image_3" class="form-control @error('about_image_3') is-invalid @enderror" accept="image/*" onchange="previewAboutImage3()">
                                                @error('about_image_3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Deskrispsi Tentang  <span class="text-danger">*</span></label>
                                        <textarea name="about_desc" id="summernote" class="form-control @error('about_desc') is-invalid @enderror" placeholder="Deskrispsi Tentang">{{ $setting->about_desc }}</textarea>
                                        @error('about_desc')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Happy Client <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('happy_client') is-invalid @enderror" placeholder="Happy Client" name="happy_client" value="{{ $setting->happy_client }}" autocomplete="happy_client">
                                        @error('happy_client')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job Placement <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('job_placement') is-invalid @enderror" placeholder="Job Placement" name="job_placement" value="{{ $setting->job_placement }}" autocomplete="job_placement">
                                        @error('job_placement')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Project Complete <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('project_complete') is-invalid @enderror" placeholder="Project Complete" name="project_complete" value="{{ $setting->project_complete }}" autocomplete="project_complete">
                                        @error('project_complete')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Footer Deskrispsi <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('footer_desc') is-invalid @enderror" placeholder="Footer Deskrispsi" name="footer_desc">{{ $setting->footer_desc }}</textarea>
                                        @error('footer_desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $setting->email }}" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Telepon <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('telepon') is-invalid @enderror" placeholder="Telepon" name="telepon" value="{{ $setting->telepon }}" autocomplete="telepon">
                                        @error('telepon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Whatsapp <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('whatsapp') is-invalid @enderror" placeholder="Whatsapp" name="whatsapp" value="{{ $setting->whatsapp }}" autocomplete="whatsapp">
                                        @error('whatsapp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Link Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" placeholder="Link Facebook" name="facebook" value="{{ $setting->facebook }}" autocomplete="facebook">
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Link Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" placeholder="Link Instagram" name="instagram" value="{{ $setting->instagram }}" autocomplete="instagram">
                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Link Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" placeholder="Link Twitter" name="twitter" value="{{ $setting->twitter }}" autocomplete="twitter">
                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Link Linkedin</label>
                                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" placeholder="Link Linkedin" name="linkedin" value="{{ $setting->linkedin }}" autocomplete="linkedin">
                                        @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" class="btn btn-primary w-100">Simpan</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</div><!--end container-->
@endsection

@section('javascript')
<script src="{{ asset('backend') }}/assets/libs/summernote/summernote.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Tulis sesuatu di sini...',
            tabsize: 2,
        });
    });

    // function preview logo color
    function previewLogoColor() {
        const logoColor = document.querySelector('#logo_color');
        const logoColorPreview = document.querySelector('.logo-color');
        const fileLogoColor = new FileReader();
        fileLogoColor.readAsDataURL(logoColor.files[0]);
        fileLogoColor.onload = function(e) {
            logoColorPreview.src = e.target.result;
        }
    }

    // function preview logo white
    function previewLogoWhite() {
        const logoWhite = document.querySelector('#logo_white');
        const logoWhitePreview = document.querySelector('.logo-white');
        const fileLogoWhite = new FileReader();
        fileLogoWhite.readAsDataURL(logoWhite.files[0]);
        fileLogoWhite.onload = function(e) {
            logoWhitePreview.src = e.target.result;
        }
    }

    // function preview hero
    function previewHero() {
        const hero = document.querySelector('#hero');
        const heroPreview = document.querySelector('.hero');
        const fileHero = new FileReader();
        fileHero.readAsDataURL(hero.files[0]);
        fileHero.onload = function(e) {
            heroPreview.src = e.target.result;
        }
    }

    // function preview about image 1
    function previewAboutImage1() {
        const aboutImage1 = document.querySelector('#about_image_1');
        const aboutImage1Preview = document.querySelector('.about-image-1');
        const fileAboutImage1 = new FileReader();
        fileAboutImage1.readAsDataURL(aboutImage1.files[0]);
        fileAboutImage1.onload = function(e) {
            aboutImage1Preview.src = e.target.result;
        }
    }

    // function preview about image 2
    function previewAboutImage2() {
        const aboutImage2 = document.querySelector('#about_image_2');
        const aboutImage2Preview = document.querySelector('.about-image-2');
        const fileAboutImage2 = new FileReader();
        fileAboutImage2.readAsDataURL(aboutImage2.files[0]);
        fileAboutImage2.onload = function(e) {
            aboutImage2Preview.src = e.target.result;
        }
    }

    // function preview about image 3
    function previewAboutImage3() {
        const aboutImage3 = document.querySelector('#about_image_3');
        const aboutImage3Preview = document.querySelector('.about-image-3');
        const fileAboutImage3 = new FileReader();
        fileAboutImage3.readAsDataURL(aboutImage3.files[0]);
        fileAboutImage3.onload = function(e) {
            aboutImage3Preview.src = e.target.result;
        }
    }

    @if (Session::has('message'))
        swal.fire({
            icon: "success",
            title: "Berhasil",
            text: "{{ Session::get('message') }}",
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        });
    @endif
</script>
@endsection