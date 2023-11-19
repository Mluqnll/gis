<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/tempat') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                        <h3 class="text-center" style="font-weight: bold">Tambah Data Tempat</h3>
                    </div>
                    <form action="{{ url('admin/tempat', $tempat->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf <!-- Tambahkan CSRF token untuk keamanan -->

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama_tempat" class="col-sm-2 col-form-label">Nama Tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat"
                                        placeholder="Nama Tempat" value="{{ $tempat->nama_tempat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-4">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <img src="{{ url("public/$tempat->icon") }}"
                                                style="max-width:100%; max-height:100%"
                                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="icon" name="icon"
                                        accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
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
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lat" class="col-sm-2 col-form-label">Latitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lat" name="lat"
                                        placeholder="Masukkan Latitude" value="{{ $tempat->lat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="long" class="col-sm-2 col-form-label">Longitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="long" name="long"
                                        placeholder="Masukkan Longitude" value="{{ $tempat->long }}">
                                </div>
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
                                        <button type="reset" class="btn btn-default float-left"><span
                                                class="fa fa-times"></span> Batal</button>
                                        <button type="submit" class="btn btn-primary float-right"><span
                                                class="fa fa-save"></span> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend>
