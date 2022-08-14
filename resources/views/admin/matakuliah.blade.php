

@extends('layouts.main_admin')
@section('konten_admin')
    <!-- Awal Konten -->
    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="nav-title">Kelola Mata Kuliah</h2>
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" alt="">
                    </button>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="btn-content  mb-1 mt-3">
                    <a href="/tambah_matakuliah" class="btn btn-tambahakun ms-lg-0 ms-3"><span class="fw-bold">+</span>
                        Tambah Mata Kuliah</a>
                </div>


                <!-- AWAL Table Untuk Mata Kuliah  -->
                <table class="table table-borderless w-50 active mt-4 ms-lg-0 ms-3" id="table-all">
                    <thead style="background-color: #D4F3FF;">
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th class="action-header text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($datamatakuliah as $rowmk)
                        <tr>
                            <td>{{ $no++ }}</td>   
                            <td>
                                <div>
                                    <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                        <h5 class="transaction-game">{{ $rowmk->nama_matakuliah }}</h5>
                                    </div>
                                </div>
                            </td>

                            <td class="action">
                                <a href="/tampilkan_matakuliah/{{ $rowmk->id }}" class="text-decoration-none"><button
                                        class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>
                                <button class="btn-transaction bg-danger text-white mx-auto hapusmatakuliah" 
                                data-bs-toggle="modal" data-bs-target="#exampleModal" 
                                data-nama="{{ $rowmk->nama_matakuliah }}" 
                                onclick="hapus(`{{ $rowmk->id }}`,`{{ $rowmk->nama_matakuliah }}`)">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- AKHIR Table Untuk Mata Kuliah  -->
                <form action="/delete/" class="hapusmatakuliah">
                    @csrf
                    @method('delete')
                </form>
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
        function hapus(id, nama_matakuliah){
            // console.log('tess');
            let url=/delete_matakuliah/id;
            $('.hapusmatakuliah').attr('action',url);
            $('.hapusmatakuliah').sumbit;
            // var id = $(this).attr('data-id');
            // var nama_matakuliah = $(this).attr('data-nama');
            swal({
                    title: "Anda yakin?",
                    text: "Anda akan menghapus Mata Kuliah " + nama_matakuliah + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete_matakuliah/" + id + ""
                        // swal("Akun dosen berhasil di hapus", {
                        //     icon: "success",
                        // });
                    } else {
                        swal("Mata kuliah tidak jadi di hapus");
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


