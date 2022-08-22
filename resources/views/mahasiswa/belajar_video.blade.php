@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar-video.css') }}">
@endpush
@section('konten_mahasiswa')
<style>
 @media only screen and (max-width: 768px){
  .tabelmateri{
    overflow-x: auto
  }

  iframe.videopembelajaran{
    width: 340px; 
    height: 400px;
  }
}
</style>

    <!-- AWAL BELAJAR-VIDEO -->
    <h1 class="text-fitur text-center ww" style="margin-top: 6rem;">BELAJAR👨‍💻</h1>
    <h3 class="heading text-judul-fitur text-center">Vidio Pembelajaran</h3>
    <!-- AWAL Table Untuk dosen  -->
    <div class="container-fluid ">
        <div class="row d-flex justify-content-center">
            <div class="col-9 mt-4 tabelmateri">
                <table id="example" class="table table-borderless " style="height: 50px">
                    <thead style="background-color: #D4F3FF;">
                        <tr>
                            <th>No</th>
                            {{-- <th>Mata Kuliah</th> --}}
                            <th class="w-25">Nama Dosen</th>
                            <th class="w-25">Materi</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Modul</th>
                            <th>Soal</th>
                            <th class="action-header text-center">Video</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datamateri as $rowmateri)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td>{{ $rowmateri->matakuliah->nama_matakuliah }}</td> --}}
                                <td>{{ $rowmateri->users->nama }}</td>
                                <td>{{ $rowmateri->judul_video }}</td>
                                <td>{{ $rowmateri->semester }}</td>
                                <td>{{ $rowmateri->kelas }}</td>
                                <td class="text-decoration-underline"><a
                                        href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank" download
                                        style="color: black">{{ $rowmateri->upload_modul }}</td></a>
                                <td class="text-decoration-underline"><a
                                        href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank" download
                                        style="color: black" data-bs-toggle="modal"
                                        data-bs-target="#modalsoal">{{ $rowmateri->upload_soal }}</td></a>
                                <!-- Modal password soal -->
                                <div class="modal fade" id="modalsoal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Password soal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/cek_password_soal" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <label for="inputPassword5" class="form-label">Password</label>
                                                    <input value="{{ $rowmateri->id }}" type="hidden" name="id_materi">
                                                    <input value="{{ $rowmateri->password_soal }}" type="hidden" name="password_soal">
                                                
                                                    <input type="password" id="inputPassword5" class="form-control"
                                                        aria-describedby="passwordHelpBlock" name="password_soal">
                                                    <div id="passwordHelpBlock" class="form-text">
                                                        Masukan password yang telah di berikan dosen kepada anda..
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <td class="text-center"><a href="" class="btn  rounded-pill px-4"
                                        style="background-color: #2390B9; color: white;" data-bs-toggle="modal"
                                        data-bs-target="#modaltonton-{{ $rowmateri->id }}">Tonton</a></td>
                                <!-- Modal -->
                                <div class="modal fade inimodalnontn" id="modaltonton-{{ $rowmateri->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    {{ $rowmateri->judul_video }}</h5>
                                            </div>
                                            <div class="modal-body">
                                                <iframe class="videopembelajaran" width="1100" height="500" src="{{ $rowmateri->link_video }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                                <div class="row desc-video " style="margin-top: 2rem;">
                                                    <h1 class="text-fitur ">Penjelasan Singkat Tentang Video di Atas </h1>
                                                    <p class="text-caption">{!! $rowmateri->deskripsi_video !!}</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn rounded-pill btn-danger px-4" style="border-radius: 11px;"
                                                    data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                </table>
            </div>
        </div>

        <div class="row barisss d-flex justify-content-center mt-5">
            <div class="col-9">
                <a href="/belajar" class="text-decoration-none mt-5 text-start" style="color: #2390B9;">
                    <span class="fw-bold">
                        <</span>Kembali</a>
            </div>
        </div>
    </div>

    <!-- AKHIR Table Untuk dosen  -->
@endsection
