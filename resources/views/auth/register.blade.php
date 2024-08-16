@extends('layouts.auth.main')

@section('content')
<!-- Hero Start -->
<section class="bg-home shadow d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <a href="{{ route('/') }}"><img src="{{ asset('default/prodigi-color.png') }}" class="mb-4 d-block mx-auto" height="80" alt="logo"></a>
                        <h5 class="mb-3 text-center">Daftar</h5>

                        <div class="form-floating mb-2">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="name">Nama</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-2">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                            <label for="email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Kata sandi" required autocomplete="new-password">
                            <label for="password">Kata sandi</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password-confirm" placeholder="Konfirmasi kata sandi" required autocomplete="new-password">
                            <label for="password-confirm">Konfirmasi kata sandi</label>
                        </div>
        
                        <button class="btn btn-primary w-100" type="submit">Masuk</button>

                        <div class="col-12 text-center mt-3">
                            <p class="mb-0 mt-3"><small class="text-dark me-2">Sudah punya akun ?</small> <a href="{{ route('login') }}" class="text-dark fw-bold">Login</a></p>
                        </div>
                        <!--end col-->

                        <p class="mb-0 text-muted mt-3 text-center">© <script>document.write(new Date().getFullYear())</script> Prodigi.</p>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->
@endsection
