<x-backend>
    <section class="content">
        <a href="{{ url('admin/wilayah') }}" class="btn btn-primary mb-2"><i class="fa fa-arrow-left"></i>
            Kembali</a>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Data Extend Wilayah</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Extend Wilayah</th>
                                    <th>Warna Extend Wilayah</th>
                                    <th class="text-center" style="width: 29px">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($extend as $extend)
                                <tbody>
                                    <tr>
                                        <td>{{ $extend->extend_nama_wilayah }}</td>
                                        <td class="{{ $extend->extend_warna }} color-palette"
                                            style="background-color: {{ $extend->extend_warna }}"></td>
                                        <td class="text-center" style="width: 29px">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-edit-extend{{ $extend->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ url('admin/wilayah/delete-extend', $extend->id) }}"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <div class="modal fade" id="modal-edit-extend{{ $extend->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="font-family:serif">Edit Data Extend
                                                    Wilayah</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('admin/wilayah/update-extend', $extend->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="text" value="{{ $wilayah->id }}" name="id_wilayah"
                                                        hidden>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nama Extend
                                                            Wilayah</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                placeholder=" Extend Nama Wilayah"
                                                                name="extend_nama_wilayah"
                                                                value="{{ $extend->extend_nama_wilayah }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Warna Extend
                                                            Wilayah</label>
                                                        <div class="col-sm-8">

                                                            <div class="input-group my-colorpicker2">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Extend Warna Wilayah"
                                                                    name="extend_warna"
                                                                    value="{{ $extend->extend_warna }}">

                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i
                                                                            class="fas fa-square"></i></span>
                                                                </div>
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Geo Json Extend Wilayah</label>
                                                        <textarea class="form-control" name="extend_geojson" rows="5" placeholder="Enter ..." style="height: 100%;"></textarea>
                                                    </div>

                                                    <div class="form-group row" style="margin-top: 2%">
                                                        <div class="col-sm-2">
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="footer">
                                                                <button type="reset"
                                                                    class="btn btn-default float-left"><span
                                                                        class="fa fa-times"></span> Batal</button>

                                                                <button class="btn btn-primary float-right"><span
                                                                        class="fa fa-save"></span>
                                                                    Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"> Tambah Data Extend Wilayah</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/extend-wilayah') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="{{ $wilayah->id }}" name="id_wilayah" hidden>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Extend Wilayah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder=" Extend Nama Wilayah"
                                        name="extend_nama_wilayah">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Warna Extend Wilayah</label>
                                <div class="col-sm-8">

                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" placeholder="Extend Warna Wilayah"
                                            name="extend_warna">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Geo Json Extend Wilayah</label>
                                <textarea class="form-control" name="extend_geojson" rows="5" placeholder="Enter ..." style="height: 100%;"></textarea>
                            </div>

                            <div class="form-group row" style="margin-top: 2%">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <div class="footer">
                                        <button type="reset" class="btn btn-default float-left"><span
                                                class="fa fa-times"></span> Batal</button>

                                        <button class="btn btn-primary float-right"><span class="fa fa-save"></span>
                                            Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-lime">
                    <div class="card-header">
                        <h3 class="card-title">Data Tempat</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px">No</th>
                                    <th class="text-center" style="width: 50px">Aksi</th>
                                    <th class="text-center" style="width: 200px">Nama Tempat</th>
                                    <th class="text-center">Foto</th>
                                </tr>
                            </thead>
                            @foreach ($tempat as $tempat)
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="" class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-info{{ $tempat->id }}"><i
                                                        class="fas fa-info"></i></a>
                                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit-tempat{{ $tempat->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ url('admin/wilayah/delete-tempat', $tempat->id) }}"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $tempat->nama_tempat }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$tempat->foto") }}"
                                                style="width:30%; height:30%;"
                                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>
                                </tbody>
                                <div class="modal fade" id="modal-edit-tempat{{ $tempat->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="font-family:serif">Edit Data Tempat
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('admin/wilayah/update-tempat', $tempat->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                                                    <input type="text" value="{{ $wilayah->id }}"
                                                        name="id_wilayah" hidden>
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="nama_tempat"
                                                                class="col-sm-2 col-form-label">Nama Tempat</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="nama_tempat" name="nama_tempat"
                                                                    placeholder="Nama Tempat"
                                                                    value="{{ $tempat->nama_tempat }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="icon"
                                                                class="col-sm-2 col-form-label">Icon</label>
                                                            <div class="col-sm-4">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <img src="{{ url("public/$tempat->icon") }}"
                                                                            style="max-width:20%; max-height:50%"
                                                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="file" class="form-control"
                                                                    id="icon" name="icon"
                                                                    accept=".png, .jpg, .jpeg">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="foto"
                                                                class="col-sm-2 col-form-label">Foto</label>
                                                            <div class="col-sm-4">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <img src="{{ url("public/$tempat->foto") }}"
                                                                            style="max-width:100%; max-height:100%"
                                                                            onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="file" class="form-control"
                                                                    id="foto" name="foto"
                                                                    accept=".png, .jpg, .jpeg">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="posisi">Posisi</label>
                                                            <input type="text" class="form-control" id="posisi"
                                                                name="posisi"
                                                                placeholder="Masukkan Latitude dan Longitude"
                                                                value="{{ $tempat->posisi }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="deskripsi">Deskripsi Tempat</label>
                                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" style="height: 100%;"
                                                                placeholder="Enter ...">{{ $tempat->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="form-group row" style="margin-top: 2%">
                                                            <div class="col-sm-2">
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <div class="footer">
                                                                    <button type="reset"
                                                                        class="btn btn-default float-left"><span
                                                                            class="fa fa-times"></span> Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary float-right"><span
                                                                            class="fa fa-save"></span> Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            @endforeach
                        </table>
                    </div>
                    <div class="modal fade" id="modal-info{{$tempat->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" style="font-family:serif">Detail Data Tempat
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-6 order-2 order-md-1">
                                            <div class="row">
                                                <div class="col-12 col-sm-12">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Foto Tempat</span>
                                                            <img src="{{ url("public/$tempat->foto") }}" style="width:auto; height:auto"
                                                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                                            <h3 class="text-primary">{{ $tempat->nama_tempat }}</h3>
                                            <p class="text-muted">{{ $tempat->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-indigo collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"> Tambah Data Tempat</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                title="Collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/tempat') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Tambahkan CSRF token untuk keamanan -->

                            <input type="text" value="{{ $wilayah->id }}" name="id_wilayah" hidden>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_tempat">Nama Tempat</label>
                                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat"
                                        placeholder="Nama Tempat">
                                </div>

                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="file" class="form-control" id="icon" name="icon"
                                        accept=".png, .jpg, .jpeg">
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        accept=".png, .jpg, .jpeg">
                                </div>

                                <div class="form-group">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" class="form-control" id="posisi" name="posisi"
                                        placeholder="Masukkan Latitude dan Longitude">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Tempat</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" style="height: 100%"
                                        placeholder="Enter ..."></textarea>
                                </div>

                                <div class="form-group" style="margin-top: 2%">
                                    <button type="reset" class="btn btn-default float-left"><i
                                            class="fa fa-times"></i>
                                        Batal</button>
                                    <button type="submit" class="btn btn-primary float-right"><i
                                            class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</x-backend>
