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
                <form action="">
                    <div class="mb-5">
                        <label for="formGroupExampleInput3" class="form-label fw-bold"
                            style="color: #2390B9;">Semester</label>
                        <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                            id="formGroupExampleInput3">
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
                            id="formGroupExampleInput3">
                            <option selected disabled>Pilih kelas</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Mata
                            Kuliah
                        </label>
                        <select class="form-select rounded-pill py-2" aria-label="Default select example"
                            id="recipient-name">
                            <option selected>-</option>
                            <option value="a">Pemrograman Mobile</option>
                            <option value="b">Basis data</option>
                            <option value="c">Design</option>
                            <option value="d">Pemrograman Terapan</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Video
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name">
                                    </div>

                                    <div class=" mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Judul
                            Materi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name">
                    </div>

                    <div class=" mb-5">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold "
                            style="color: #2390B9">Deskripsi Materi </label>
                        <textarea class="form-control" style="border-radius: 15px;" id="exampleFormControlTextarea1"
                            rows="5"></textarea>
                    </div>

                    <div class=" mb-5">
                        <label for="myfile" class="fw-bold mb-2" style="color: #2390B9;">Upload Materi</label>
                        <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>

                    <div class="mb-5">
                        <label for="inputGroupFile04" class="fw-bold mb-2" style="color: #2390B9;">Upload Soal</label>
                        <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>

                    <div class="mb-5">
                        <label for="inputGroupFile04" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Grup Diskusi
                        </label>
                        <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>

                    <div class=" mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Password
                            Diskusi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" ">
                                    </div>
                    <div class=" d-flex justify-content-end">
                        <button type="button" class="btn-admin rounded-pill mt-4">Tambah</button>
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