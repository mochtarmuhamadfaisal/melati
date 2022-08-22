@extends('layouts.main_admin')
@section('konten_admin')
<!-- Awal Konten -->
<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h2 class="nav-title">Pengaturan</h2>
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="rounded-circle" alt="">
                </button>
            </div>
        </div>

    </div>


    <div class="content">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="/profil_admin" class="text-decoration-none">
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
                <a href="/edit_password_admin" class="text-decoration-none">
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

            <!-- <div class="col-12 col-md-6 col-lg-4">
                <div class="statistics-card simple">

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                            <h5 class="content-desc">Jumlah Mata kuliah</h5>

                            <h3 class="statistics-value">40</h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Awal Konten -->

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