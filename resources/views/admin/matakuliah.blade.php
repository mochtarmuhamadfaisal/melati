

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
                    <a href="/tambah_matakuliah" class="btn btn-tambahakun"><span class="fw-bold">+</span>
                        Tambah Mata Kuliah</a>
                </div>


                <!-- AWAL Table Untuk Mata Kuliah  -->
                <table class="table table-borderless w-50 active mt-4" id="table-all">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th class="action-header text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <div class="d-flex flex-column justify-content-center align-items-start mt-2">
                                        <h5 class="transaction-game">Pemrograman Mobile</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="action">
                                <a href="/edit_matakuliah" class="text-decoration-none"><button
                                        class="btn-transaction bg-warning text-white mx-auto">Edit</button></a>
                                <button class="btn-transaction bg-danger text-white mx-auto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- AKHIR Table Untuk Mata Kuliah  -->

                <!-- Awal Modal Hapus -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin mengapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-danger">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Hapus -->
            </div>
        </div>
    </div>
    <!-- Akhir Konten -->
@endsection
