{{-- AWAL SIDEBAR --}}
<div class="row">
    <div class="col-12 col-lg-3 col-navbar d-block">

        <aside class="sidebar">
            <div class="d-flex flex-column justify-content-center align-items-center">

                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/navbar-times.svg') }}" class="" alt="">
                </button>

                <div class="profile-img">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" style="width: 100%; object-fit: cover"
                        alt="">
                </div>

                    {{-- <h4 class="profile-name">{{ Auth::guard('dosen')->user()->nama }} </h4> --}}
                <h4 class="profile-name">{{ Auth::guard('dosen')->user()->nama }} </h4>
                <p class="profile-email">Dosen</p>
            </div>


            <div class="sidebar-item-container">

                <a href="/dashboard_dosen" class="sidebar-item {{ $sidebar === 'Dashboard' ? 'active' : '' }}"
                    onclick="toggleActive(this)">
                    <span>Dashboard</span>
                </a>

                <a href="/materi" class="sidebar-item {{ $sidebar === 'Materi' ? 'active' : '' }}"
                    onclick="toggleActive(this)">
                    <span>Materi</span>
                </a>

                <a href="/pengaturan_dosen" class="sidebar-item {{ $sidebar === 'Pengaturan' ? 'active' : '' }}"
                    onclick="toggleActive(this)">
                    <span>Pengaturan</span>
                </a>

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                    class="sidebar-item" onclick="toggleActive(this)" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <span>Keluar</span>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </div>
        </aside>
    </div>
    {{-- AKHIR SIDEBAR --}}
