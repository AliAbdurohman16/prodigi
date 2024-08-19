@extends('layouts.backend.main')

@section('title', 'Klient')

@section('css')
<!-- Datatables -->
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/data-tables/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('backend') }}/assets/libs/data-tables/css/responsive.bootstrap5.min.css">
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
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">list</li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <div class="d-grid gap-2 d-md-flex">
                    <button class="btn btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#add-modal">
                        Tambah Data +
                    </button>
                </div>
                <div class="table-responsive shadow rounded">
                    <div class="card-body">
                        <table class="table table-center bg-white mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center border-bottom p-3">No</th>
                                    <th class="border-bottom p-3">Foto</th>
                                    <th class="border-bottom p-3">Tautan</th>
                                    <th class="border-bottom p-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start -->
                                @foreach($clients as $client)
                                    <tr>
                                        <th class="text-center p-3" style="width: 5%;">{{ $loop->iteration }}</th>
                                        <td class="p-3"><img src="{{ asset('storage/client/' . $client->image) }}" width="70px" class="img-fluid" alt="image"></td>
                                        <td class="p-3">{{ asset('storage/client/' . $client->image) }}</td>
                                        <td style="width: 25%;">
                                            <button type="button" class="btn btn-warning btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#edit-modal{{ $client->id }}"><i class="fa-solid fa-pen"></i> Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm mb-2 btn-delete" data-id="{{ $client->id }}"><i class="fa-solid fa-trash"></i> Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- End -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div><!--end container-->

<!-- Modal Add -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="LoginForm-title">Tambah Data</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <Form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-12 mb-2 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('default/image.png') }}" width="200px" alt="image" class="img-thumbnail img-preview">
                                    </div>
                                    <div class="col-12">
                                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" onchange="previewImg()">
                                        @error('image')
                                            <span class="invalid-feedback errorimage" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </Form>
        </div>
    </div>
</div>
<!-- Modal Add End -->

<!-- Modal Edit -->
@foreach ($clients as $client)
<div class="modal fade" id="edit-modal{{ $client->id }}" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="LoginForm-title">Edit Data</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <Form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-12 mb-2 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('storage/client/' . $client->image) }}" width="200px" alt="image" class="img-thumbnail img-preview-edit">
                                    </div>
                                    <div class="col-12">
                                        <input type="file" name="image" id="image-edit" class="form-control @error('image') is-invalid @enderror" accept="image/*" onchange="previewImgEdit()">
                                        @error('image')
                                            <span class="invalid-feedback errorimage" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </Form>
        </div>
    </div>
</div>
@endforeach
<!-- Modal Edit End -->
@endsection

@section('javascript')
<!-- Datatables -->
<script src="{{ asset('backend') }}/assets/libs/data-tables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/data-tables/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/data-tables/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/data-tables/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

<script>
    // show datatable with search and pagination
    $(document).ready(function() {
        $('#table').DataTable();
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

    // function preview image edit
    function previewImgEdit() {
        const imageEdit = document.querySelector('#image-edit');
        const imgPreviewEdit = document.querySelector('.img-preview-edit');
        const fileImgEdit = new FileReader();
        fileImgEdit.readAsDataURL(imageEdit.files[0]);
        fileImgEdit.onload = function(e) {
            imgPreviewEdit.src = e.target.result;
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

    // function delete
    $(".btn-delete").click(function() {
        var id = $(this).data("id");
        Swal.fire({
            title: 'Hapus',
            text: "Apakah anda yakin ingin menghapus?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "clients/" + id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        swal.fire({
                            icon: "success",
                            title: "Berhasil",
                            text: response.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    },
                });
            }
        })
    });

</script>
@endsection