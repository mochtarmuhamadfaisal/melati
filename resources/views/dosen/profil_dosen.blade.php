@extends('layouts.main_dosen')
@section('konten_dosen')
   <!-- Awal Konten -->
   <div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h2 class="nav-title">Profil</h2>
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                </button>
            </div>
        </div>

    </div>


    <div class="content">
        <div class="row row-profile d-flex justify-content-lg-start ">
            <div class="col-lg-3 col-12">
                <img class="rounded-circle mb-5 mb-lg-0" src="{{ asset('img/gue.jpg') }}" alt=""
                    style="width: 250px; height: 250px; border: 4px solid #2390B9;">
            </div>
            <div class="col-lg-3 col-12 ms-0 ms-lg-5">
                <div class="mb-4 mt-5 mt-lg-0">
                    <h5 class="fw-bold" style="color: #2390B9;">Nama</h5>
                    <p class="mb-5">Mochtar Muhammad Faisal</p>
                </div>
                <div class="mb-5">
                    <h5 class="fw-bold" style="color: #2390B9;">NIP</h5>
                    <p>3201916018</p>
                </div>
                <div class="">
                    <h5 class="fw-bold" style="color: #2390B9;">Jenis Kelamin</h5>
                    <p>Laki-laki</p>
                </div>
            </div>

            <div class="col-lg-3 col-12 ms-0  mt-5 mt-lg-0 ms-lg-5 align-self-center">
                <a href="/edit_profil_dosen"><button type="button" class="btn-admin rounded-pill">Edit
                        Profile</button></a>
            </div>
        </div>

        <div class="row">
            <div class="d-flex justify-content-start mt-5">
                <a href="/pengaturan_dosen" class="text-decoration-none">
                    <p class="text-muted"><span class="">
                            <</span>Kembali</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Konten -->
@endsection