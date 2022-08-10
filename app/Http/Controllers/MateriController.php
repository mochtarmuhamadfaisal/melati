<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi(){
        return view('dosen/materi',[
            "sidebar"=>"Materi"
        ]);
    }

    public function tambah_materi (){
        return view('dosen/tambah_materi',[
            "sidebar"=>"Materi"
        ]);
    }
}
