<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\Jawaban_diskusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiskusiController extends Controller
{
    public function belajar_diskusi(){
        $datapertanyaan = Diskusi::orderBy('created_at','DESC')->get();
        $datajawaban = Jawaban_diskusi::get();
        return view('mahasiswa/belajar_diskusi',[
            "navbar"=>"Diskusi"
        ],compact('datapertanyaan','datajawaban'));
    }

    public function tambah_diskusi(Request $request){
        $datapertanyaan = new Diskusi();
        $datapertanyaan->id_user= Auth::user()->id;
        $datapertanyaan->pertanyaan=$request->pertanyaan;
        $datapertanyaan->id_kategori=$request->id_kategori;
        $datapertanyaan->save();
        return back()->with('berhasil', 'pertanyaan berhasil di tambahkan');
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


    public function fillter_kategori_matakuliahs(Request $request){
        $datajawaban = Jawaban_diskusi::get();
        $filter_pertanyaan = Diskusi::where(function($query) use($request){
            return $request->id_matakuliah ?
            $query->from('diskusis')->where('id_kategori',$request->id_matakuliah): '';
        })->get();
        return view('mahasiswa/belajar_diskusi',[
            "navbar"=>"Belajar",'datapertanyaan'=> $filter_pertanyaan
        ],compact('datajawaban'));
    }

    public function pencarian_diskusis(Request $request){
        $datajawaban = Jawaban_diskusi::get();
        $datapertanyaan = Diskusi::latest();
        if(request('pencarian_diskusi')){
            $datapertanyaan->where('pertanyaan', 'like','%' . request('pencarian_diskusi') . '%');
        }

        return view('mahasiswa/belajar_diskusi',[
            "navbar"=>"Diskusi",
            "datapertanyaan"=>$datapertanyaan->orderBy('created_at','DESC')->get(),
        ],compact('datajawaban'));
    }
}
