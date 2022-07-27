<?php

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
    return view('welcome');
});

Route::get('/welcome', function () {
    echo '<center><br>';
    echo '<u>Hello semuanya, apa kabar?</u><br>';
    echo '<u>Pada kali ini kita sedang belajar route basic</u>';
    echo '</center>';
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index1');
});

Route::get('/pages3', function () {
    return view('pages3.index3');
});

//PARAMETER
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f) {
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//OPTIONAL PARAMETER
Route::get('/pesanan/{makanan?}/{makanan1?}', function ($a, $b, $c= "Mohon Maaf Pesanan Anda Tidak Ada") {
    return view('pages.pesanan') compact('a', 'b', 'c');
});