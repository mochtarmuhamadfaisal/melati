@extends('layouts.main_mahasiswa')
@push('css_costum')
<link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-pengaturan.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE PENGATURAN -->
    <div class="section ">
        <div class="container container-pengaturan" style="margin-left: 5.3rem;">
            <div class="row row-judul" style="margin-top: 4rem;">
                <h1 class="text-fitur text-center mb-0 mb-lg-0">Pengaturan🔧</h1>
                <h2 class="text-judul-fitur text-center">Kelola berbagai aktivitas anda di sini</h2>
            </div>

            <div class="row row-menu justify-content-center mb-5" style="margin-left: 0.1rem;">
                <div class="col-lg-3 mt-lg-4 mt-4 ">
                    <div class="card" style="width: 18rem; border-radius: 14px;">
                        <div class="card-body">
                            <h5 class="card-title text-fitur" style="font-size: 18px;">Edit Profil🙍‍♂️</h5>
                            <p class="card-text text-caption lh-base">Sesuaikan data anda dengan benar.</p>
                            <a href="/edit_profil_mahasiswa" class="btn btn-aksi">Edit</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-lg-4 mt-4 ">
                    <div class="card" style="width: 18rem; border-radius: 14px;">
                        <div class="card-body">
                            <h5 class="card-title text-fitur">Edit Password🔐</h5>
                            <p class="card-text text-caption lh-base">Amankan akun anda<br>dengan baik.</p>
                            <a href="/edit_password_mahasiswa" class="btn btn-aksi">Edit</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-lg-4 mt-4 ">
                    <div class="card" style="width: 18rem; border-radius: 14px;">
                        <div class="card-body">
                            <h5 class="card-title text-fitur">Showcase🤹‍♀️</h5>
                            <p class="card-text text-caption lh-base">Pamerkan project<br>yang telah kamu buat.</p>
                            <a href="/insertdata_showcase" class="btn btn-aksi">Pamerin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR PAGE PENGATURAN -->


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