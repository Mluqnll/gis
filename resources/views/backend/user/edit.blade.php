<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/pengelola') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <h3 class="text-center" style="font-family: bold">Tambah Data Pengelola</h3>
                    </div>
                    <form action="{{ url('admin/pengelola', $pengelola->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Pengelola</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$pengelola->nama}}" placeholder="Nama Pengelola"
                                        name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$pengelola->username}}" placeholder="Username Pengelola"
                                        name="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="NIM Pengelola" value="{{$pengelola->nim}}"
                                        name="nim">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-4">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <img src="{{ url("public/$pengelola->foto") }}"
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

                            <div class="form-group row" style="margin-top: 2%">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <div class="footer">
                                        <button type="reset" class="btn btn-default float-left"><span class="fa fa-times"></span> Batal</button>

                                        <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
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
