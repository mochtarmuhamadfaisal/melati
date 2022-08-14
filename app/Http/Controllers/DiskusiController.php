<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\Jawaban_diskusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiskusiController extends Controller
{
    public function belajar_diskusi(){
        $datapertanyaan = Diskusi::all();
        $datajawaban = Jawaban_diskusi::get();
        return view('mahasiswa/belajar_diskusi',[
            "navbar"=>"Diskusi"
        ],compact('datapertanyaan','datajawaban'));
    }

    public function tambah_diskusi(Request $request){
        $datapertanyaan = new Diskusi();
        $datapertanyaan->id_user= Auth::user()->id;
        $datapertanyaan->pertanyaan=$request->pertanyaan;
        $datapertanyaan->save();
        return back();
    }

    public function tambah_jawaban(Request $request){
        $datajawaban = new Jawaban_diskusi();
        $datajawaban->id_user = Auth::user()->id;
        $datajawaban->id_diskusi = $request->id_diskusi;
        $datajawaban->jawaban =$request->jawaban;
        $datajawaban->save();
        return back();
    }

    public function delete($id){
        Jawaban_diskusi::where('id',$id)->delete();
        return redirect()->route('belajar_diskusi')->with('berhasil', 'Komentar berhasil di HAPUS');
    }

}
