<?php

namespace App\Http\Controllers;

use App\Models\Showcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowcaseController extends Controller
{
    public function showcase_detail($id){
        $datashowcase = Showcase::where('id',$id)->first();
        return view('mahasiswa/showcase_detail',[
            "navbar"=>"Showcase"
        ],compact('datashowcase'));
    }
    public function showcase(){
        $datashowcase = Showcase::get();
        return view('mahasiswa/showcase',[
            "navbar"=>"Showcase"
        ],compact('datashowcase'));
    }
    public function insertdata_showcase (){
        return view('mahasiswa/pamerin_showcase',[
                    "navbar"=>"Pengaturan"]);
    }

    public function tambah_showcase(Request $request){
        $this->validate($request,[
            'id_matakuliah' => 'required',
        ]);

        $datashowcase = new Showcase();
        $datashowcase->id_matakuliah = $request->id_matakuliah;
        $datashowcase->id_user = Auth::user()->id;
        $datashowcase->judul_project = $request->judul_project;
        $datashowcase->deskripsi_project = $request->deskripsi_project;
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('showcase/', $filename);
            $datashowcase->foto = $filename;
        }
    
        $datashowcase->save();
     
        return redirect()->route('showcase')->with('berhasil', 'Showcase berhasil di BUAT');
    }

    public function tampilakandata_showcase($id){
        $datashowcase=Showcase::where('id',$id)->first();
        return view('mahasiswa/edit_pamerin_showcase',[
            "navbar"=>"Showcase"
        ],compact('datashowcase'));
    }

    public function updatedata_showcase(Request $request, $id){
        $this->validate($request,[
            'id_matakuliah' => 'required',
        ]);

        $dataupdateshowcase=Showcase::where('id',$id)->first();
        $dataupdateshowcase->id_matakuliah = $request->id_matakuliah;
        $dataupdateshowcase->judul_project = $request->judul_project;
        $dataupdateshowcase->deskripsi_project = $request->deskripsi_project;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('showcase/', $filename);
            $dataupdateshowcase->foto = $filename;
        }
    
        $dataupdateshowcase->save();
     
        return redirect()->route('showcase')->with('berhasil', 'Showcase berhasil di EDIT');
    }

    public function delete_showcase($id){
        Showcase::where('id',$id)->delete();
        return redirect()->route('showcase')->with('berhasil', 'Showcase berhasil di HAPUS');
    }

    
}
