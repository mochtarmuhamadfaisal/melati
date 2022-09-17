@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-pengaturan-edit-profile.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE PENGATURAN -->
    <div class="section">
        <div class="container container-pengaturan" style="margin-left: 5.3rem;">
            <div class="row row-judul" style="margin-top: 4rem;">
                <h1 class="text-fitur text-center mb-0 mb-lg-0">Edit Profile🙍‍♂️</h1>
                <h2 class="text-judul-fitur text-center">Sesuaikan data anda dengan benar</h2>
            </div>
            <form action="update_profil_mahasiswa" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="edit-profile d-sm-flex d-block justify-content-center mt-5">

                    <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="img-preview hl-img rounded-circle"
                        style="width: 250px; height: 250px; border: 4px solid var(--warna-pertama); object-fit: cover">
                    <div class="hl-upload ms-sm-4 mt-4 mt-lg-0 d-flex flex-column justify-content-center">
                        <label for="foto" class="form-label btn btn-aksi px-4 py-3 border-0">
                            <input class="btn btn-primary rounded-lg @error('foto') is-invalid @enderror" id="foto"
                                name="foto" type="file" style="display:none" onchange="previewname()">Ubah
                            Foto Profil</label>
                        <div class="row text-start mt-2">
                            <span class="label label-info" id="upload-file-info"></span>
                        </div>
                        
                    </div>


                    <style>
                        .inputfile {
                            width: 0.1px;
                            height: 0.1px;
                            opacity: 0;
                            overflow: hidden;
                            position: absolute;
                            z-index: -1;
                        }

                        .inputfile+label {
                            cursor: pointer;
                        }
                    </style>
                </div>


                <div class="row row-biodata d-sm-flex d-block justify-content-center mt-5">
                    <div class="col-lg-6">
                        <div class="mb-5 ">
                            <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control px-4" id="formGroupExampleInput"
                                placeholder="Masukan nama anda.."
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;"
                                value="{{ Auth::user()->nama }}" required>
                        </div>
                        <div class="mb-5">
                            <label for="formGroupExampleInput2" class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                            <input type="text" name="username" class="form-control px-4 " id="formGroupExampleInput2"
                                placeholder="Masukan NIM anda.."
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;" value="{{ Auth::user()->username }}" required>
                        </div>

                        {{-- <div class="mb-5">
                            <label for="formGroupExampleInput2" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control px-4 " id="formGroupExampleInput2"
                                placeholder="Masukan Password anda.." 
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                                <span class="text-muted" style="font-size: 12px;">*kosongkan jika tidak ingin mengubah password</span><br>
                                <span class="text-muted" style="font-size: 12px;">*Isikan minimal 6 karakter</span>
                        </div> --}}

                        <label class="form-label" for="inlineFormSelectPref">Jenis Kelamin</label>
                        <select class="form-select px-4" name="jenis_kelamin" id="inlineFormSelectPref"
                            style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                            <option selected disabled>Pilih jenis kelamin</option>
                            @if (Auth::user()->jenis_kelamin == 'Laki-laki' )
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            @elseif (Auth::user()->jenis_kelamin == 'Perempuan' )
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                            @endif
                        </select>
                        <div class="submit d-flex justify-content-end mt-5 col-8 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-submit mb-5 h-auto border-0" id="submit">Simpan
                            </button>
            </form>
        </div>
        <a href="/pengaturan_mahasiswa" class="text-decoration-none " style="color: #2390B9;">
            <i class='bx bx-chevron-left mb-5 mb-lg-0'></i>Kembali ke pengaturan</a>
    </div>
    </div>
    </div>
    </div>
    <!-- AKHIR PAGE PENGATURAN -->
    <!-- Awal Js Ubah Foto Profil -->
    <script>
        function previewname() {
            console.log('fdf');
            var test = document.getElementById("foto").files[0].name;
            //console.log(test);
            document.getElementById('upload-file-info').innerHTML = test;
            console.log(test);
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
            document.getElementById("cekubah").value = 'berubah';
            document.getElementById("deleteimg").value = 'berubah';
        }
    </script>
    <!-- Akhir Js Ubah Foto Profil -->

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
