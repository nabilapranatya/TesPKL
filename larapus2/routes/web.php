<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SlotController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/kelas', function () {
    return view('pages.kelas');
});

Route::get('/jurusan', function () {
    return view('pages.jurusan');
});


//PARAMETER
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f) {
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//OPTIONAL PARAMETER
Route::get('/pesanan/{makanan?}/{makanan1?}', function ($a, $b, $c= "Mohon Maaf Pesanan Anda Tidak Ada") {
    return view('pages.pesanan', compact('a', 'b', 'c'));
});

use App\Http\Controllers\PengenalanController;

//Passing data dari controller ke view
route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

//Passing data dinamis(route parameter) dari controller ke view
route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\PengenalanController::class, 'intro']);

route::get('/siswa', [App\Http\Controllers\PengenalanController::class, 'siswa']);

route::get('/menu', [App\Http\Controllers\LatihanController::class, 'menu']);

route::get('/dosen', [App\Http\Controllers\LatihanController::class, 'dosen']);

route::get('/penyiaran', [App\Http\Controllers\LatihanController::class, 'penyiaran']);

route::get('/post', [App\Http\Controllers\PostController::class, 'index']);

route::get('/latihan2', [App\Http\Controllers\SiswaController::class, 'siswa']);
route::get('/latihan3', [App\Http\Controllers\PesertaController::class, 'peserta']);
route::get('/latihan', [App\Http\Controllers\MapelController::class, 'mapel']);

route::get('/latihan4', [App\Http\Controllers\SiswaController::class, 'siswa']);

route::get('/tugas', [App\Http\Controllers\HotelController::class, 'karyawan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\SlotController::class, 'index'])->name('home');

Route::resource('slot', SlotController::class);
