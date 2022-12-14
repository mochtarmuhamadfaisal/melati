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
                    yang telah kamu buat</h2>
            </div>

            <form action="">
                <div class="row row-biodata d-sm-flex d-block justify-content-center mt-5">
                    <div iv class="col-lg-6">
                        <div class="mb-5 ">
                            <label for="formGroupExampleInput" class="form-label">Judul Project</label>
                            <input type="text" class="form-control px-4" id="formGroupExampleInput"
                                placeholder="Masukan nama anda.."
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                        </div>

                        <div class="mb-5">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Project</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masukan deskripsi project anda.."
                                rows="5" style="border-radius: 15px; border-color: #2390B9;"></textarea>
                        </div>

                        <div class="mb-5 d-grid">
                            <label for="foto" class="form-label">Upload Gambar Project</label>
                            <!-- <input class="upload-project" type='file' onchange="readURL(this);" />
                                    <img id="blah" src="http://placehold.it/180" alt="your image" /> -->
                            <input type="file" name="foto" class="custom-file-input" id="foto"
                                onchange="previewname()">
                            <img class="img-preview mt-4" id="upload-file-info" style="display: none; margin-bottom: 2rem;"
                                src="" alt="">
                            {{-- <p ></p> --}}
                        </div>
                        <div class="mb-5">
                            <label for="formGroupExampleInput2" class="form-label">Mata Kuliah</label>
                            <select class="form-select" aria-label="Default select example" id="formGroupExampleInput2"
                                style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                                <option selected disabled>Pilih mata kuliah</option>
                                <option value="1">Pemrograman Mobile</option>
                                <option value="2">Basis data</option>
                                <option value="3">Animasi</option>
                            </select>

                        </div>

                        <div class="submit d-flex justify-content-end mt-5 col-8 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-submit mb-5 h-auto border-0" id="submit">Upload
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
