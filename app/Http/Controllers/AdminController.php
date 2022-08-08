<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profil_admin(){

        $admin = User::where('role_id', 1)->get();
        return view('admin/profil_admin',[
                    "sidebar"=>"Pengaturan"
                ],compact('admin'));
    }

    public function tampilkan_profil_admin($nip){
        $admin=User::where('id',$nip)->first();
        return view('admin.edit_profil_admin',[
                    "sidebar"=>"Pengaturan"
                ],compact('admin'));
    }

    public function updatedata_profil_admin(Request $request, $nip){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'username' => 'required|min:7|max:20',
            'jenis_kelamin' => 'required',
        ]);

        $admin = User::where('id',$nip)->update([
            'foto' => $request->foto,
            'username' => $request->username,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => bcrypt($request->username)
        ]);
        
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('profil_admin')->with('berhasil', 'Profil berhasil di EDIT');
    }
}
