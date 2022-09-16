@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-index.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL HERO SECTION -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <div class="container-fluid mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif;">
            <!-- AWAL HERO SECTION -->
            <section class="hero-section">
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- kolom kiri -->
                    <div
                        class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <p class="text-caption">Selamat Datang👋</p>
                        <h1 class="title-text-big">
                            Dapatkan Ilmu<br class="d-lg-block d-none" />
                            Sebanyak-banyaknya dengan website ini.
                        </h1>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                            <a href="/belajar" class="text-decoration-none "><button class="btn d-inline-flex mb-md-0 btn-try text-white rounded-pill">
                                Ayo Belajar
                            </button></a>
                            <button class="btn btn-outline rounded-pill">
                                <div class="d-flex align-items-center">
                                    <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                                            fill="#555B61" />
                                    </svg>
                                    lihat Video Tentang Website Ini
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="right-column text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" class="h-auto mw-100" src="{{ asset('img/hero-section.png') }}"
                            alt="" />
                    </div>
                </div>
            </section>
            <!-- AKHIR HERO SECTION -->
        </div>
    </section>
    <!-- AKHIR HERO SECTION -->


    {{-- @dd(auth('mahasiswa')->check()) --}}


    <!-- AWAL  TENTANG APLIKASI -->
    <section class="tentang-aplikasi h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-2 container-fluid mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-fitur">TENTANG WEBSITE</h1>
                <p class="text-judul-fitur"><span style="color: #2390B9">Me</span>dia pembe<span style="color: #2390B9">la</span>jaran <span style="color: #2390B9">T</span>eknik <span style="color: #2390B9">I</span>nformatika</p>
                <img style="margin-right: 0.75rem;" class="w-25" src="{{ asset('img/logoremake1.png') }}" />
                <p class="text-caption mt-3 lh-lg" style="margin-left: 6rem; margin-right: 6rem;">
                    Media pembelajaran ini dibangun untuk dapat menambah minat dan semangat kalian dalam mempelajari
                    berbagai mata kuliah yang pada Program Studi Teknik Informatika Politeknik Negeri Pontianak,
                    pembelajaran pada webiste ini di kemas dalma bentuk video yang akan di jelaskan oleh dosen-dosen mata
                    kuliah masing-masing, terdapat beberapa fitur yang dapat kalian nikmati pada website ini seperti, menu
                    belajar, diskusi dan showcase.
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <i class='bx bx-book-alt'></i>
                        </div>
                        <h3 class="icon-title">Belajar</h3>
                        <p class="text-caption">
                            Terdapat penjelasan pembelajaran dalam bentuk video dan juga terdapat modul beserta soal-soal yang dapat
                            kalian kerjakan.
                        </p>
                    </div>

                    <div class="col-lg-4 column">
                        <div class="icon">
                            <i class='bx bx-conversation'></i>
                        </div>
                        <h3 class="icon-title">Diskusi</h3>
                        <p class="text-caption">
                            Menyatukan mahasiswa dan dosen pada kolom pertanyaan agar dapat membagikan wawasan dan
                            pengetahuan.
                        </p>
                    </div>

                    <div class="col-lg-4 column">
                        <div class="icon">
                            <i class='bx bx-images'></i>
                        </div>
                        <h3 class="icon-title">Showcase</h3>
                        <p class="text-caption">
                            Terdapat banyak hasil karya mahasiswa dalam membuat suatu project. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR  TENTANG APLIKASI -->





    <!-- AWAL FITUR BELAJAR -->
    <section class="content">
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-6  my-auto">
                    <img class="img-fluid " src="{{ asset('img/fitur-belajar.png') }}" alt="">
                </div>
                <div class="kanan-belajar col-md-6 mt-4 mt-md-0">
                    <div class="tagline text-fitur">
                        BELAJAR👨‍💻
                    </div>
                    <div class="headline text-judul-fitur">
                        Dengan video, <br class="d-none d-md-block">
                        belajar akan lebih <br>menyenangkan
                    </div>
                    <div class="subheadline mt-4 text-caption">
                        Pembelajaran di kemas dengan video dengan <br>penjelasan yang lebih menarik.
                    </div>
                    <div class="button-header">
                        <a href="/belajar"><button class="btn btn-started rounded-pill">Ayo Belajar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR FITUR BELAJAR -->




    <!-- AWAL FITUR DISKUSI -->
    <section class="content">
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="tagline text-fitur">
                        DISKUSI🧏‍♂️
                    </div>
                    <div class="headline mt-3 text-judul-fitur">
                        Diskusi dapat menyatukan <br class="d-none d-md-block">
                        kita semua.
                    </div>
                    <div class="subheadline mt-4 text-caption">
                        Pertanyaan yang di ajukan<br class="d-none d-md-block">
                        akan di jawab oleh penguna webiste.
                    </div>
                    <div class="button-header">
                        <a href="/belajar_diskusi"><button class="btn btn-started rounded-pill">Ayo Berdiskusi </button></a>
                    </div>
                </div>

                <div class="col-md-6 my-auto">
                    <img class="img-fluid" src="{{ asset('img/fitur-diskusi.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- AKHI FITUR DISKUSI -->





    <!-- AWAL PENJELASAN FITUR PENJELASAN SHOWCASE -->
    <section class="penjelasan-showcase h1-00 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-3-2 container-fluid mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src="{{ asset('img/fitur-showcase.png') }}" alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="text-fitur mb-3">SHOWCASE🤹‍♀️</h2>
                    <h2 class="title-text">3 Point Penting Showcase</h2>
                    <ul style="padding: 0; margin: 0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Menambah semangat belajar
                            </h4>
                            <p class="text-caption">
                                Melihat hasil dari project yang di buat<br class="d-sm-inline d-none" />
                                akan menambah semangat belajar yang lainnya.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Menambah Wawasan
                            </h4>
                            <p class="text-caption">
                                Mengatahui apa saja<br class="d-sm-inline d-none" />
                                project-project yang mahasiswa buat.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 4rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    3
                                </span>
                                Memperkaya Referensi
                            </h4>
                            <p class="text-caption">
                                Mendapatkan inspirasi dari<br class="d-sm-inline d-none" />
                                project-project yang mahasiswa buat.
                            </p>
                        </li>
                    </ul>
                    <a href="/showcase"><button class="btn btn-learn text-white rounded-pill">Selengkapnya</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR PENJELASAN FITUR PENJELASAN SHOWCASE -->
@endsection
