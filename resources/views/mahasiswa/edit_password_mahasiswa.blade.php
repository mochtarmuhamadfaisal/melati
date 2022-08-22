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
                    <form class="mb-5" action="/update_password_mahasiswa" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-0">
                            <label for="exampleInputPassword1" class="form-label text-fitur">Password Baru</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="myInput2"
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;" placeholder="Masukan Password anada..">
                            <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction2()">Tampilkan
                            Password <br>
                            <span class ="text-danger">@error('password') {{$message}} @enderror</span>
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
   
    function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

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


