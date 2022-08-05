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
        ],compact('datamatakuliah'));
    }

    public function tambah_matakuliah(){
        return view('admin/tambah_matakuliah',[
            "sidebar"=>"Mata Kuliah"
        ]);
    }

    public function insertdata_matakuliah(Request $request){
        $this->validate($request,[
            'nama_matakuliah' => 'required|min:3|max:255'
        ]);

        $datamatakuliah = Matakuliah::create([
            'nama_matakuliah' => $request->nama_matakuliah
        ]);
        return redirect()->route('matakuliah')->with('berhasil', 'Mata Kuliah berhasil di buat');
    }

    public function tampilkan_matakuliah($id){
        $datamatakuliah = Matakuliah::find($id);

        return view('admin/edit_matakuliah',[
            "sidebar"=>"Mata Kuliah"
        ],compact('datamatakuliah'));
    }

    public function updatedata_matakuliah(Request $request,$id){
        $this->validate($request,[
            'nama_matakuliah' => 'required|min:3|max:255'
        ]);
        
        $datamatakuliah = Matakuliah::find($id);
        $datamatakuliah = Matakuliah::where('id',$id)->update([
            'nama_matakuliah' => $request->nama_matakuliah
        ]);
        return redirect()->route('matakuliah')->with('berhasil', 'Mata Kuliah berhasil di EDIT');
    }

    public function delete($id){
        $datamatakuliah = Matakuliah::find($id)->delete();
        return redirect()->route('matakuliah')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }
    
}
