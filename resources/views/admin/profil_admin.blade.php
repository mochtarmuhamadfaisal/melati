@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Profil</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="content">
            
                <div class="row row-profile d-flex justify-content-lg-start ">
                    <div class="col-lg-3 col-12">
                        <img class="rounded-circle mb-5 mb-lg-0" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt=""
                            style="width: 250px; height: 250px; border: 4px solid #2390B9; object-fit:cover;">
                    </div>
                    <div class="col-lg-3 col-12 ms-0 ms-lg-5">
                        <div class="mb-4 mt-5 mt-lg-0">
                            <h5 class="fw-bold" style="color: #2390B9;">Nama</h5>
                            <p class="mb-5">{{ Auth::user()->nama }}</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="fw-bold" style="color: #2390B9;">NIP</h5>
                            <p>{{ Auth::user()->username }}</p>
                        </div>
                        <div class="">
                            <h5 class="fw-bold" style="color: #2390B9;">Jenis Kelamin</h5>
                            <p>{{ Auth::user()->jenis_kelamin }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12 ms-0  mt-5 mt-lg-0 ms-lg-5 align-self-center">
                        <a href="/tampilkan_profil_admin"><button type="button" class="btn-admin rounded-pill">Edit
                                Profil</button></a>
                    </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-start mt-5">
                <a href="/pengaturan_admin" class="text-decoration-none">
                    <p class="text-muted"><span class="">
                            <</span>Kembali</p>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Konten -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- allert sweet allert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if (Session::has('berhasil'))
            swal({
                title: "Berhasil!",
                text: "{{ Session::get('berhasil') }}",
                icon: "success",
                button: "Oke",
            });
        @endif
    </script>
@endsection
