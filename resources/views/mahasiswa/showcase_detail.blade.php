@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-showcase-detail.css') }}">
@endpush
@section('konten_mahasiswa')
     <!-- AWAL PAGE SHOWCASE-DETAIL -->
     <section class="checkout">
        <div class="container" style="margin-top: 1rem;">
            <div class="row text-center">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class=" text-fitur" style="margin-top: 6rem; margin-bottom: 1px;">
                        SHOWCASE🤹‍♀️
                    </p>
                    <h2 class="text-judul-fitur">
                        Kumpulan Project Mahasiswa
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{ asset('showcase') }}/{{ $datashowcase->foto }}" alt=""
                                    class="cover img-fluid w-100 h-100" style="border-radius: 18px;">
                                <h1 class="text-judul-fitur mt-4">
                                    {{ $datashowcase->judul_project }}
                                </h1>
                                <p class="text-caption lh-lg mb-5">
                                    {!! $datashowcase->deskripsi_project !!}
                                </p>

                                <a href="/showcases" class="text-decoration-none " style="color: #2390B9;">
                                    <i class='bx bx-chevron-left mb-5 mb-lg-0'></i>Kembali ke showcase</a>

                            </div>
                        </div>

                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="#" class="basic-form">
                                <div class="mb-4">
                                    <h5 class="fw-bold" style="color: #2390B9;">Foto</h5>
                                    <img src="{{ asset('foto') }}/{{ $datashowcase->users->foto }}" width="120px;" height="120px" alt="" class="rounded-circle me-1 mb-3" style="border: solid 3px #2390B9; object-fit: cover;">
                                </div>
                                <div class="mb-4">
                                    <h5 class="fw-bold" style="color: #2390B9;">Nama</h5>
                                    <p class="mb-5">{{ $datashowcase->users->nama }}</p>
                                </div>
                                {{-- <div class="mb-5">
                                    <h5 class="fw-bold" style="color: #2390B9;">NIM</h5>
                                    <p>{{ $datashowcase->users->username }}</p>
                                </div> --}}
                                <div class="mb-5">
                                    <h5 class="fw-bold" style="color: #2390B9;">Mata Kuliah</h5>
                                    <p>{{ $datashowcase->matakuliah->nama_matakuliah }}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR PAGE SHOWCASE-DETAIL -->
@endsection