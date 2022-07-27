<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;


class PesertaController extends Controller
{
    //
    public function peserta()
    {
        //Menampilkan semua data
        $peserta = peserta::all();
        return view('post.peserta', compact('peserta'));
    }
}
