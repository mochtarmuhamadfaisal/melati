@extends('layouts.main_admin')
@section('konten_admin')
<!-- Awal Konten -->
<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h2 class="nav-title">Kelola Akun Dosen</h2>
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                </button>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="btn-content  mb-1 mt-3">
                <a href="/tambah_dosen" class="btn btn-tambahakun"><span class="fw-bold">+</span>
                    Tambah Akun Dosen</a>
            </div>

            <!-- AWAL Table Untuk dosen  -->
            <div class="col-11 mt-4">
                <table id="example" class="table table-borderless w-100">
                    <thead style="background-color: #D4F3FF;">
                        <tr>
                            <th>Nama Dosen</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th class="action-header text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($datadosen as $row)    
                        <tr>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->jeniskelamin }}</td>
                            <td class="action">
                                <a href="/edit_dosen" class="text-decoration-none"><button
                                        class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>
                                <a href="" class="text-decoration-none"><button
                                        class="btn-transaction bg-danger text-white mx-auto">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- AKHIR Table Untuk dosen  -->
        </div>
    </div>
</div>
<!-- Akhir Konten -->
@endsection