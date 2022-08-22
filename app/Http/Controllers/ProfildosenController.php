<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfildosenController extends Controller
{
    public function profil_dosen(){
        return view('dosen/profil_dosen',[
                    "sidebar"=>"Pengaturan"
                ]);
    }

    public function tampilkan_profil_dosen(){
        return view('dosen/edit_profil_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    }

    public function updatedata_profil_dosen(Request $request){

        $update_data_dosen = User::where('id', Auth::user()->id)->first();
        $update_data_dosen->nama = $request->nama;
        $update_data_dosen->username = $request->username;
        $update_data_dosen->jenis_kelamin = $request->jenis_kelamin;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $ekstensi = $file->getClientOriginalName();
            $filename = $ekstensi;
            $file->move('foto/', $filename);
            $update_data_dosen->foto = $filename;
        }
        $update_data_dosen->save();
        
        // $datamahasiswa = Mahasiswa::find($id);
        // $datamahasiswa->update($request->all());
        return redirect()->route('profil_dosen')->with('berhasil', 'Profil berhasil di EDIT');
    }

    public function edit_password_dosen (){
        return view('dosen/edit_password_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    }

    public function update_password_dosen(PasswordRequest $request){
        $update_data_dosen = User::where('id', Auth::user()->id)->first();
        $update_data_dosen->password = bcrypt($request->password);

        $update_data_dosen->save();
        return redirect()->route('pengaturan_dosen')->with('berhasil', 'Password berhasil di EDIT');
    }
}
