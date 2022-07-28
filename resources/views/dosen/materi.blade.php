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
                            <tr>
                                <td>1</td>
                                <td>4</td>
                                <td>A</td>
                                <td>Pemrograman Mobile</td>
                                <td><iframe width="300" height="200" src="https://www.youtube.com/embed/2LFvHZuY4xU"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>15365</td>
                                <td>
                                    <a href="/edit_materi" class="text-decoration-none"><button
                                            class="btn-transaction  bg-warning  px-4 text-white mb-2">Edit</button></a>
                                    <button class="btn-transaction  bg-danger  px-4 text-white ">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- AKHIR Table Untuk dosen  -->
            </div>
        </div>
    </div>
    <!-- Awal Konten -->
@endsection