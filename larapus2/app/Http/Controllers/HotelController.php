<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\pengunjung;
use App\Models\transaksi;
use App\Models\detail_transaksi;
use App\Models\kamar;

class HotelController extends Controller
{
    //
    public function karyawan()
    {
        //Menampilkan semua data
        $karyawan = karyawan::all();
        $pengunjung = pengunjung::all();
        $transaksi = transaksi::all();
        $detail_transaksi = detail_transaksi::all();
        $kamar = kamar::all();
        return view('post.tugas', compact('karyawan', 'pengunjung', 'transaksi', 'detail_transaksi', 'kamar'));
    }
}
