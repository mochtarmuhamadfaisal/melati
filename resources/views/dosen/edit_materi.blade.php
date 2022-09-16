@extends('layouts.main_dosen')
@section('konten_dosen')
    {{-- Awal konten --}}
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Edit Materi</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('foto') }}/{{ Auth::user()->foto }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>

        </div>


        <div class="row mt-4 ms-lg-0 ms-1">
            <div class="col-11">
                <form action='/updatedata_materi/{{ $datamateri->id }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label for="formGroupExampleInput3" class="form-label fw-bold"
                            style="color: #2390B9;">Semester</label>
                        <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                            id="formGroupExampleInput3" name="semester">
                            <option selected disabled>Pilih Semester</option>
                            @if ($datamateri->semester == '1')
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            @elseif($datamateri->semester == '2')
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            @elseif($datamateri->semester == '3')
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3" selected>3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            @elseif($datamateri->semester == '4')
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            @elseif($datamateri->semester == '5')
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                            <option value="6">6</option>
                            @elseif($datamateri->semester == '6')
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6" selected>6</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="formGroupExampleInput3" class="form-label fw-bold"
                            style="color: #2390B9;">Kelas</label>
                        <select class="form-select rounded-pill p-2 px-3" aria-label="Default select example"
                            id="formGroupExampleInput3" name="kelas">
                            <option selected disabled>Pilih kelas</option>
                            @if ($datamateri->kelas == 'A')
                            <option value="A" selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            @elseif($datamateri->kelas == 'B')
                            <option value="A">A</option>
                            <option value="B" selected>B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            @elseif($datamateri->kelas == 'C')
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C" selected>C</option>
                            <option value="D">D</option>
                            @elseif($datamateri->kelas == 'D')
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C" selected>C</option>
                            <option value="D">D</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Mata
                            Kuliah
                        </label>
                        <select class="form-select rounded-pill py-2" aria-label="Default select example"
                          name="id_matakuliah">
                            <option selected>-</option>
                            @php
                                $data_matakuliah=\App\Models\Matakuliah::all();
                            @endphp
                            @foreach ($data_matakuliah as $baris_mk)
                            @if ($datamateri->id_matakuliah==$baris_mk->id)
                            <option value="{{ $baris_mk->id }}" selected>{{ $baris_mk->nama_matakuliah }}</option>
                            @else
                            <option value="{{ $baris_mk->id }}">{{ $baris_mk->nama_matakuliah }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Video
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="link_video" value="{{ $datamateri->link_video }}">
                                    </div>
                                    
                        <div class=" mb-5">

                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Judul
                            Materi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="judul_video" value="{{ $datamateri->judul_video }}">
                    </div>

                    <div class=" mb-5">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold "
                            style="color: #2390B9">Deskripsi Materi</label>
                        <textarea class="form-control ckeditor" style="border-radius: 15px;" id="exampleFormControlTextarea1"
                            rows="5" name="deskripsi_video" value="{{ $datamateri->deskripsi_video }}">{!! $datamateri->deskripsi_video !!}</textarea>
                    </div>

                    <div class=" mb-5">
                        <label for="myfile" class="fw-bold mb-2" style="color: #2390B9;">Upload Modul</label>
                        <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="upload_modul">
                        <h5 class="text-muted mt-1 fw-light" style="font-size: 12px;">*Masukan file dengan format <span class="fw-bold">PDF</span></h5>
                        <a href="{{ asset('modul/') }}/{{ $datamateri->upload_modul }}" class="text-decoration-none"  download><span class="text-muted">Data Lama: </span>{{ $datamateri->upload_modul }}</a>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="inputGroupFile04" class="fw-bold mb-2" style="color: #2390B9; margin-top: 9.2px">Upload Soal</label>
                                <input type="file" class="form-control rounded-pill" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="upload_soal">
                                    <h5 class="text-muted mt-1 fw-light" style="font-size: 12px;">*Masukan file dengan format <span class="fw-bold">PDF</span></h5>
                                    <a href="{{ asset('soal/') }}/{{ $datamateri->upload_soal }}" class="text-decoration-none"  download><span class="text-muted">Data Lama: </span>{{ $datamateri->upload_soal }}</a>
                            </div>
                        </div>
    
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Password Soal
                                </label>
                                <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="password_soal" value="{{ $datamateri->password_soal }}">
                                <h5 class="text-muted mt-1 fw-light" style="font-size: 12px;">*Masukan password dengan <span class="fw-bold">8 karakter</span></h5>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mb-5">
                        <label for="inputGroupFile04" class="col-form-label fw-bold" style="color: #2390B9;">Link
                            Grup Diskusi
                        </label>
                        <input type="text" class="form-control rounded-pill" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="link_grupdiskusi">
                    </div>

                    <div class=" mb-5">
                        <label for="recipient-name" class="col-form-label fw-bold" style="color: #2390B9;">Password
                            Diskusi
                        </label>
                        <input type="text" class="form-control rounded-pill py-2 h-100" id="recipient-name" name="password_diskusi">
                                    </div> --}}
                    <div class=" d-flex justify-content-end">
                        <button type="submit" class="btn-admin rounded-pill mt-4">Simpan</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start">
                    <a href="/materi" class="text-decoration-none">
                        <p class="text-muted"><span class="">
                                <</span>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir konten --}}
@endsection