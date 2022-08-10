@extends('layouts.main_dosen')
@section('konten_dosen')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Kelola Materi</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="btn-content mb-1 mt-3">
                    <a href="/tambah_materi" class="btn btn-tambahakun">+</span> Tambah Materi</a>
                </div>

                <!-- AWAL Table Untuk Mata Kuliah  -->
                <div class="col-11 mt-4" style="overflow-x: auto">
                    <table id="example" class="table table-borderless w-100">
                        <thead style="background-color: #D4F3FF;">
                            <tr>
                                <th>No</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Link Video</th>
                                <th>Judul Materi</th>
                                <th>Deskripsi Materi</th>
                                <th>Upload Materi</th>
                                <th>Upload Soal</th>
                                <th>Link Grup Diskusi</th>
                                <th>Password Diskusi</th>
                                <th class="action-header text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($datamateri as $rowmateri)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $rowmateri->semester }}</td>
                                <td>{{ $rowmateri->kelas }}</td>
                                <td>{{ $rowmateri->matakuliah->nama_matakuliah }}</td>
                                <td>{{ $rowmateri->link_video }}</td>
                                <td>{{ $rowmateri->judul_video}}</td>
                                <td>{{ $rowmateri->deskripsi_video }}</td>
                                <td><a href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank" download>{{ $rowmateri->upload_modul }}</a></td>
                                <td><a href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank" download>{{ $rowmateri->upload_soal }}</a></td>
                                <td>{{ $rowmateri->link_grupdiskusi }}</td>
                                <td>{{ $rowmateri->password_diskusi }}</td>
                                <td>
                                    <a href="/edit_materi" class="text-decoration-none"><button
                                            class="btn-transaction  bg-warning  px-4 text-white mb-2">Edit</button></a>
                                    <button class="btn-transaction  bg-danger  px-4 text-white ">Hapus</button>
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
    <!-- Awal Konten -->
@endsection