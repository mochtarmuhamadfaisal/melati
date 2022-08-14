<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\DasboardadminController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ShowcaseController;
use App\Models\Showcase;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth', 'rolemelati:admin'])->group(function () {
    //admin
    Route::get('/dashboard_admin', [DasboardadminController::class, 'dashboard_admin'])->name('dashboard.admin');
    Route::get('/pengaturan_admin', function(){
        return view('admin/pengaturan_admin',[
            "sidebar"=>"Pengaturan"
        ]);
    });
    Route::get('/edit_password_admin', function(){
        return view('admin/edit_password_admin',[
            "sidebar"=>"Pengaturan"
        ]);
    });
    Route::get('/profil_admin',[AdminController::class, 'profil_admin'])->name('profil_admin');
    Route::get('/tampilkan_profil_admin/{nip}',[AdminController::class, 'tampilkan_profil_admin'])->name('tampilkan_profil_admin');
    Route::put('/updatedata_profil_admin/{nip}',[AdminController::class, 'updatedata_profil_admin'])->name('updatedata_profil_admin');

    //matakuliah
    Route::get('/matakuliah',[MatakuliahController::class, 'matakuliah'])->name('matakuliah');
    Route::get('/tambah_matakuliah',[MatakuliahController::class, 'tambah_matakuliah'])->name('tambah_matakuliah');
    Route::post('/insertdata_matakuliah',[MatakuliahController::class, 'insertdata_matakuliah'])->name('insertdata_matakuliah');
    Route::get('/tampilkan_matakuliah/{id}',[MatakuliahController::class, 'tampilkan_matakuliah'])->name('tampilkan_matakuliah');
    Route::put('/updatedata_matakuliah/{id}',[MatakuliahController::class, 'updatedata_matakuliah'])->name('updatedata_matakuliah');
    Route::get('/delete_matakuliah/{id}',[MatakuliahController::class, 'delete'])->name('delete');

    //dosen
    Route::get('/dosen',[DosenController::class, 'dosen'])->name('dosen');
    Route::get('/tambah_dosen',[DosenController::class, 'tambahdosen'])->name('tambahdosen');
    Route::post('/insertdata_dosen',[DosenController::class, 'insertdata_dosen'])->name('insertdata_dosen');
    Route::get('/tampilkan_dosen/{nip}',[DosenController::class, 'tampilkan_dosen'])->name('tampilkan_dosen');
    Route::put('/updatedata_dosen/{nip}',[DosenController::class, 'updatedata_dosen'])->name('updatedata_dosen');
    Route::get('/delete_dosen/{id}',[DosenController::class, 'delete'])->name('delete');

    Route::get('/matakuliah/{id}',[DosenController::class, 'tampil_data_kelas']);

    // Route::post('/tampilDataKelas',[DosenController::class, 'tampil_data_kelas']);

    //mahasiswa
    Route::get('/mahasiswa',[MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
    Route::get('/tambah_mahasiswa',[MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/insertdata_mahasiswa',[MahasiswaController::class, 'insertdata_mahasiswa'])->name('insertdata_mahasiswa');
    Route::get('/tampilkan_mahasiswa/{nip}',[MahasiswaController::class, 'tampilkan_mahasiswa'])->name('tampilkan_mahasiswa');
    Route::put('/updatedata_mahasiswa/{nip}',[MahasiswaController::class, 'updatedata_mahasiswa'])->name('updatedata_mahasiswa');
    Route::get('/delete_mahasiswa/{nip}',[MahasiswaController::class, 'delete'])->name('delete');
});

Route::middleware(['auth','rolemelati:dosen'])->group(function (){
    Route::get('/dashboard_dosen',[DosenController::class, 'dashboard_dosen'])->name('dashboard.dosen');

    // Route::get('/dashboard_dosen', function(){
    //     return view('dosen/dashboard_dosen',[
    //         "sidebar"=>"Dashboard"
    //     ]);
    // })->name('dashboard.dosen');
    Route::get('/pengaturan_dosen', function(){
        return view('dosen/pengaturan_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    });
    Route::get('/profil_dosen', function(){
        return view('dosen/profil_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    });
    Route::get('/edit_profil_dosen', function(){
        return view('dosen/edit_profil_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    });
    Route::get('/edit_password_dosen', function(){
        return view('dosen/edit_password_dosen',[
            "sidebar"=>"Pengaturan"
        ]);
    });

     //materi
     Route::get('/materi',[MateriController::class, 'materi'])->name('materi');
     Route::get('/tambah_materi',[MateriController::class, 'tambah_materi'])->name('tambah_materi');
     Route::post('/insertdata_materi',[MateriController::class, 'insertdata_materi'])->name('insertdata_materi');
     Route::get('/tampilkan_materi/{id}',[MateriController::class, 'tampilkan_materi'])->name('tampilkan_materi');
     Route::put('/updatedata_materi/{id}',[MateriController::class, 'updatedata_materi'])->name('updatedata_materi');
     Route::get('/delete_materi/{id}',[MateriController::class, 'delete_materi'])->name('delete_materi');
    });


Route::middleware(['auth','rolemelati:mahasiswa'])->group(function (){
    Route::get('/profil_mahasiswa', function(){
        return view('mahasiswa/profil_mahasiswa',[
            "navbar"=>"Profil"]);
    });
    Route::get('/edit_profil_mahasiswa', function(){
        return view('mahasiswa/edit_profil_mahasiswa',[
            "navbar"=>"Pengaturan"]);
    });
    Route::get('/pengaturan_mahasiswa', function(){
        return view('mahasiswa/pengaturan_mahasiswa',[
            "navbar"=>"Pengaturan"]);
    });
    Route::get('/edit_password_mahasiswa', function(){
        return view('mahasiswa/edit_password_mahasiswa',[
            "navbar"=>"Pengaturan"]);
    });

    //belajar video
    Route::get('/fillter',[BelajarController::class, 'fillter'])->name('fillter');
    Route::get('/belajar',[BelajarController::class, 'belajar'])->name('belajar');
    Route::get('/belajar_video/{id}',[BelajarController::class, 'belajar_video'])->name('belajar_video');
    Route::post('/cek_password_soal',[BelajarController::class, 'cek_password_soal'])->name('cek_password_soal');
    

    

    //showcase
    Route::post('/tambah_showcase',[ShowcaseController::class, 'tambah_showcase'])->name('tambah_showcase');
    Route::get('/insertdata_showcase',[ShowcaseController::class, 'insertdata_showcase'])->name('insertdata_showcase');
    Route::get('/tampilakandata_showcase/{id}',[ShowcaseController::class, 'tampilakandata_showcase'])->name('tampilakandata_showcase');
    Route::put('/updatedata_showcase/{id}',[ShowcaseController::class, 'updatedata_showcase'])->name('updatedata_showcase');
    Route::get('/delete_showcase/{id}',[ShowcaseController::class, 'delete_showcase'])->name('delete_showcase');
});

Route::get('/showcase',[ShowcaseController::class, 'showcase'])->name('showcase');
    Route::get('/showcase_detail/{id}',[ShowcaseController::class, 'showcase_detail'])->name('showcase_detail');

    // Diskusi
Route::middleware(['auth','rolemelati:mahasiswa,dosen'])->group(function (){
    Route::get('/belajar_diskusi', [DiskusiController::class, 'belajar_diskusi'])->name('belajar_diskusi');
    Route::post('/tambah_diskusi', [DiskusiController::class, 'tambah_diskusi'])->name('tambah_diskusi');
    Route::post('/tambah_jawaban', [DiskusiController::class, 'tambah_jawaban'])->name('tambah_jawaban');
    Route::get('/delete_komentar/{id}',[MatakuliahController::class, 'delete'])->name('delete');
});
// route yang tidak perlu loginnnnnnnn
Route::middleware('guest')->group(function(){
    Route::get('/loginakun', [LoginController::class, 'index'])->name('loginakun');
    Route::post('/loginakun', [LoginController::class, 'login'])->name('loginakun.post');
    Route::post('/logoutakun1', [LoginController::class, 'logout'])->name('logoutakun1');

    
});



// ========================== AWAL ROUTE ADMIN ==========================

// ========================== AKHIR ROUTE MAHASISWA ==========================
Auth::routes();
Route::get('/',[MahasiswaController::class, 'beranda'] )->name('beranda');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
