<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function belajar(){
        $datamateri = Materi::all();
        return view('mahasiswa/belajar',[
            "navbar"=>"Belajar", 'datamateri'=> $datamateri
        ]);
    }

    public function belajar_video($id){
        $datamateri = Materi::where('id_user',$id)->get();
        return view('mahasiswa/belajar_video',[
                    "navbar"=>"Belajar",'datamateri'=> $datamateri
                ]);
    }
}
