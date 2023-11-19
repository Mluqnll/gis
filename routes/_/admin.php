<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\TempatController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WilayahController;
use Illuminate\Support\Facades\Route;


// Route::put('tempat/{tempat}', [TempatController::class, 'update']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::resource('pengelola', UserController::class);
    Route::resource('wilayah', WilayahController::class);
    Route::resource('tempat', TempatController::class);
});
