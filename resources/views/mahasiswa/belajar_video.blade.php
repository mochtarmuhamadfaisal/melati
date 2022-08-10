@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar-video.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL BELAJAR-VIDEO -->
    <h1 class="text-fitur text-center" style="margin-top: 6rem;">BELAJAR👨‍💻</h1>
    <h3 class="heading text-judul-fitur text-center">Vidio Pembelajaran</h3>
    <!-- AWAL Table Untuk dosen  -->
    <div class="container-fluid ">
        <div class="row d-flex justify-content-center">
            <div class="col-9 mt-4">
                <table id="example" class="table table-borderless " style="height: 50px">
                    <thead style="background-color: #D4F3FF;">
                        <tr>
                            <th>No</th>
                            <th>Materi</th>
                            <th>Modul</th>
                            <th>Soal</th>
                            <th class="action-header text-center">Video</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($datamateri as $rowmateri)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $rowmateri->judul_video }}</td>
                            <td class="text-decoration-underline"><a href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank" download style="color: black">{{ $rowmateri->upload_modul }}</td></a>
                            <td class="text-decoration-underline"><a href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank" download style="color: black">{{ $rowmateri->upload_soal }}</td></a>
                            <td class="text-center"><a href="" class="btn rounded-pill"
                                    style="background-color: #2390B9; color: white;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Tonton</a></td>
                        </tr>
                        
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ $rowmateri->judul_video }}</h5>
                </div>
                <div class="modal-body">
                    <iframe width="1100" height="500" src="{{ $rowmateri->link_video }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="row desc-video " style="margin-top: 2rem;">
                        <h1 class="text-fitur ">Penjelasan Singkat Tentang Video di Atas </h1>
                        <p class="text-caption">{{ $rowmateri->deskripsi_video }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
