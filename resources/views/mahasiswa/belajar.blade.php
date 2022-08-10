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
                    <div class="row">
                        <div class=" col-9 mb-2 col-lg-4">
                            <div class="input-group mb-2 w-10">
                                <label class="pilihsemester input-group-text text-white " for="kabupaten"
                                    style="background-color:  var(--warna-pertama);">Pilih semester</label>
                                <select class="pilihsemester-form form-select" id="kabupaten" name="kabupaten">
                                    <option selected="">-</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="4">Semester 5</option>
                                    <option value="4">Semester 6</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-9 w-10 col-lg-4">
                            <div class="input-group mb-2 w-10">
                                <label class="pilihkelas input-group-text text-white" for="kabupaten"
                                    style="background-color: var(--warna-pertama);">Pilih kelas</label>
                                <select class="pilihkelas-form form-select" id="kabupaten" name="kabupaten">
                                    <option selected="">-</option>
                                    <option value="1">Kelas A</option>
                                    <option value="2">Kelas B</option>
                                    <option value="3">Kelas C</option>
                                    <option value="4">Kelas D</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-9 w-10 col-lg-4">
                            <a href="http:" class="btn btn-primary" type="submit">Cari</a> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <table class="table scroll" style="margin-left: 0.4rem;">
                    <tbody class="ini-batang-scroll" style="height: 100px;">
                        @foreach ($datamateri as $rowmateri) 
                        <tr class="align-middle">
                            <!-- <td width="18%">
                                <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                            </td> -->
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
