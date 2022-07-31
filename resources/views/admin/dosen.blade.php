@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Kelola Akun Dosen</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="btn-content  mb-1 mt-3">
                    <a href="/tambah_dosen" class="btn btn-tambahakun"><span class="fw-bold">+</span>
                        Tambah Akun Dosen</a>
                </div>

                <!-- AWAL Table Untuk dosen  -->
                <div class="col-11 mt-4">
                    {{-- allaert berhaisl tambah dosen --}}
                    {{-- @if ($message = Session::get('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                            <strong>Berhasil!</strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}
                    <table id="example" class="table table-borderless w-100">
                        <thead style="background-color: #D4F3FF;">
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIP</th>
                                <th>Jenis Kelamin</th>
                                <th class="action-header text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($datadosen as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->nip }}</td>
                                    <td>{{ $row->jeniskelamin }}</td>
                                    <td class="action">
                                        <a href="/tampilkan_dosen/{{ $row->nip }}" class="text-decoration-none"><button
                                                class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>
                                        
                                        <button class="btn-transaction bg-danger text-white mx-auto" data-nama="{{ $row->nama }}" onclick="hapus(`{{ $row->nip }}`,`{{ $row->nama }}`)">Hapus</button>        
                                        

                                        {{-- <a href="#" class="text-decoration-none" data-id="{{ $row->nip }}"
                                            data-nama="{{ $row->nama }}"><button
                                                class="btn-transaction bg-danger text-white mx-auto" onclick="hapus({{ $row->nip }})">Hapus</button></a> --}}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    
                    <form action="/delete/" class="hapusdosen">
                    @csrf
                    @method('delete')
                    </form>
                </div>
                <!-- AKHIR Table Untuk dosen  -->
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
        function hapus(id, nama){
            console.log('tess');
            let url=/delete/id;
            $('.hapusdosen').attr('action',url);
            $('.hapusdosen').sumbit;
            // var iddosen = $(this).attr('data-id');
            // var namadosen = $(this).attr('data-nama');
            swal({
                    title: "Anda yakin?",
                    text: "Anda akan menghapus akun dosen atas nama " + nama + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + id + ""
                        // swal("Akun dosen berhasil di hapus", {
                        //     icon: "success",
                        // });
                    } else {
                        swal("Akun dosen tidak jadi di hapus");
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
