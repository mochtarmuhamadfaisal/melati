@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Edit Akun Mahasiswa</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6">
                <form action="/updatedata_mahasiswa/{{ $datamahasiswa->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold" style="color: #2390B9;">Nama
                            Dosen</label>
                        <input type="text" name="nama" value="{{ $datamahasiswa->nama }}" class="form-control rounded-pill p-2 px-3"
                            id="formGroupExampleInput" placeholder="Masukan Nama Mahasiswa..."  required autofocus>
                        @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold" style="color: #2390B9;">NIP</label>
                        <input type="number" name="nim" value="{{ $datamahasiswa->nim }}" class="form-control rounded-pill p-2 px-3"
                            id="formGroupExampleInput" placeholder="Masukan NIP Dosen..." required>
                        @error('nip')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Jenis Kelamin
                        </label>
                        <select class="form-select rounded-pill py-2" name="jeniskelamin"
                            aria-label="Default select example" id="recipient-name" name="jeniskelamin">
                            <option selected disabled>{{ $datamahasiswa->jeniskelamin }}</option>
                            <option value="Laki-laki">laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill mt-2">Simpan</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="/mahasiswa" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Awal Konten -->
@endsection