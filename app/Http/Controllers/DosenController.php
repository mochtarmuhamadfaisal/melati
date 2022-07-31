<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen(){
        $datadosen = Dosen::all();

        return view('admin/dosen',[
            "sidebar"=>"Dosen"
        ],compact('datadosen'));
    }

    public function tambahdosen(){
        return view('admin/tambah_dosen',[
            "sidebar"=>"Dosen"
        ]);
    }

    public function insertdata_dosen(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:3|max:255',
            'nip' => 'required|min:7|max:20',
            'jeniskelamin' => 'required',
        ]);

        $dosen = Dosen::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip)
        ]);

        $dosen->assignRole('dosen');

        // dd($request->all());
        // Dosen::create($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di buat');
    }

    public function tampilkan_dosen($nip){
        $datadosen = Dosen::where('nip',$nip)->first();
        // dd($datadosen);
        return view('admin/edit_dosen',[
                    "sidebar"=>"Dosen"
        ],compact('datadosen'));
    }

    public function updatedata_dosen(Request $request, $nip){
        // dd($request,$nip);
        $this->validate($request,[
            'nama' => 'required|min:3|max:25',
            'nip' => 'required|min:7|max:20',
            'jeniskelamin' => 'required',
        ]);

        $datadosen = Dosen::where('nip',$nip)->update([
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'jeniskelamin'=>$request->jeniskelamin
        ]);
        // $datadosen->update($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di EDIT');
    }

    public function delete($nip){
        $datadosen = Dosen::where('nip',$nip)->delete();
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }
}
