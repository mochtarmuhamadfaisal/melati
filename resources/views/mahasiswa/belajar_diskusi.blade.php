@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar-diskusi.css') }}">
@endpush
@section('konten_mahasiswa')
    {{-- <!-- AWAL PAGE BELAJAR-DISKUSI -->
        <section class="diskusi">
            <div class="container">
                <div class="row text-center" style="margin-top: 5rem;">
                    <p class="text-fitur mb-1">
                        DISKUSI🧏‍♂️
                    </p>
                    <h2 class="text-judul-fitur mb-3" style="font-weight: 600;">
                        Masukan Password Untuk Mendapatkan Grup
                    </h2>
                </div>
    
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-12 col-lg-6">
                        <form class="mb-5">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-fitur">Password</label>
                                <input type="password" class="form-control" id="myInput"
                                    style="border-radius: 15px; height: 3rem; border-color: #2390B9;">
                                <input class="ceklis mt-3 text-caption" type="checkbox" onclick="myFunction()">Tampilkan
                                Password
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-fill mb-5 ">Submit</button>
                            </div>
                        </form>
                        <a href="/belajar" class="text-decoration-none " style="color: #2390B9;">
                            <span class="fw-bold"><</span>Kembali</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- AKHIR PAGE BELAJAR-DISKUSI --> --}}
    {{-- <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script> --}}

    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    
    <div class="container text-center  mt-3 mb-3">
        @if (Auth::user()->role->name === "dosen")
        
        @else
        <button type="button" class="btn py-2 px-4 rounded-pill" style="background-color: #2390B9; color: white" data-bs-toggle="modal" data-bs-target="#exampleModalll">
            Tambah pertanyaan
        </button>
        @endif
        

        <!-- Modal -->
        <form action="/tambah_diskusi" method="POST">
            @csrf 
            <div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pertanyaan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex ms-3 mt-3 mb-5">
                                <textarea class="form-control" type="text" name="pertanyaan" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn rounded-pill px-4" style="background-color: #2390B9; color: white">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-lg-8 col-12">
            <!-- Button trigger modal -->
            @foreach ($datapertanyaan as $rowpertanyaan)
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mt-3" style="border: 2px solid #2390B9; border-radius: 20px">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" style="border-radius: 20px"
                            data-bs-target="#collapseOne-{{ $rowpertanyaan->id }}" aria-expanded="true" aria-controls="collapseOne">
                            <div>
                                <p class="text-muted" style="font-size: 13px">{{ $rowpertanyaan->users->nama }}</p>
                                <p class="fw-bold" style="margin-top: -10px">{{ $rowpertanyaan->pertanyaan }}</p>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne-{{ $rowpertanyaan->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <form action="/tambah_jawaban" method="POST">
                        <div class="d-flex ms-3 mt-3 mb-5">
                                @csrf
                                <input type="hidden" value="{{ $rowpertanyaan->id }}" name="id_diskusi">
                                <textarea class="form-control" style="width: 87%;" type="text" name="jawaban" required></textarea>
                                <button type="submit" class="btn h-25 ms-3 rounded-pill" style="background-color: #2390B9; color: white">Jawab</button>
                            </div>
                        </form>
                        <div class="accordion-body">
                            @foreach ($datajawaban as $rowjawaban)
                            @if ($rowpertanyaan->id == $rowjawaban->id_diskusi)
                            <div class="row">
                                <div class="">
                                    <p class="text-muted" style="font-size: 13px">{{ $rowjawaban->users->nama }}</p>
                                    <p style="margin-top: -10px">{{ $rowjawaban->jawaban }}</p>
                                </div>
                                @if ($rowjawaban->id_user == Auth::user()->id)
                                <div>
                                    {{-- <button class="btn-transaction bg-danger text-white mx-auto hapuskomentar" 
                                    data-bs-toggle="modal" onclick="hapus(`{{ $rowjawaban->id }}`)">Hapus</button> --}}
                                    {{-- <a href="/delete_komentar/{{ $ }}" class="text-decoration-none text-danger hapuskomentar" data-bs-toggle="modal" onclick="hapus(`{{ $rowjawaban->id }}`)"><p class="text-end fw-light fs-6 fst-italic">Hapus</p></a> --}}
                                    <a href="/delete_komentar/{{ $rowjawaban->id }}" class="text-decoration-none text-danger"><p class="text-end fw-light fs-6 fst-italic">Hapus</p></a>

                                    {{-- <a href="#" komentar-id="{{$rowjawaban->id}}" class="text-decoration-none text-danger hapusKomentar" data-original-title="Hapus"><p class="text-end fw-light fs-6 fst-italic">Hapus</p></a> --}}
                                </div>
                                @endif
                            </div>
                            <hr>
                            @endif
                            @endforeach
                            <form action="/delete_komentar/" class="hapuskomentar">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

      {{-- jquery --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     {{-- allert sweet allert --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script>
         function hapus(id){
             // console.log('tess');
             let url=/delete_komentar/id;
             $('.hapuskomentar').attr('action',url);
             $('.hapuskomentar').sumbit;
             // var id = $(this).attr('data-id');
             // var nama_matakuliah = $(this).attr('data-nama');
             swal({
                     title: "Anda yakin?",
                     text: "Anda akan menghapus komentar ini?"",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                 })
                 .then((willDelete) => {
                     if (willDelete) {
                         window.location = "/delete_komentar/" + id + ""
                         // swal("Akun dosen berhasil di hapus", {
                         //     icon: "success",
                         // });
                     } else {
                         swal("Komentar tidak jadi di hapus");
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
