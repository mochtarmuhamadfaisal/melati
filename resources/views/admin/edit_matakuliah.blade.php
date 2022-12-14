@extends('layouts.main_admin')

@section('konten_admin')
<!-- Awal Konten -->
<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h2 class="nav-title">Edit Mata Kuliah</h2>
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                </button>
            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <form action="">
                <div class="mb-4">
                    <label for="formGroupExampleInput" class="form-label fw-bold" style="color: #2390B9;">Mata
                        Kuliah</label>
                    <input type="text" class="form-control rounded-pill p-2 px-3" id="formGroupExampleInput"
                        placeholder="">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-admin rounded-pill mt-2">Simpan</button>
                </div>
            </form>
            <div class="d-flex justify-content-start">
                <a href="/matakuliah" class="text-decoration-none">
                    <p class="text-muted"><span class="">
                            <</span>Kembali</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Konten -->    
@endsection