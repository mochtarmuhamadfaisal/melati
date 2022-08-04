<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class DasboardadminController extends Controller
{
    public function dashboard_admin(){
        $datadosen = Dosen::count();
        $datamahasiswa = Mahasiswa::count();
        $datamatkuliah = Matakuliah::count();
        return view('admin/dashboard_admin',[
                    "sidebar"=>"Dashboard"
                ],compact('datadosen','datamahasiswa','datamatkuliah'));
    }
}
