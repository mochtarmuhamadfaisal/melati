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


        <div class="row">
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
                                <th>Link Video</th>
                                <th>Judul Materi</th>
                                <th>Deskripsi Materi</th>
                                <th>Upload Materi</th>
                                <th>Upload Soal</th>
                                <th>Password Soal</th>
                                <th>Link Grup Diskusi</th>
                                <th>Password Diskusi</th>
                                <th class="action-header text-center">Aksi</th>
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
                                <td>{{ $rowmateri->link_video }}</td>
                                <td>{{ $rowmateri->judul_video}}</td>
                                <td>{!! $rowmateri->deskripsi_video !!}</td>
                                <td><a href="{{ asset('modul/') }}/{{ $rowmateri->upload_modul }}" target="_blank" download>{{ $rowmateri->upload_modul }}</a></td>
                                <td><a href="{{ asset('soal/') }}/{{ $rowmateri->upload_soal }}" target="_blank" download>{{ $rowmateri->upload_soal }}</a></td>
                                <td>{{ $rowmateri->password_soal }}</td>
                                <td>{{ $rowmateri->link_grupdiskusi }}</td>
                                <td>{{ $rowmateri->password_diskusi }}</td>
                                <td>
                                    <a href="/tampilkan_materi/{{ $rowmateri->id }}" class="text-decoration-none"><button
                                            class="btn-transaction  bg-warning  px-4 text-white mb-2">Edit</button></a>
                                    <button class="btn-transaction  bg-danger  px-4 text-white hapusmateri" onclick="hapus(`{{ $rowmateri->id }}`)">Hapus</button>
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
        function hapus(id){
            let url=/delete_materi/id;
            $('.hapusmateri').attr('action',url);
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