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
                                <img src="{{ asset('img/Instagram post - FIX.png') }}" alt=""
                                    class="cover img-fluid w-100 h-100" style="border-radius: 18px;">
                                <h1 class="text-judul-fitur mt-4">
                                    Aplikasi Muslim Ku
                                </h1>
                                <p class="text-caption lh-lg mb-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis alias, beatae nemo
                                    corporis eveniet quas! Deleniti labore saepe itaque repellendus. Libero recusandae
                                    velit enim quos consequuntur! Ad facilis numquam assumenda? Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit. Neque eum magni voluptatem sint? Dolor placeat
                                    perferendis voluptas, obcaecati qui culpa id tempora nam. Aliquam quasi incidunt
                                    assumenda nulla, minima a.
                                </p>

                                <a href="/showcase" class="text-decoration-none " style="color: #2390B9;">
                                    <i class='bx bx-chevron-left mb-5 mb-lg-0'></i>Kembali ke showcase</a>

                            </div>
                        </div>

                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="#" class="basic-form">
                                <div class="mb-4">
                                    <h5 class="fw-bold" style="color: #2390B9;">Nama</h5>
                                    <p class="mb-5">Mochtar Muhammad Faisal</p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="fw-bold" style="color: #2390B9;">NIM</h5>
                                    <p>3201916018</p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="fw-bold" style="color: #2390B9;">Mata Kuliah</h5>
                                    <p>Pemrograman Mobile</p>
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