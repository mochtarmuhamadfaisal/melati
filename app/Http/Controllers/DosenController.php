<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{

    public function dashboard_dosen (){
        $datamateri = Materi::where('id_user',Auth::user()->id)->count();
        return view('dosen/dashboard_dosen',[
            "sidebar"=>"Dashboard"
        ],compact('datamateri'));
    }

    // public function tampil_data_kelas(Request $request){
    //     if($request->ajax()){
    //         $data = $request->all();
    //         $tampilDataKelas = Matakuliah::where([
    //             'id'=>$data['matakuliah_id'],
    //         ])->first();
    //         echo $tampilDataKelas->kelas;
    //     }
    // }

    public function dosen(){
        $datadosen = User::where('role_id', 2)->get();

        return view('admin.dosen',[
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
            'nip' => 'required|min:7|max:30',
            'jeniskelamin' => 'required',
        ]);

        //@dd($request->nip);
        $datadosen = User::create([
            'username' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jeniskelamin,
            'password' => bcrypt($request->nip),
            'role_id' => 2,
        ]);


        // dd($request->all());
        // Dosen::create($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di buat');
    }

    public function tampilkan_dosen($nip){
        $datadosen = User::where('id',$nip)->first();
        // dd($datadosen);
        return view('admin.edit_dosen',[
                    "sidebar"=>"Dosen"
        ],compact('datadosen'));
    }

    public function updatedata_dosen(Request $request, $nip){
        //dd($request,$nip);
        $this->validate($request,[
            'nama' => 'required|min:3|max:25',
            'username' => 'required|min:7|max:20',
            'jenis_kelamin' => 'required',
        ],
        [
            'username.required' => 'NIP kosong',
        ]);

        //dd($request);
        // $datadosen = Dosen::find($nip);
        $datadosen = User::where('id',$nip)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => bcrypt($request->username)
        ]);
        // $datadosen->assignRole('dosen');
        // $datadosen->update($request->all());
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di EDIT');
    }

    public function delete($id){
        $datadosen = User::where('id',$id)->delete();
        return redirect()->route('dosen')->with('berhasil', 'Akun dosen berhasil di HAPUS');
    }

    public function pengaturan_dosen (){
        return view('dosen/pengaturan_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    }
}
