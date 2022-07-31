<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/login', function(){
    return view('login/login',[
        "navbar"=>"Login"
    ]);
});





// ========================== AWAL ROUTE ADMIN ==========================
Route::get('/dashboard_admin', function(){
    return view('admin/dashboard_admin',[
        "sidebar"=>"Dashboard"
    ]);
});





Route::get('/matakuliah', function(){
    return view('admin/matakuliah',[
        "sidebar"=>"Mata Kuliah"
    ]);
});

Route::get('/tambah_matakuliah', function(){
    return view('admin/tambah_matakuliah',[
        "sidebar"=>"Mata Kuliah"
    ]);
});

Route::get('/edit_matakuliah', function(){
    return view('admin/edit_matakuliah',[
        "sidebar"=>"Mata Kuliah"
    ]);
});





Route::get('/dosen',[DosenController::class, 'dosen'])->name('dosen');

Route::get('/tambah_dosen',[DosenController::class, 'tambahdosen'])->name('tambahdosen');
Route::post('/insertdata_dosen',[DosenController::class, 'insertdata_dosen'])->name('insertdata_dosen');

Route::get('/tampilkan_dosen/{nip}',[DosenController::class, 'tampilkan_dosen'])->name('tampilkan_dosen');
Route::put('/updatedata_dosen/{nip}',[DosenController::class, 'updatedata_dosen'])->name('updatedata_dosen');

Route::get('/delete/{nip}',[DosenController::class, 'delete'])->name('dosen.delete');





Route::get('/mahasiswa',[MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');

Route::get('/tambah_mahasiswa',[MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::post('/insertdata_mahasiswa',[MahasiswaController::class, 'insertdata_mahasiswa'])->name('insertdata_mahasiswa');

Route::get('/tampilkan_mahasiswa/{id}',[MahasiswaController::class, 'tampilkanmahasiswa'])->name('tampilkanmahasiswa');
Route::post('/updatedata_mahasiswa/{id}',[MahasiswaController::class, 'updatedata_mahasiswa'])->name('updatedata_mahasiswa');

Route::get('/delete/{id}',[MahasiswaController::class, 'delete'])->name('delete');





Route::get('/pengaturan_admin', function(){
    return view('admin/pengaturan_admin',[
        "sidebar"=>"Pengaturan"
    ]);
});

Route::get('/profil_admin', function(){
    return view('admin/profil_admin',[
        "sidebar"=>"Pengaturan"
    ]);
});

Route::get('/edit_profil_admin', function(){
    return view('admin/edit_profil_admin',[
        "sidebar"=>"Pengaturan"
    ]);
});

Route::get('/edit_password_admin', function(){
    return view('admin/edit_password_admin',[
        "sidebar"=>"Pengaturan"
    ]);
});
// ========================== AKHIR ROUTE ADMIN ==========================





// ========================== AWAL ROUTE DOSEN ==========================
Route::get('/dashboard_dosen', function(){
    return view('dosen/dashboard_dosen',[
        "sidebar"=>"Dashboard"
    ]);
});





Route::get('/materi', function(){
    return view('dosen/materi',[
        "sidebar"=>"Materi"
    ]);
});

Route::get('/tambah_materi', function(){
    return view('dosen/tambah_materi',[
        "sidebar"=>"Materi"
    ]);
});

Route::get('/edit_materi', function(){
    return view('dosen/edit_materi',[
        "sidebar"=>"Materi"
    ]);
});





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
// ========================== AWAL ROUTE DOSEN ==========================





// ========================== AWAL ROUTE MAHASISWA ==========================
Route::get('/beranda_mahasiswa', function(){
    return view('mahasiswa/beranda_mahasiswa',[
        "navbar"=>"Beranda"
    ]);
});





Route::get('/belajar', function(){
    return view('mahasiswa/belajar',[
        "navbar"=>"Belajar"
    ]);
});

Route::get('/belajar_video', function(){
    return view('mahasiswa/belajar_video',[
        "navbar"=>"Belajar"
    ]);
});

Route::get('/belajar_diskusi', function(){
    return view('mahasiswa/belajar_diskusi',[
        "navbar"=>"Diskusi"
    ]);
});





Route::get('/showcase', function(){
    return view('mahasiswa/showcase',[
        "navbar"=>"Showcase"
    ]);
});

Route::get('/showcase_detail', function(){
    return view('mahasiswa/showcase_detail',[
        "navbar"=>"Showcase"
    ]);
});





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

Route::get('/pamerin_showcase', function(){
    return view('mahasiswa/pamerin_showcase',[
        "navbar"=>"Pengaturan"]);
});
// ========================== AKHIR ROUTE MAHASISWA ==========================