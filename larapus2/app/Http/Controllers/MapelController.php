<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mapel;


class MapelController extends Controller
{
    //
    public function mapel()
    {
        //Menampilkan semua data
        $mapel = mapel::all();
        return view('post.mapel', compact('mapel'));
    }
}
