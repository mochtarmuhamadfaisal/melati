@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Kelola Akun Mahasiswa</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="btn-content  mb-1 mt-3">
                    <a href="/tambah_mahasiswa" class="btn btn-tambahakun"><span class="fw-bold">+</span>
                        Tambah Akun Mahasiswa</a>
                </div>

                <!-- AWAL Table Untuk Mahasiswa  -->
                <div class="col-11 mt-4">
                    <table id="example" class="table table-borderless w-100">
                        <thead style="background-color: #D4F3FF;">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Jenis Kelamin</th>
                                <th class="action-header text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($datamahasiswa as $rowmhs)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $rowmhs->nama }}</td>
                                    <td>{{ $rowmhs->nim }}</td>
                                    <td>{{ $rowmhs->jeniskelamin }}</td>
                                    <td class="action">
                                        <a href="/tampilkan_mahasiswa/{{ $rowmhs->id }}" class="text-decoration-none">
                                            <button class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>

                                        <a href="#" class="text-decoration-none hapuss" data-id="{{ $rowmhs->id }}"
                                        data-nama="{{ $rowmhs->nama }}">
                                        <button class="btn-transaction bg-danger text-white mx-auto">Hapus</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- AKHIR Table Untuk Mahasiswa  -->
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->





    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- allert sweet allert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.hapuss').click(function() {
            var idmahasiswa = $(this).attr('data-id');
            var namamahasiswa = $(this).attr('data-nama');
            swal({
                    title: "Anda yakin?",
                    text: "Anda akan menghapus akun mahaswa atas nama " + namamahasiswa + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + idmahasiswa + ""
                        // swal("Akun dosen berhasil di hapus", {
                        //     icon: "success",
                        // });
                    } else {
                        swal("Akun mahasiswa tidak jadi di hapus");
                    }
                });
        })
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
