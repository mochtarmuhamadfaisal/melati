<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function fillter(Request $request){
        $datasemkel = Materi::where(function($query) use($request){
            return $request->semester ?
            $query->from('materis')->where('semester',$request->semester): '';
        })->where(function($query) use($request){
            return $request->kelas ?
            $query->from('materis')->where('kelas',$request->kelas): '';
        })->get();
        return view('mahasiswa/belajar',[
            "navbar"=>"Belajar",'datamateri'=> $datasemkel
        ]);
    }
    public function belajar(){
        $datamateri = Materi::all();
        return view('mahasiswa/belajar',[
            "navbar"=>"Belajar", 'datamateri'=> $datamateri
        ]);
    }

    public function belajar_video($id){
        $datamateri = Materi::where('id_matakuliah',$id)->get();
        return view('mahasiswa/belajar_video',[
                    "navbar"=>"Belajar",'datamateri'=> $datamateri
                ]);
    }

    public function cek_password_soal(Request $request){
        $ambil_data_materi = Materi::where('id', $request->input('id_materi'))->first();
        $unduh = public_path().'/soal/' . $ambil_data_materi->upload_soal;
        if ($request->input('password_soal') === $ambil_data_materi->password_soal) {
            
            return response()->download($unduh);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
