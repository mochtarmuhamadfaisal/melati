<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profil_admin(){

        $admin=Admin::all();
        return view('admin/profil_admin',[
                    "sidebar"=>"Pengaturan"
                ],compact('admin'));
    }

    public function tampilkan_profil_admin($nip){
        $admin=Admin::where('nip',$nip)->first();
        return view('admin/edit_profil_admin',[
                    "sidebar"=>"Pengaturan"
                ],compact('admin'));
    }

    public function updatedata_profil_admin(Request $request, $nip){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'nip' => 'required|min:7|max:20',
            'jeniskelamin' => 'required',
        ]);

        $admin = Admin::where('nip',$nip)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip)
        ]);
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('profil_admin')->with('berhasil', 'Akun mahasiswa berhasil di EDIT');
    }
}
