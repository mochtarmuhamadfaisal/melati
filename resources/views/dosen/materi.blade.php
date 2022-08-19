@extends('layouts.main_dosen')
@section('konten_dosen')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Kelola Materi</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="row ms-lg-0 ms-1">
            <div class="col-12">
                <div class="btn-content mb-1 mt-3">
                    <a href="/tambah_materi" class="btn btn-tambahakun">+</span> Tambah Materi</a>
                </div>

                <!-- AWAL Table Untuk Mata Kuliah  -->
                <div class="col-11 mt-4" style="overflow-x: auto">
                    <table id="example" class="table table-borderless w-100">
                        <thead style="background-color: #D4F3FF;">
                            <tr>
                                <th>No</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                {{-- <th>Link Video</th> --}}
                                <th>Judul Materi</th>
                                {{-- <th>Deskripsi Materi</th> --}}
                                {{-- <th>Upload Materi</th> --}}
                                {{-- <th>Upload Soal</th> --}}
                                {{-- <th>Password Soal</th> --}}
                                <th class="action-header">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($datamateri as $rowmateri)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $rowmateri->semester }}</td>
                                    <td>{{ $rowmateri->kelas }}</td>
                                    <td>{{ $rowmateri->matakuliah->nama_matakuliah }}</td>
                                    {{-- <td>{{ $rowmateri->link_video }}</td> --}}
                                    <td>{{ $rowmateri->judul_video }}</td>
                                    {{-- <td>{!! $rowmateri->deskripsi_video !!}</td> --}}
                                    {{-- <td><a href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank"
                                            download>{{ $rowmateri->upload_modul }}</a></td> --}}
                                    {{-- <td><a href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank"
                                            download>{{ $rowmateri->upload_soal }}</a></td> --}}
                                    {{-- <td>{{ $rowmateri->password_soal }}</td> --}}
                                    {{-- <td>{{ $rowmateri->link_grupdiskusi }}</td>
                                <td>{{ $rowmateri->password_diskusi }}</td> --}}
                                    <td>
                                        <button class="btn-transaction bg-info text-white" data-bs-toggle="modal"
                                            data-bs-target="#detailmateri-{{ $rowmateri->id }}">
                                            Detail
                                        </button>
                                        <!-- Modal detail -->
                                        <div class="modal fade" id="detailmateri-{{ $rowmateri->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-base" id="exampleModalLabel">Detail Materi dengan judul materi<br><span class="fw-bold" style="color: #2390B9;">{{ $rowmateri->judul_video }}</span></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12">
                                                                <p class="mb-0 fw-bold">Semester</p>
                                                                <p class="mb-5">{{ $rowmateri->semester }}</p>

                                                                <p class="mb-0 fw-bold">Kelas</p>
                                                                <p class="mb-5">{{ $rowmateri->kelas }}</p>

                                                                <p class="mb-0 fw-bold">Mata Kuliah</p>
                                                                <p class="mb-5">{{ $rowmateri->matakuliah->nama_matakuliah }}</p>

                                                                <p class="mb-0 fw-bold">Link Video</p>
                                                                <p class="mb-5">{{ $rowmateri->link_video }}</p>

                                                                <p class="mb-0 fw-bold">Judul Video</p>
                                                                <p class="mb-5">{{ $rowmateri->judul_video }}</p>
                                                                
                                                                <p class="fw-bold">Deskripsi Video</p>
                                                                <p style="margin-top: -1rem;">{!! $rowmateri->deskripsi_video !!}</p>
                                                            </div>

                                                            <div class="col-lg-6 col-12">

                                                                <p class="mb-0 fw-bold">Upload Modul</p>
                                                                <p class="mb-5"><a href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank"
                                                                    download>{{ $rowmateri->upload_modul }}</a></p>

                                                                <p class="mb-0 fw-bold">Upload Soal</p>
                                                                <p class="mb-5"><a href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank"
                                                                    download>{{ $rowmateri->upload_soal }}</a></p>

                                                                <p class="mb-0 fw-bold">Password Soal</p>
                                                                <p class="mb-5">{{ $rowmateri->password_soal }}</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger rounded-pill px-4"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- akhir modal detail --}}
                                        <a href="/tampilkan_materi/{{ $rowmateri->id }}"
                                            class="text-decoration-none"><button
                                                class="btn-transaction  bg-warning  px-4 text-white mb-2 ">Edit</button></a>
                                        <button class="btn-transaction  bg-danger  px-4 text-white hapusmateri"
                                            onclick="hapus(`{{ $rowmateri->id }}`)">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="/delete/" class="hapusmateri">
                        @csrf
                        @method('delete')
                    </form>
                </div>
                <!-- AKHIR Table Untuk dosen  -->
            </div>
        </div>
    </div>
    <!-- Awal Konten -->

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- allert sweet allert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function hapus(id) {
            let url = /delete_materi/id;
            $('.hapusmateri').attr('action', url);
            $('.hapusmateri').sumbit;
            swal({
                    title: "Anda yakin?",
                    text: "Anda akan menghapus materi ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete_materi/" + id
                    } else {
                        swal("Materi tidak jadi di hapus");
                    }
                });
        }
    </script>

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
