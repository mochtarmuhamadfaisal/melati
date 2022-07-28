@extends('layouts.main_mahasiswa')
@push('css_costum')
<link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-pengaturan-edit-password.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE PENGATURAN -->
    <div class="section ">
        <div class="container container-pengaturan" style="margin-left: 5.3rem;">
            <div class="row row-judul" style="margin-top: 4rem;">
                <h1 class="text-fitur text-center mb-0 mb-lg-0">Edit Password🔐</h1>
                <h2 class="text-judul-fitur text-center">Amankan akun anda
                    dengan baik</h2>
            </div>

            <div class="row row-edit d-flex justify-content-center mt-5">
                <div class="col-12 col-lg-6">
                    <form class="mb-5">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-fitur">Password Lama</label>
                            <input type="password" class="form-control" id="myInput1"
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                            <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction1()">Tampilkan
                            Password
                        </div>

                        <div class="mb-0">
                            <label for="exampleInputPassword1" class="form-label text-fitur">Password Baru</label>
                            <input type="password" class="form-control" id="myInput2"
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                            <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction2()">Tampilkan
                            Password
                        </div>

                        <div class="mb-0">
                            <label for="exampleInputPassword1" class="form-label text-fitur">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="myInput3"
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                            <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction3()">Tampilkan
                            Password
                        </div>
                        <div class="btn-gas d-flex justify-content-end">
                            <button type="submit" class="btn btn-submit mt-5">Edit Password</button>
                        </div>
                        <a href="/pengaturan_mahasiswa" class="text-decoration-none " style="color: #2390B9;">
                            <i class='bx bx-chevron-left mb-5 mb-lg-0'></i>Kembali ke pengaturan</a>
                    </form>


                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- AKHIR PAGE PENGATURAN -->
     <!-- AWAL SCRIPT JS -->
 <script>
    function myFunction1() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunction3() {
        var x = document.getElementById("myInput3");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endsection


