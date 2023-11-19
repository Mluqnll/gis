<x-backend>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
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
                        <br>
                        <a href="{{ url('admin/tempat') }}" class="btn btn-sm btn-primary"><i
                                class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
</x-backend>
