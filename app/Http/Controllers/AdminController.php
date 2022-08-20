<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profil_admin(){
        // $admin = User::where('role_id', 1)->get();
        return view('admin/profil_admin',[
                    "sidebar"=>"Pengaturan"
                ]);
    }

    public function tampilkan_profil_admin(){
        return view('admin.edit_profil_admin',[
                    "sidebar"=>"Pengaturan"
                ]);
    }

    public function updatedata_profil_admin(Request $request){

        $update_data_admin = User::where('id', Auth::user()->id)->first();
        $update_data_admin->nama = $request->nama;
        $update_data_admin->username = $request->username;
        $update_data_admin->password = bcrypt($request->password);
        $update_data_admin->jenis_kelamin = $request->jenis_kelamin;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('foto/', $filename);
            $update_data_admin->foto = $filename;
        }
        $update_data_admin->save();
        
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('profil_admin')->with('berhasil', 'Profil berhasil di EDIT');
    }
}
