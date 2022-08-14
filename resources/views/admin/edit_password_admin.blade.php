@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Edit Password</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>

        </div>


        <div class="content">
            <div class="col-12 col-lg-6">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #2390B9;">Password
                            lama</label>
                        <input type="password" class="form-control rounded-pill p-2 px-3" id="pswlamaadmin">
                        <input class=" mt-3" type="checkbox" onclick="myFunction_pswlamaadmin()">Tampilkan
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #2390B9;">Password
                            Baru</label>
                        <input type="password" class="form-control rounded-pill p-2 px-3" id="pswbaruadmin">
                        <input class=" mt-3" type="checkbox" onclick="myFunction_pswbaruadmin()">Tampilkan
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #2390B9;">Konfirmasi
                            Password</label>
                        <input type="password" class="form-control rounded-pill p-2 px-3" id="pswkonfiradmin">
                        <input class=" mt-3" type="checkbox" onclick="myFunction_pswkonfiradmin()">Tampilkan
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill">Simpan</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="/pengaturan_admin" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->

    <script>
        function myFunction_pswlamaadmin() {
            var x = document.getElementById("pswlamaadmin");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function myFunction_pswbaruadmin() {
            var x = document.getElementById("pswbaruadmin");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function myFunction_pswkonfiradmin() {
            var x = document.getElementById("pswkonfiradmin");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
