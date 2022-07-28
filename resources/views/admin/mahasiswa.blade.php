@extends('layouts.main_admin')
@section('konten_admin')
<!-- Awal Konten -->
<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h2 class="nav-title">Kelola Akun Mahasiswa</h2>
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                </button>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="btn-content  mb-1 mt-3">
                <a href="/tambah_mahasiswa" class="btn btn-tambahakun"><span class="fw-bold">+</span>
                    Tambah Akun Mahasiswa</a>
            </div>

            <!-- AWAL Table Untuk Mahasiswa  -->
            <div class="col-11 mt-4">
                <table id="example" class="table table-borderless w-100">
                    <thead style="background-color: #D4F3FF;">
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th class="action-header text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mochtar Muhammad Faisal</td>
                            <td>3201916018</td>
                            <td>laki-laki</td>
                            <td class="action">
                                <a href="/edit_mahasiswa" class="text-decoration-none"><button
                                        class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>
                                <button class="btn-transaction bg-danger text-white mx-auto">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- AKHIR Table Untuk Mahasiswa  -->
        </div>
    </div>
</div>
<!-- Akhir Konten -->
@endsection