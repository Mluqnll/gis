<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DesaController;
use App\Http\Controllers\Backend\PenginapanController;
use App\Http\Controllers\Backend\TempatController;
use App\Http\Controllers\Backend\TentangController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WilayahController;
use Illuminate\Support\Facades\Route;


// Route::put('tempat/{tempat}', [TempatController::class, 'update']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::resource('pengelola', UserController::class);
    Route::resource('tentang', TentangController::class);
    Route::resource('wilayah', WilayahController::class);
    Route::resource('desa', DesaController::class);
    Route::resource('penginapan', PenginapanController::class);

    //extend wilayah
    Route::post('extend-wilayah', [WilayahController::class, 'extend']);
    Route::put('wilayah/update-extend/{extend}', [WilayahController::class, 'updateExtend']);
    Route::get('wilayah/delete-extend/{extend}', [WilayahController::class, 'hapus']);

    // tempat
    Route::post('tempat', [WilayahController::class, 'tempat']);
    Route::put('wilayah/update-tempat/{tempat}', [WilayahController::class,'updateTempat']);
    Route::get('wilayah/hapus-tempat/{tempat}', [WilayahController::class,'hapusTempat']);
});
