<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/wilayah') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                        <h3 class="text-center" style="font-family: bold">Tambah Data Wilayah</h3>
                    </div>
                    <form action="{{ url('admin/wilayah', $wilayah->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Wilayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$wilayah->nama_wilayah}}" placeholder="Nama Wilayah"
                                        name="nama_wilayah">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Warna Wilayah</label>
                                <div class="col-sm-10">

                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" value="{{$wilayah->warna}}" placeholder="Warna Wilayah" name="warna">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Geo Json</label>
                                <textarea class="form-control" name="geojson" rows="5" placeholder="Enter ..." style="height: 100%;"></textarea>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend>

