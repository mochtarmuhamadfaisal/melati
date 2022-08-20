@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Edit Akun Dosen</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>

        </div>

        <div class="row mt-3 ms-lg-0 ms-1 me-lg-0 me-2">
            <div class="col-lg-6">
                <form action="/updatedata_dosen/{{ $datadosen->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold"
                            style="color: #2390B9;">Nama</label>
                        <input type="text" name="nama" value="{{ $datadosen->nama }}" class="form-control rounded-pill p-2 px-3" id="formGroupExampleInput"
                            placeholder="" required autofocus>
                            @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold"
                            style="color: #2390B9;">NIP</label>
                        <input type="text" name="username" value="{{ $datadosen->username }}" class="form-control rounded-pill p-2 px-3" id="formGroupExampleInput"
                            placeholder="">
                            @error('username')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Jenis
                            Kelamin
                        </label>
                        <select class="form-select rounded-pill py-2" name="jenis_kelamin"
                        aria-label="Default select example" id="recipient-name" name="jeniskelamin">
                        @if ($datadosen->jeniskelamin = 'Laki-laki')
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option selected value="Laki-laki">laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        @elseif($datadosen->jeniskelamin = 'Laki-laki')
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">laki-laki</option>
                        <option selected value="Perempuan">Perempuan</option>
                        @else
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        @endif
                    </select>
                        @error('jeniskelamin')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill mt-2">Simpan</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="/dosen" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->
@endsection