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
            'nama' => 'required|min:3|max:25',
            'nip' => 'required|min:7|max:20',
        ]);

        // dd($request->all());
        Dosen::create($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di buat');
    }

    public function tampilkan_dosen($id){
        $datadosen = Dosen::find($id);
        // dd($datadosen);
        return view('admin/edit_dosen',[
                    "sidebar"=>"Dosen"
        ],compact('datadosen'));
    }

    public function updatedata_dosen(Request $request, $id){
        $this->validate($request,[
            'nama' => 'required|min:3|max:25',
            'nip' => 'required|min:7|max:20',
        ]);

        $datadosen = Dosen::find($id);
        $datadosen->update($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di EDIT');
    }

    public function delete($id){
        $datadosen = Dosen::find($id);
        $datadosen->delete();
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }
}
