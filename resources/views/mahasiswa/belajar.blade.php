@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL BELAJAR-PILIH KELAS & MATAKULIAH -->
    <section class="dashboard my-5">
        <div class="container belajar" style="margin-left: 5rem;">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="text-fitur mb-1">
                        BELAJAR👨‍💻
                    </p>
                    <h2 class="primary-header text-judul-fitur mb-4" style="font-weight: 600;">
                        Pilih kelas anda terlebih dahulu
                    </h2>
                    <form action="/fillter" method="GET">
                        <div class="row">
                            <div class=" col-9 mb-2 col-lg-4">
                                <div class="input-group mb-2 w-10">
                                    <label class="pilihsemester input-group-text text-white " for="semester"
                                        style="background-color:  var(--warna-pertama);">Pilih semester</label>
                                    <select class="pilihsemester-form form-select" id="semester" name="semester">
                                        <option selected disabled="">Pilih Semester</option>
                                        <option value="1">Semester 1</option>
                                        <option value="2">Semester 2</option>
                                        <option value="3">Semester 3</option>
                                        <option value="4">Semester 4</option>
                                        <option value="5">Semester 5</option>
                                        <option value="6">Semester 6</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-9 w-10 col-lg-4">
                                <div class="input-group mb-2 w-10">
                                    <label class="pilihkelas input-group-text text-white" for="kelas"
                                        style="background-color: var(--warna-pertama);">Pilih kelas</label>
                                    <select class="pilihkelas-form form-select" id="kelas" name="kelas">
                                        <option selected disabled="">Pilih Kelas</option>
                                        <option value="A">Kelas A</option>
                                        <option value="B">Kelas B</option>
                                        <option value="C">Kelas C</option>
                                        <option value="D">Kelas D</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-9 w-10 col-lg-4">
                                <button class="btn btn-primary">Cari</button> 
                                <a href="/belajar" class="btn btn-info">Refresh</a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row my-5">
                <table class="table scroll" style="margin-left: 0.4rem;">
                    <tbody class="ini-batang-scroll" style="height: 100px;">
                        @foreach ($datamateri as $rowmateri) 
                        <tr class="align-middle">
                            <td>
                                <p class="mb-2">
                                    <strong>Nama Dosen</strong>
                                </p>
                                <p>{{ $rowmateri->users->nama }}</p>
                            </td>

                            <td>
                                <p class="mb-2">
                                    <strong>Mata Kuliah</strong>
                                </p>
                                <p>
                                    {{ $rowmateri->matakuliah->nama_matakuliah }}
                                </p>
                            </td>
                            
                            <td>
                                <a href="/belajar_video/{{ $rowmateri->users->id }}" class="btn-video btn btn-fill btn-danger py-2 px-4 ">
                                    Video
                                </a>
                            </td>
                            <td>
                                <a href="/belajar_diskusi" class="btn btn-warning py-2 px-4" style="color: white;"
                                    style="color: white;">
                                    Diskusi
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- AKHIR BELAJAR-PILIH KELAS & MATAKULIAH -->
@endsection
