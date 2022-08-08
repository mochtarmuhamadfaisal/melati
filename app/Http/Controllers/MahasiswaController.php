<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function beranda(){
        $navbar = 'Beranda';
        return view('mahasiswa.beranda_mahasiswa',compact('navbar'));
    }
    public function mahasiswa(){
        $datamahasiswa = User::where('role_id', 3)->get();
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

        $datamahasiswa = User::create([
            'username' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip),
            'role_id' => 3,
        ]);


        // dd($request->all());
        // Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di buat');
    }

    public function tampilkan_mahasiswa($nip){
        $datamahasiswa = User::where('id',$nip)->first();
        // dd($datamahasiswa);
        return view('admin.edit_mahasiswa',[
            "sidebar"=>"Mahasiswa"
        ],compact('datamahasiswa'));
    }

    public function updatedata_mahasiswa(Request $request, $nip){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'username' => 'required|min:7|max:20',
            'jenis_kelamin' => 'required',
        ],
        [
            'username.required' => 'NIP kosong',
        ]);

        $datamahasiswa = User::where('id',$nip)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => bcrypt($request->username)
        ]);
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun mahasiswa berhasil di EDIT');
    }

    public function delete($id){
        $datamahasiswa = User::where('id',$id)->delete();
        return redirect()->route('mahasiswa')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }



}
