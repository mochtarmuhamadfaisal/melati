@extends('layouts.main_dosen')
@section('konten_dosen')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Tambah Materi</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>

        </div>


        <div class="row mt-4">
            <div class="col-11">
                <form action="{{ route('insertdata_materi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="formGroupExampleInput3" class="form-label fw-bold"
                            style="color: #2390B9;">Semester</label>
                        <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                            id="formGroupExampleInput3" name="semester">
                            <option selected disabled>Pilih Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="formGroupExampleInput3" class="form-label fw-bold"
                            style="color: #2390B9;">Kelas</label>
                        <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                            id="formGroupExampleInput3" name="kelas">
                            <option selected disabled>Pilih kelas</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Mata
                            Kuliah
                        </label>
                        <select class="form-select rounded-pill py-2" aria-label="Default select example"
                            id="recipient-name" name="id_matakuliah">
                            <option selected>-</option>
                            @php
                                $data_matakuliah=\App\Models\Matakuliah::all();
                            @endphp
                            @foreach ($data_matakuliah as $baris_mk)
                            <option value="{{ $baris_mk->id }}">{{ $baris_mk->nama_matakuliah }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Video
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="link_video">
                                    </div>
                                    
                        <div class=" mb-5">

                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Judul
                            Materi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="judul_video">
                    </div>

                    <div class=" mb-5">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold "
                            style="color: #2390B9">Deskripsi Materi</label>
                        <textarea class="form-control ckeditor" style="border-radius: 15px;" id="exampleFormControlTextarea1"
                            rows="5" name="deskripsi_video"></textarea>
                    </div>

                    <div class=" mb-5">
                        <label for="myfile" class="fw-bold mb-2" style="color: #2390B9;">Upload Modul</label>
                        <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="upload_modul">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="inputGroupFile04" class="fw-bold mb-2" style="color: #2390B9;">Upload Soal</label>
                                <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="upload_soal">
                            </div>
                        </div>
    
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Password Soal
                                </label>
                                <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="password_soal">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="inputGroupFile04" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Grup Diskusi
                        </label>
                        <input type="text" class="form-control rounded-pill" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="link_grupdiskusi">
                    </div>

                    <div class=" mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Password
                            Diskusi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="password_diskusi">
                                    </div>
                    <div class=" d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill mt-4">Tambah</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="/materi" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Awal Konten -->
@endsection