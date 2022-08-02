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
            'nip' => 'required|min:7|max:20',
            'jeniskelamin' => 'required',
        ]);

        $datamahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip)
        ]);

        $datamahasiswa->assignRole('mahasiswa');

        // dd($request->all());
        // Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di buat');
    }

    public function tampilkan_mahasiswa($nip){
        $datamahasiswa = Mahasiswa::where('nip',$nip)->first();
        // dd($datamahasiswa);
        return view('admin/edit_mahasiswa',[
            "sidebar"=>"Mahasiswa"
        ],compact('datamahasiswa'));
    }

    public function updatedata_mahasiswa(Request $request, $nip){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'nip' => 'required|min:7|max:20',
            'jeniskelamin' => 'required',
        ]);

        $datamahasiswa = Mahasiswa::where('nip',$nip)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip)
        ]);
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di EDIT');
    }

    public function delete($nip){
        $datamahasiswa = Mahasiswa::where('nip',$nip)->delete();
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }



}
