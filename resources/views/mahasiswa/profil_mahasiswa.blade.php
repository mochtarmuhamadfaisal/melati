@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-profile.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE PROFILE -->
    <section class="checkout">
        <div class="container" style="margin-top: 1rem;">
            <div class="row row-judul text-center">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class=" text-fitur" style="margin-top: 6rem; margin-bottom: 1px;">
                        PROFIL🙍‍♂️
                    </p>
                    <h2 class="text-judul-fitur" style="margin-bottom: 3rem;">
                        Kumpulan Project Mahasiswa
                    </h2>
                </div>
            </div>

            <div class="row row-profile d-flex justify-content-center mt-5">
                <div class="col-lg-3 col-12">
                    <img class="rounded-circle mb-5 mb-lg-0" src="{{ asset('img/gue.jpg') }}" alt=""
                        style="width: 250px; height: 250px; border: 4px solid var(--warna-pertama);">
                </div>
                <div class="col-lg-3 col-12">
                    <form action="#" class="basic-form">
                        <div class="mb-4 mt-5 mt-lg-0">
                            <h5 class="fw-bold" style="color: #2390B9;">Nama</h5>
                            <p class="mb-5">{{ Auth::user()->nama }}</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="fw-bold" style="color: #2390B9;">NIM</h5>
                            <p>{{ Auth::user()->username }}</p>
                        </div>
                        <div class="mb-5">
                            <h5 class="fw-bold" style="color: #2390B9;">Jenis Kelamin</h5>
                            <p>{{ Auth::user()->jenis_kelamin }}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR PAGE PROFILE -->
@endsection
