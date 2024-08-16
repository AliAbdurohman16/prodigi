@extends('layouts.auth.main')

@section('content')
<!-- Hero Start -->
<section class="bg-home shadow d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <a href="{{ route('/') }}"><img src="{{ asset('default/prodigi-color.png') }}" class="mb-4 d-block mx-auto" height="80" alt="logo"></a>
                        <h5 class="mb-3 text-center">Masuk</h5>
                    
                        <div class="form-floating mb-2">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Kata sandi" required autocomplete="current-password">
                            <label for="floatingPassword">Kata sandi</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="d-flex justify-content-between">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="remember" id="remember" 
                                    {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Ingat saya</label>
                                </div>
                            </div>
                            {{-- <p class="forgot-pass mb-0"><a href="{{ route('password.request') }}" class="text-dark small fw-bold">Lupa kata sandi ?</a></p> --}}
                        </div>
        
                        <button class="btn btn-primary w-100" type="submit">Masuk</button>

                        {{-- <div class="col-12 text-center mt-3">
                            <p class="mb-0 mt-3"><small class="text-dark me-2">Belum punya akun ?</small> <a href="{{ route('register') }}" class="text-dark fw-bold">Daftar</a></p>
                        </div> --}}
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
