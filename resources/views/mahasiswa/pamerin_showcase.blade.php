@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-pengaturan-showcase.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE PENGATURAN -->
    <div class="section ">
        <div class="container container-pengaturan" style="margin-left: 5.3rem;">
            <div class="row row-judul" style="margin-top: 4rem;">
                <h1 class="text-fitur text-center mb-0 mb-lg-0">Showcase🤹‍♀️</h1>
                <h2 class="text-judul-fitur text-center">Pamerkan project
                    yang telah {{ Auth::user()->nama }} buat</h2>
            </div>

            <form action="/tambah_showcase" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row row-biodata d-sm-flex d-block justify-content-center mt-5">
                    <div iv class="col-lg-6">
                        <div class="mb-5 ">
                            <label for="formGroupExampleInput" class="form-label">Judul Project</label>
                            <input type="text" class="form-control px-4 @error('judul_project') is-invalid @enderror" id="formGroupExampleInput"
                                placeholder="Masukan Judul project anda.."
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;" name="judul_project" required>
                        </div>

                        <div class="mb-5">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Project</label>
                                <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" placeholder="Masukan deskripsi project anda.."
                                rows="5" style="border-radius: 15px; border-color: #2390B9;" name="deskripsi_project" required></textarea>
                        </div>

                        <div class="mb-5 d-grid">
                            <label for="foto" class="form-label">Upload Gambar Project</label>
                            <!-- <input class="upload-project" type='file' onchange="readURL(this);" />
                                    <img id="blah" src="http://placehold.it/180" alt="your image" /> -->
                            <input type="file" name="foto" class="custom-file-input" id="foto"
                                onchange="previewname()" required>
                            <img class="img-preview mt-4" id="upload-file-info" style="display: none; margin-bottom: 2rem;"
                                src="" alt="">
                            {{-- <p ></p> --}}
                        </div>
                        <div class="mb-5">
                            <label for="formGroupExampleInput2" class="form-label @error('id_matakuliah') is-invalid @enderror">Mata Kuliah</label>
                            <select class="form-select rounded-pill py-2" aria-label="Default select example"
                            id="recipient-name" name="id_matakuliah" required>
                            <option selected disabled>Piliah Mata Kuliah</option>
                            @php
                                $data_matakuliah=\App\Models\Matakuliah::all();
                            @endphp
                            @foreach ($data_matakuliah as $baris_mk)
                            <option value="{{ $baris_mk->id }}">{{ $baris_mk->nama_matakuliah }}</option>
                            @endforeach
                        </select>
                        @error('id_matakuliah')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="submit d-flex justify-content-end mt-5 col-8 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-submit mb-5 h-auto border-0 rounded-pill" id="submit">Upload
                                Project </button>
                        </div>
                        <a href="/pengaturan_mahasiswa" class="text-decoration-none " style="color: #2390B9;">
                            <i class='bx bx-chevron-left mb-5 mb-lg-0'></i>Kembali ke pengaturan</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
    <!-- AKHIR PAGE PENGATURAN -->
    <script src="{{ asset('js/jquery.js') }}"></script>
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
@endsection
