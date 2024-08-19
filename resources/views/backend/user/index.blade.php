@extends('layouts.backend.main')

@section('title', 'Pengguna')

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
                    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3 btn-sm">
                        Tambah Data +
                    </a>
                </div>
                <div class="table-responsive shadow rounded">
                    <div class="card-body">
                        <table class="table table-center bg-white mb-0" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center border-bottom p-3">No</th>
                                    <th class="border-bottom p-3">Foto</th>
                                    <th class="border-bottom p-3">Nama</th>
                                    <th class="border-bottom p-3">Email</th>
                                    <th class="border-bottom p-3">Role</th>
                                    <th class="border-bottom p-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start -->
                                @foreach($users as $user)
                                    <tr>
                                        <th class="text-center p-3" style="width: 5%;">{{ $loop->iteration }}</th>
                                        <td>
                                            @if ($user->image == 'default/user.png')
                                                <img src="{{ asset($user->image) }}" width="70px" class="img-fluid" alt="image-users">
                                            @else
                                                <img src="{{ asset('storage/users/' . $user->image) }}" width="70px" class="img-fluid" alt="image-users">
                                            @endif
                                        </td>
                                        <td class="p-3">{{ $user->name }}</td>
                                        <td class="p-3">{{ $user->email }}</td>
                                        <td>{{ $user->hasRole('admin') ? 'Admin' : 'Superadmin' }}</td>
                                        <td style="width: 5%;">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm mb-2 btn-delete" data-id="{{ $user->id }}"><i class="fa-solid fa-trash"></i> Hapus</button>
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
                    url: "users/" + id,
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