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
<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/wilayah/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data wilayah</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" width=50px>No</th>
                                    <th class="text-center" width=50px>Aksi</th>
                                    <th class="text-center">Nama Wilayah</th>
                                    <th class="text-center" width=500px>Warna</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_wilayah as $wilayah)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-layout.button.info url="admin/wilayah" id="{{ $wilayah->id }}" />
                                                <x-layout.button.edit url="admin/wilayah" id="{{ $wilayah->id }}" />
                                                <x-layout.button.delete url="admin/wilayah" id="{{ $wilayah->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $wilayah->nama_wilayah }}</td>
                                        <td class="{{$wilayah->warna}} color-palette" style="background-color: {{$wilayah->warna}}"></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend>
