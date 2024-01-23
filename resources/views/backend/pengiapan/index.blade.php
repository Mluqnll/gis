<x-backend>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/tentang/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data tentang</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px">No</th>
                                    <th class="text-center" style="width: 500px">Aksi</th>
                                    <th class="text-center">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_penginapan as $penginapan)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-layout.button.info url="admin/tentang" id="{{ $penginapan->id }}" />
                                                <x-layout.button.edit url="admin/tentang" id="{{ $penginapan->id }}" />
                                                <x-layout.button.delete url="admin/tentang" id="{{ $penginapan->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $penginapan->deskripsi }}</td>
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
