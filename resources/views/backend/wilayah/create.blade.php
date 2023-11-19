<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/wilayah') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <h3 class="text-center" style="font-family: bold">Tambah Data Wilayah</h3>
                    </div>
                    <form action="{{ url('admin/wilayah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Wilayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nama Wilayah"
                                        name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Latitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Latitude"
                                        name="lat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Longitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Longitude" name="long">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Peduduk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Jumlah Peduduk"
                                        name="jumlah_penduduk">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Luas Wilayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Luas Wilayah" name="luas_wilayah">
                                </div>
                            </div>

                            <div class="form-group">
                                <label >Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." style="height: 100%;"></textarea>
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
