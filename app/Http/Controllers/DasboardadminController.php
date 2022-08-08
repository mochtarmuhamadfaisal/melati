<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class DasboardadminController extends Controller
{
    public function dashboard_admin(){
        $datadosen = User::where('role_id', 2)->count();
        $datamahasiswa = User::where('role_id', 3)->count();
        $datamatkuliah = Matakuliah::count();
        return view('admin/dashboard_admin',[
                    "sidebar"=>"Dashboard"
                ],compact('datadosen','datamahasiswa','datamatkuliah'));
    }
}
