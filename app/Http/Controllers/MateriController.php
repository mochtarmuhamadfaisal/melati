<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    public function materi(){
        $datamateri = Materi::all();
        return view('dosen/materi',[ "sidebar"=>"Materi",'datamateri'=>$datamateri
        ]);
    }

    public function tambah_materi (){
        return view('dosen/tambah_materi',[
            "sidebar"=>"Materi"
        ]);
    }

    public function insertdata_materi(Request $request){
        // dd($request->all());
        // $this->validate($request,[
        //     'nama_matakuliah' => 'required|min:3|max:255'
        // ]);

        if (str_contains($request->link_video, 'watch')) {
            $link1 = explode('/', $request->link_video);
            $akhir = end($link1);

            $link2 = explode('=', $akhir);
            $code = end($link2);
        }else{
            $link1 = explode('/', $request->link_video);
            $code = end($link1);
        }
        $embed = 'https://www.youtube.com/embed/'.$code;


        $datamateri = new Materi();
        $datamateri->id_matakuliah = $request->id_matakuliah;
        $datamateri->id_user = Auth::user()->id;
        $datamateri->semester = $request->semester;
        $datamateri->kelas = $request->kelas;
        $datamateri->link_video = $embed;
        $datamateri->judul_video = $request->judul_video;
        $datamateri->deskripsi_video = $request->deskripsi_video;
        
        if ($request->hasFile('upload_modul')) {
            $file = $request->file('upload_modul');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'UID_'.Auth::user()->id.'.'.$ekstensi;
            $file->move('modul/', $filename);
            $datamateri->upload_modul = $filename;
        }
        
        if ($request->hasFile('upload_soal')) {
            $file = $request->file('upload_soal');
            $ekstensi = $file->getClientOriginalExtension();
            $filename = time(). '_' .'UID_'.Auth::user()->id.'.'.$ekstensi;
            $file->move('soal/', $filename);
            $datamateri->upload_soal = $filename;
        }

        // if ($request->hasFile('upload_soal')) {
        //     $request->file('upload_modul')->move('modul/', $request->file('upload_modul')->getClientOriginalName());
        //     $datamateri->upload_modul = $request->file('upload_modul')->getClientOriginalName();
        //     $datamateri->save();

        // }
        // if ($request->hasFile('upload_soal')) {
        //     $request->file('upload_soal')->move('soal/', $request->file('upload_soal')->getClientOriginalName());
        //     $datamateri->upload_soal = $request->file('upload_soal')->getClientOriginalName();
        //     $datamateri->save();
        // }
        $datamateri->save();
        // $dataMateri = Matakuliah::where('id_user', Auth::user()->id)->count();

        // if($dataMateri < 0){
        Matakuliah::where('id', $datamateri->id_matakuliah)->update([
            'link_grupdiskusi' => $request->link_grupdiskusi,
            'password_diskusi' => $request->password_diskusi,
        ]);
        // }

        // $datamateri = Materi::create([
        //     'link_video' =>$embed,
        //     'judul_video' =>$request->judul_video,
        //     'deskripsi_video' =>$request->deskripsi_video,
        //     'upload_modul' =>$request->upload_modul,
        //     'upload_soal' =>$request->upload_soal,
        // ]);

        return redirect()->route('materi')->with('berhasil', 'Materi berhasil di buat');
    }
}
