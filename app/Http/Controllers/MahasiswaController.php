<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $datamahasiswa = Mahasiswa::all();
        // dd($datamahasiswa);
        return view('admin/mahasiswa',[
            "sidebar"=>"Mahasiswa"
        ],compact('datamahasiswa'));
    }

    public function tambahmahasiswa(){
        return view('admin/tambah_mahasiswa',[
            "sidebar"=>"Mahasiswa"
        ]);
    }

    public function insertdata_mahasiswa(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'nim' => 'required|min:7|max:20',
        ]);

        // dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di buat');
    }

    public function tampilkanmahasiswa($id){
        $datamahasiswa = Mahasiswa::find($id);
        // dd($datamahasiswa);
        return view('admin/edit_mahasiswa',[
            "sidebar"=>"Mahasiswa"
        ],compact('datamahasiswa'));
    }

    public function updatedata_mahasiswa(Request $request, $id){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'nim' => 'required|min:7|max:20',
        ]);

        $datamahasiswa = Mahasiswa::find($id);
        $datamahasiswa->update($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di EDIT');
    }

    public function delete($id){
        $datamahasiswa = Mahasiswa::find($id);
        $datamahasiswa->delete();
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }



}
