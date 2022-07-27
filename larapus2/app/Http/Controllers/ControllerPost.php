<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPost extends Controller
{
    //
    public function index()
    {
        //Menampilkan semua data
        $post = post::all();
        return view('post.index', compact('index'));
    }
}
