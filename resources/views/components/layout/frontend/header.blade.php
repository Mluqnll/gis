@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ url('public/assets') }}/index3.html" class="navbar-brand">
            <img src="{{ url('public/assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"> Sistem Informasi Geografis Desa Wisata</span>
        </a>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            {{-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ checkRouteActive('/') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('peta') }}" class="nav-link {{ checkRouteActive('peta') }}">Peta</a>
                </li>
            </ul> --}}
        </div>
    </div>
</nav>
