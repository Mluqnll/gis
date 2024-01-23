@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ url('public/assets') }}/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"> GIS</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/assets') }}/dist/img/AdminLTELogo.png" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="{{ url('admin') }}" class="d-block"> Muhammad Luqinul
                    {{-- {{ Auth::guard('admin')->user()->nama }} --}}
                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link {{ checkRouteActive('admin') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/pengelola') }}" class="nav-link {{ checkRouteActive('admin/pengelola') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengelola
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/tentang') }}" class="nav-link {{ checkRouteActive('admin/tentang') }}">
                        <i class="nav-icon fas fa-exclamation"></i>
                        <p>
                            Tentang
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/penginapan') }}" class="nav-link {{ checkRouteActive('admin/penginapan') }}">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>
                            Penginapan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/wilayah') }}" class="nav-link {{ checkRouteActive('admin/wilayah') }}">
                        <i class="nav-icon fas fa-map"></i>
                        <p>
                            Destinasi
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
