@extends('layouts.backend.main')

@section('title', 'Profil')

@section('css')
<!-- Datatables -->
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css"/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">@yield('title')</h5>

            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="#">@yield('title')</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Ubah Data</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">

                        <div class="mt-4 d-flex justify-content-center align-items-center">
                            @if ($profile->image == 'default/user.png')
                                <img src="{{ $profile->image }}" class="img-preview avatar float-md-left avatar-medium rounded-circle shadow me-md-4" alt="avatar" />
                            @else
                                <img src="{{ asset('storage/profile/' . $profile->image ) }}" class="img-preview avatar float-md-left avatar-medium rounded-circle shadow me-md-4" alt="avatar">
                            @endif

                            <div class="mt-md-4 mt-3">
                                <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button href="submit" class="btn btn-outline-primary mt-2">Delete</button>
                                </form>
                            </div>
                        </div>

                        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Foto Profil</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="image" class="fea icon-sm icons"></i>
                                            <input type="file" class="form-control ps-5 @error('image') is-invalid @enderror" name="image" id="image" accept="image/*" onchange="previewImg()"/>
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control ps-5 @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{ $profile->name }}" required autocomplete="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control ps-5 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $profile->email }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div><!--end container-->
@endsection

@section('javascript')
<script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script>

    // function preview image
    function previewImg() {
        const logo = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        const fileImg = new FileReader();
        fileImg.readAsDataURL(logo.files[0]);
        fileImg.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    // show dialog success
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