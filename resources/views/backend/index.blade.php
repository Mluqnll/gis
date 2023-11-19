<x-backend>
    <div class="container-fluid">
        <div class="row">

             <div class="col-lg-6 col-6">
                 <div class="small-box bg-info">
                     <div class="inner">
                         {{-- <h3>{{$list_jembatan->count()}}<sup style="font-size: 20px"> Data</sup></h3> --}}

                         <p>User</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ url('admin/pengelola') }}" class="small-box-footer">More info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <div class="col-lg-6 col-6">
                 <div class="small-box bg-info">
                     <div class="inner">
                         {{-- <h3>{{$list_peralatan->count()}}<sup style="font-size: 20px"> Data</sup></h3> --}}

                         <p>Tempat</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-stats-bars"></i>
                     </div>
                     <a href="{{ url('admin/tempat') }}" class="small-box-footer">More info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>
         </div>

     </div>
</x-backend>
