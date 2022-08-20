
@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Dashboard</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>

        
        <div class="content">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="statistics-card simple">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                <h5 class="content-desc">Jumlah Dosen</h5>
                                <h3 class="statistics-value">{{ $datadosen }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="statistics-card simple">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                <h5 class="content-desc">Jumlah Mahasiswa</h5>

                                <h3 class="statistics-value">{{ $datamahasiswa }}</h3>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="statistics-card simple">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                <h5 class="content-desc">Jumlah Mata kuliah</h5>
                                <h3 class="statistics-value">{{ $datamatkuliah }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->
@endsection