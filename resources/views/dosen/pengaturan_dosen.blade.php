@extends('layouts.main_dosen')
@section('konten_dosen')
     <!-- Awal Konten -->
     <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Pengaturan</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>

        
        <div class="content">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/profil_dosen" class="text-decoration-none">
                        <div class="statistics-card simple">
                            <div class="d-flex justify-content-between align-items-center">
                                <div
                                    class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    <h5 class="content-desc">Pengaturan</h5>
                                    <h3 class="statistics-value">Profil</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/edit_password_dosen" class="text-decoration-none">
                        <div class="statistics-card simple">
                            <div class="d-flex justify-content-between align-items-center">
                                <div
                                    class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    <h5 class="content-desc">Pengaturan</h5>
                                    <h3 class="statistics-value">Password</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Akhir Konten -->
@endsection