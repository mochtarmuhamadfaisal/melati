<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen(){
        $datadosen = Dosen::all();

        return view('admin/dosen',[
            "sidebar"=>"Dosen"
        ],compact('datadosen'));
    }

    public function tambahdosen(){
        return view('admin/tambah_dosen',[
            "sidebar"=>"Dosen"
        ]);
    }

    public function insertdata_dosen(Request $request){
        // dd($request->all());
        Dosen::create($request->all());
        return redirect()->route('dosen');
    }
}
