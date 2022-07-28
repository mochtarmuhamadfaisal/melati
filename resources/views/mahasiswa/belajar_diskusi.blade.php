@extends('layouts.main_mahasiswa')
@push('css_costum')
<link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar-diskusi.css') }}">
@endpush
@section('konten_mahasiswa')
        <!-- AWAL PAGE BELAJAR-DISKUSI -->
        <section class="diskusi">
            <div class="container">
                <div class="row text-center" style="margin-top: 5rem;">
                    <p class="text-fitur mb-1">
                        DISKUSI🧏‍♂️
                    </p>
                    <h2 class="text-judul-fitur mb-3" style="font-weight: 600;">
                        Masukan Password Untuk Mendapatkan Grup
                    </h2>
                </div>
    
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-12 col-lg-6">
                        <form class="mb-5">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-fitur">Password</label>
                                <input type="password" class="form-control" id="myInput"
                                    style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                                <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction()">Tampilkan
                                Password
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-fill mb-5 ">Submit</button>
                            </div>
                        </form>
                        <a href="/belajar" class="text-decoration-none " style="color: #2390B9;">
                            <span class="fw-bold"><</span>Kembali</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- AKHIR PAGE BELAJAR-DISKUSI -->
        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
@endsection
