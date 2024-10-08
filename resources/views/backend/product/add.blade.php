@extends('layouts.backend.main')

@section('title', 'Tambah Produk')

@section('css')
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/select2/select2.min.css"/>
<link rel="stylesheet" href="{{ asset('backend') }}/assets/css/select2.css"/>
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/summernote/summernote.min.css"/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">@yield('title')</h5>

            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="{{ route('products.index') }}">@yield('title')</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Tambah Data</li>
                </ul>
            </nav>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-warning btn-sm mt-4"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="container">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Foto <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-3 mb-2 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('default/image.png') }}" width="200px" alt="image" class="img-thumbnail img-preview">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" onchange="previewImg()">
                                                @error('image')
                                                    <span class="invalid-feedback errorimage" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nama <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{ old('name') }}" autocomplete="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis <span class="text-danger">*</span></label>
                                        <select class="form-control select2-type @error('product_type_id') is-invalid @enderror" name="product_type_id" id="product_type_id">
                                            <option value="">Pilih Jenis</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}" {{ old('product_type_id') == $type->id ? 'selected' : '' }}>
                                                    {{ $type->title  }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product_category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Kategori <span class="text-danger">*</span></label>
                                        <select class="form-control select2-category @error('product_category_id') is-invalid @enderror" name="product_category_id" id="product_category_id">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('product_category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title  }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product_category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Harga <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Harga" name="price" value="{{ old('price') }}" autocomplete="price">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
                                        <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Deskripsi Singkat">{{ old('short_description') }}</textarea>
                                        @error('short_description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi  <span class="text-danger">*</span></label>
                                        <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary w-100">Simpan</button>
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
<script src="{{ asset('backend') }}/assets/libs/select2/select2.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/summernote/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2-category').select2();
        $('.select2-type').select2();
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Tulis sesuatu di sini...',
            tabsize: 2,
        });
    });

    // function preview image
    function previewImg() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        const fileImg = new FileReader();
        fileImg.readAsDataURL(image.files[0]);
        fileImg.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
@endsection