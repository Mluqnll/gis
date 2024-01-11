<style>
    .color-palette {
        height: 35px;
        width: 35px;
        line-height: 35px;
        text-align: right;
        padding-right: .75rem;
        border: 2px solid white;
        border-radius: 15px;
    }
</style>
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ url('public/assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"> <b>Sistem Informasi Geografis Desa Wisata</b></span>
        </a>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Wilayah</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        @foreach ($list_wilayah as $wilayah)
                            <li class="nav-item">
                                <a href="{{ url("detail-wilayah/$wilayah->id") }}"
                                    class="nav-link">{{ $wilayah->nama_wilayah }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#legenda">Tampilkan Legenda</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="tentang">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-family:serif">Selamat Datang di Sistem Informasi Geografis Pulau Cempedak</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($list_tentang as $tentang)
                <p style="font-family:arial">
                    {{$tentang->deskripsi}}
                </p>
                @endforeach
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="legenda">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Legenda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">

                            @foreach ($list_wilayah as $wilayah)
                                <div class="col-md-6">
                                    <p>{{ $wilayah->nama_wilayah }}</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="{{ $wilayah->warna }} color-palette"
                                        style="background-color: {{ $wilayah->warna }}"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">

                            @foreach ($list_tempat as $tempat)
                                <div class="col-md-6">
                                    <p>{{ $tempat->nama_tempat }}</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url("public/$tempat->icon") }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
