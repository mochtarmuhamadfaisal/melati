@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-showcase.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE SHOWCASE -->
    <section class="showcase">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="text-fitur" style=" margin-top: 6rem;">SHOWCASE🤹‍♀️</h1>
                <div class="text-judul-fitur">Kumpulan Project Mahasiswa</div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Aplikasi Muslim Ku</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="/showcase_detail" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="/showcase_detail" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
                <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                    <img src="{{ asset('img/Instagram post - FIX.png') }}" class="card-img-top" alt="..."
                        style="border-radius: 18px;">
                    <div class="card-body mt-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="text-caption">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- AKHIR PAGE SHOWCASE -->
@endsection
