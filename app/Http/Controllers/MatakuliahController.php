<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function matakuliah(){
        $datamatakuliah = Matakuliah::all();
        return view('admin/matakuliah',[
            "sidebar"=>"Mata Kuliah"
        ]);
    }

    public function tambah_matakuliah(){
        return view('admin/tambah_matakuliah',[
            "sidebar"=>"Mata Kuliah"
        ]);
    }
    
}
