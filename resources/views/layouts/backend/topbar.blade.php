<!-- Top Header -->
<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a href="#" class="logo-icon me-3">
                <img src="{{ asset('backend') }}/assets/images/logo-icon.png" height="30" class="small" alt="">
                <span class="big">
                    <img src="{{ asset('backend') }}/assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                    <img src="{{ asset('backend') }}/assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                </span>
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>
        </div>

        <ul class="list-unstyled mb-0">

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    @php
                        $user = Auth::user();
                        $image = $user->image === 'default/user.png' 
                                    ? asset($user->image) 
                                    : asset('storage/profile/' . $user->image);
                        $role = $user->hasRole('superadmin') 
                                    ? 'Superadmin' 
                                    : ($user->hasRole('admin') ? 'Admin' : 'User');
                    @endphp
                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ $image }}" class="avatar avatar-ex-small rounded" alt="avatar">
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                            <img src="{{ $image }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="avatar">
                            <div class="flex-1 ms-2">
                                <span class="d-block">{{ Auth::user()->name }}</span>
                                <small class="text-muted">{{ $role }}</small>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="{{ ('dashboard') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                        <a class="dropdown-item text-dark" href="{{ route('profile.index') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-user"></i></span> Profil</a>
                        <a class="dropdown-item text-dark" href="{{ route('change-password.index') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-key"></i></span> Ganti Kata Sandi</a>
                        <a class="dropdown-item text-dark" href="{{ route('setting.index') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Pengaturan</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Top Header -->