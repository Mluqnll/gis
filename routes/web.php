<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//admin

Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::get('home', [WebController::class, 'index']);
Route::get('detail-wilayah/{id}', [WebController::class, 'show']);


//login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
