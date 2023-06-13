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
use App\Http\Controllers\ortuController;
use App\Http\Controllers\OrtuhomeController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\Registrasicontroller;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\SiswahomeController;
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
Route::get('/oldhome', function () {
    return view('landingPage/welcomeOld');
});

// login Admin
Route::get('/admin/login', [Logincontroller::class, 'admin_index']);
Route::post('/admin/login', [Logincontroller::class, 'admin_login'])->name('admin_login');
// login Guru
Route::get('/guru/login', [Logincontroller::class, 'guru_index']);
Route::post('/guru/login', [Logincontroller::class, 'guru_login'])->name('guru_login');
// login Siswa
Route::get('/login', [Logincontroller::class, 'index']);
Route::post('/login', [Logincontroller::class, 'login'])->name('login');
Route::post('register', [Logincontroller::class, 'register'])->name('register');
// login orang tua
Route::get('/orangtua/login', [Logincontroller::class, 'orangtua_index']);
Route::post('/orangtua/login', [Logincontroller::class, 'orangtua_login'])->name('orangtua_login');

Route::get('/logout', [Logincontroller::class, 'logout']);

// registrasi
Route::get('/registrasi', [Registrasicontroller::class, 'index']);


// dashboard Admin
// Route::group(['middleware' => ['auth', 'throttle:global']], function () {
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(
        function () {
            // Route::get('dashboard', [homeController::class, 'index'])->name('admin.dashboard');
            Route::resource('dashboard', homeController::class);
            Route::resource('home', homeController::class);
            Route::resource('guru', guruController::class);
            Route::resource('siswa', siswaController::class);
            Route::resource('orang_tua', ortuController::class);
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
    // Route::get('admin/dashboard', [homeController::class, 'index'])->name('admin.dashboard');
    // Route::get('admin/home', [homeController::class, 'index'])->name('home.index');
    // Route::get('admin/guru', [guruController::class, 'index'])->name('guru.index');
    // Route::get('siswa', [siswaController::class, 'index'])->name('siswa.index');
    // Route::get('orang_tua', [ortuController::class, 'index'])->name('orang_tua.index');
    // Route::get('kelas', [kelasController::class, 'index'])->name('kelas.index');
    // Route::get('mapel', [mapelController::class, 'index'])->name('mapel.index');
    // Route::get('jadwal', [jadwalController::class, 'index'])->name('jadwal.index');
    // Route::get('thn-akademik', [thnakademikController::class, 'index'])->name('thn-akademik.index');
    // Route::get('ekstrakulikuler', [ekskulController::class, 'index'])->name('ekstrakulikuler.index');
    // Route::get('pengumuman', [pengumumanController::class, 'index'])->name('pengumuman.index');
    // Route::get('jns-pembayaran', [jnspembayaranController::class, 'index'])->name('jns-pembayaran.index');
    // Route::get('catat-pembayaran', [catatpembayaranController::class, 'index'])->name('catat-pembayaran.index');
});
Route::group(['middleware' => 'auth:siswa'], function () {
    Route::prefix('siswa')->group(
        function () {
            // Route::get('dashboard', [homeController::class, 'index'])->name('admin.dashboard');
            Route::resource('dashboard', SiswahomeController::class);
        }
    );
});
Route::group(['middleware' => 'auth:guru'], function () {
    // Route::prefix('guru')->group(
    //     function () {
    //         // Route::get('dashboard', [homeController::class, 'index'])->name('admin.dashboard');
    //         Route::resource('dashboard', guruController::class);
    //     }
    // );
    Route::get('guru/dashboard', [guruController::class, 'dashboard'])->name('guru.dashboard');
});
Route::group(['middleware' => 'auth:orangtua'], function () {
    Route::prefix('orangtua')->group(
        function () {
            Route::resource('dashboard', OrtuhomeController::class);
        }
    );
});
