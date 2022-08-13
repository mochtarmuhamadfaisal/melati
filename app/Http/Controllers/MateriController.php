<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    public function materi(){
        $datamateri = Materi::where('id_user',Auth::user()->id)->get();
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
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('modul/', $filename);
            $datamateri->upload_modul = $filename;
        }
        
        if ($request->hasFile('upload_soal')) {
            $file = $request->file('upload_soal');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('soal/', $filename);
            $datamateri->upload_soal = $filename;
        }
        $datamateri->password_soal=$request->password_soal;
        $datamateri->save();
     
        return redirect()->route('materi')->with('berhasil', 'Materi berhasil di buat');
    }

    public function tampilkan_materi ($id){
        $datamateri = Materi::where('id',$id)->first();
        return view('dosen/edit_materi',[
                    "sidebar"=>"Materi"
                ],compact('datamateri'));
    }

    public function updatedata_materi(Request $request, $id){
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

        $ubahmateri = Materi::where('id',$id)->first();
        $ubahmateri->id_matakuliah = $request->id_matakuliah;
        $ubahmateri->semester = $request->semester;
        $ubahmateri->kelas = $request->kelas;
        $ubahmateri->link_video = $embed;
        $ubahmateri->judul_video = $request->judul_video;
        $ubahmateri->deskripsi_video = $request->deskripsi_video;
        
        if ($request->hasFile('upload_modul')) {
            $file = $request->file('upload_modul');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('modul/', $filename);
            $ubahmateri->upload_modul = $filename;
        }
        
        if ($request->hasFile('upload_soal')) {
            $file = $request->file('upload_soal');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('soal/', $filename);
            $ubahmateri->upload_soal = $filename;
        }
        $ubahmateri->password_soal=$request->password_soal;
        $ubahmateri->save();

        return redirect()->route('materi')->with('berhasil', 'Materi berhasil di EDIT');
    }

    public function delete_materi($id){
        Materi::where('id',$id)->delete();
        return redirect()->route('materi')->with('berhasil', 'Materi berhasil di HAPUS');
    }

    
}
