@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav ">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Edit Profil</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="content">
            <form action="">
                <div class="col-12">
                    <div class="row">
                        <div class="admin d-sm-flex d-block">
                            <img src="{{ asset('img/gue.jpg') }}" class="img-preview rounded-circle"
                                style="width: 250px; height: 250px; border: 4px solid #2390B9; object-fit: cover">


                            <div class="hl-upload ms-sm-4 d-flex flex-column justify-content-center">
                                <label for="foto" class="form-label btn-admin rounded-pill">
                                    <input class="btn btn-primary rounded-lg @error('foto') is-invalid @enderror"
                                        id="foto" name="foto" type="file" style="display:none"
                                        onchange="previewname()">Ubah
                                    Foto Profil</label>
                                <p class="upload mt-1 ms-0">maks upload (2 Mb)</p>
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
                    </div>
                    <div class="row mt-2">
                        <span class="label label-info" id="upload-file-info"></span>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="formGroupExampleInput" class="form-label fw-bold"
                                style="color: #2390B9;">Nama</label>
                            <input type="text" class="form-control rounded-pill p-2 px-3" id="formGroupExampleInput"
                                placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="formGroupExampleInput2" class="form-label fw-bold"
                                style="color: #2390B9;">NIP</label>
                            <input type="text" class="form-control rounded-pill p-2 px-3"
                                id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-2">
                            <label for="formGroupExampleInput3" class="form-label fw-bold"
                                style="color: #2390B9;">Jenis
                                Kelamin</label>
                            <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                                id="formGroupExampleInput3">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-admin rounded-pill mt-4">Simpan</button>
                        </div>
            </form>
            <div class="d-flex justify-content-start">
                <a href="/profil_admin" class="text-decoration-none">
                    <p class="text-muted"><span class="">
                            <</span>Kembali</p>
                </a>
            </div>
        </div>
    </div>
    <!-- Awal Konten -->
@endsection

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

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
        document.getElementById("cekubah").value = 'berubah';
        document.getElementById("deleteimg").value = 'berubah';
    }
</script>
<!-- Akhir Js Ubah Foto Profil -->