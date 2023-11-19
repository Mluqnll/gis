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
                    <form action="{{ url('admin/tempat') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Tambahkan CSRF token untuk keamanan -->
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
                                <label for="lat">Latitude</label>
                                <input type="text" class="form-control" id="lat" name="lat"
                                    placeholder="Masukkan Latitude">
                            </div>

                            <div class="form-group">
                                <label for="long">Longitude</label>
                                <input type="text" class="form-control" id="long" name="long"
                                    placeholder="Masukkan Longitude">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Tempat</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" style="height: 100%"
                                    placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group" style="margin-top: 2%">
                                <button type="reset" class="btn btn-default float-left"><i class="fa fa-times"></i>
                                    Batal</button>
                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i>
                                    Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backend>
