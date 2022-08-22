@extends('layouts.main_dosen')
@section('konten_dosen')
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
                <form action="/update_password_dosen" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold"
                            style="color: #2390B9;">Password Baru</label>
                        <input type="password" name="password" class="form-control rounded-pill p-2 px-3 @error('password') is-invalid @enderror" id="pswbarudosen" placeholder="Masukan Password anda...">
                        <input class=" mt-3" type="checkbox" onclick="myFunction_pswbarudosen()">Tampilkan <br>
                        <span class ="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill">Simpan</button>
                    </div>
                </form>

                    <a href="/pengaturan_dosen" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->


    <script>
        function myFunction_pswbarudosen() {
            var x = document.getElementById("pswbarudosen");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

@endsection