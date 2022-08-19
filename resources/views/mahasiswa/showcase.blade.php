@extends('layouts.main_mahasiswa')
@push('css_costum')
    <link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-showcase.css') }}">
@endpush
@section('konten_mahasiswa')
    <!-- AWAL PAGE SHOWCASE -->
    @auth
    <section class="showcase">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="text-fitur" style=" margin-top: 6rem;">SHOWCASE🤹‍♀️</h1>
                <div class="text-judul-fitur">Kumpulan Project {{ Auth::user()->nama }}</div>
            </div>
            <div class="row justify-content-center mt-5">
                @php
                    $hitung_showcase_user = \App\Models\Showcase::where('id_user', Auth::user()->id)->count();
                @endphp
                @if ($hitung_showcase_user > 0)
                    @foreach ($datashowcase as $datashowcasee)
                        @if ($datashowcasee->id_user == Auth::user()->id)
                            <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                                <img src="{{ asset('showcase') }}/{{ $datashowcasee->foto }}" class="card-img-top"
                                    alt="..."
                                    style="border-radius: 18px; width: 18rem; height: 18rem; object-fit: cover">
                                <div class="card-body mt-2">
                                    <h5 class="card-title">{{ $datashowcasee->judul_project }}</h5>
                                    <p class="text-caption">{!! \Illuminate\Support\Str::limit($datashowcasee->deskripsi_project, 100, $end='...') !!}</p>
                                    <a href="/showcase_detail/{{ $datashowcasee->id }}" class="btn rounded-pill">Selengkapnya</a>
                                    <a href="/tampilakandata_showcase/{{ $datashowcasee->id }}"><i
                                            class='bx bx-edit-alt bg-warning rounded-pill p-2 ms-3 text-dark'></i></a>
                                    <a href="#" class="hapusshowcase" onclick="hapus(`{{ $datashowcasee->id }}`)"><i class='bx bx-message-square-x bg-danger rounded-pill p-2 ms-1 text-white hapusshowcase'></i></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <form action="/delete/" class="hapusshowcase">
                        @csrf
                        @method('delete')
                    </form>
                @elseif (Auth::user()->role->name == 'dosen')
                @else
                    <div class="row d-flex justify-content-center pb-5">
                        <div class="col-6">
                            <div class="card text-center">
                                <div class="card-header">
                                    Pesan
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Anda belum mengupload data showcase</p>
                                        <footer class="blockquote-footer rounded-pill">Silahkan upload<cite
                                                title="Source Title">showcase anda😎</cite></footer>
                                        <a href="/insertdata_showcase" class="btn btn-primary">Upload Showcase</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
    </section>
    @endauth

    <section class="showcase">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="text-fitur" style=" margin-top: 6rem;">SHOWCASE🤹‍♀️</h1>
                <div class="text-judul-fitur">Kumpulan Project Mahasiswa</div>
            </div>
            <div class="row justify-content-center mt-5">
                @foreach ($datashowcase as $datashowcasee)
                @if (auth()->check())
                        @if ($datashowcasee->id_user != Auth::user()->id)
                            <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                                <img src="{{ asset('showcase') }}/{{ $datashowcasee->foto }}" class="card-img-top"
                                    alt="..."
                                    style="border-radius: 18px; width: 18rem; height: 18rem; object-fit: cover">
                                <div class="card-body mt-2">
                                    <h5 class="card-title">{{ $datashowcasee->judul_project }}</h5>
                                    <p class="text-caption">{!! kata($datashowcasee->deskripsi_project, $limit = 15, $end = ' ... ') !!}</p>
                                    <a href="/showcase_detail/{{ $datashowcasee->id }}" class="btn rounded-pill">Selengkapnya</a>
                                </div>
                            </div>
                        @endif
                    @else
                    <div class="card border-0 rounded-3 ms-2 mb-5" style="width: 20rem;">
                        <img src="{{ asset('showcase') }}/{{ $datashowcasee->foto }}" class="card-img-top"
                            alt="..."
                            style="border-radius: 18px; width: 18rem; height: 18rem; object-fit: cover">
                        <div class="card-body mt-2">
                            <h5 class="card-title">{{ $datashowcasee->judul_project }}</h5>
                            <p class="text-caption">{!! kata($datashowcasee->deskripsi_project, $limit = 15, $end = ' ... ') !!}</p>
                            <a href="/showcase_detail/{{ $datashowcasee->id }}" class="btn rounded-pill">Selengkapnya</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
            </div>
    </section>
    <!-- AKHIR PAGE SHOWCASE -->

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- allert sweet allert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function hapus(id){
            let url=/delete_materi/id;
            $('.hapusshowcase').attr('action',url);
            $('.hapusshowcase').sumbit;
            swal({
                    title: "Anda yakin?",
                    text: "Anda akan menghapus showcase ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete_showcase/" + id
                    } else {
                        swal("Showcase tidak jadi di hapus");
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
