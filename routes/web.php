<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\catatpembayaranController;
use App\Http\Controllers\ekskulController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jnspembayaranController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\Registrasicontroller;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\thnakademikController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage/welcome');
});

// login
Route::get('/login', [Logincontroller::class, 'index']);
Route::get('/logout', [Logincontroller::class, 'logout']);

// registrasi
Route::get('/registrasi', [Registrasicontroller::class, 'index']);


// dashboard Admin
Route::prefix('dashboard')->group(
    function () {
        Route::get('/', [homeController::class, 'index']);
        Route::resource('home', homeController::class);
        Route::resource('guru', guruController::class);
        Route::resource('siswa', siswaController::class);
        Route::resource('kelas', kelasController::class);
        Route::resource('mapel', mapelController::class);
        Route::resource('jadwal', jadwalController::class);
        Route::resource('thn-akademik', thnakademikController::class);
        Route::resource('ekstrakulikuler', ekskulController::class);
        Route::resource('pengumuman', pengumumanController::class);
        Route::resource('jns-pembayaran', jnspembayaranController::class);
        Route::resource('catat-pembayaran', catatpembayaranController::class);
    }
);
