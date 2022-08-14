<section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
    <div class="container-fluid mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif;">
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <a href="#">
                <img style="margin-right: 0.75rem" src="{{ asset('img/logo.png') }}" alt="" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-white border-0">
                        <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0;">
                            <a class="modal-title" id="targetModalLabel">
                                <img style="margin-top: 0.5rem" src="{{ asset('img/logo.png') }}" alt="" />
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <!-- Awal Navbar Versi responsive -->
                        <div class="modal-body" style="padding: 5rem; padding-top: 0; padding-bottom: 0; z-index: 1;"
                            !important>
                            <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                <li class="nav-item {{ $navbar === 'Beranda' ? 'active' : '' }}">
                                    <a class="nav-link" href="/beranda_mahasiswa">Beranda</a>
                                </li>

                                <li class="nav-item {{ $navbar === 'Belajar' ? 'active' : '' }}">
                                    <a class="nav-link" href="/belajar">Belajar</a>
                                </li>

                                <li class="nav-item {{ $navbar === 'Diskusi' ? 'active' : '' }}">
                                    <a class="nav-link" href="/diskusi">Diskusi</a>
                                </li>

                                <li class="nav-item {{ $navbar === 'Showcase' ? 'active' : '' }}">
                                    <a class="nav-link" href="/showcase">Showcase</a>
                                </li>
                                @if (auth()->check())
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                            style="color: #2390b9;">
                                            <img class="rounded-circle me-2" src="assets/img/gue.jpg"
                                                style="width: 50px; height: 50px; border: 3.5px solid #2390B9;">
                                        </a>
                                        <ul class="dropdown-menu mb-5" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="/profil_mahasiswa">Profil</a></li>
                                            <li><a class="dropdown-item" href="/pengaturan_mahasiswa">Pengaturan</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                                    class="dropdown-item" onclick="toggleActive(this)"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <span>Keluar</span>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </a></li>
                                        </ul>
                                    </li>
                            </ul>
                            @else
                                <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                    <a href="{{ route('loginakun') }}" class="btn btn-fill text-white">Login</a>
                                </div>
                            @endif
                            </div>
                     </div>
                </div>
            </div>
            <!-- Akhir Navbar Versi Responsive -->

            <!-- Awal Navbar Versi Desktop -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav ms-auto me-auto mt-lg-0 ">
                    
                    <li class="nav-item {{ $navbar === 'Beranda' ? 'active' : '' }}">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>

                    @auth
                    @if (Auth::user()->role->name === "mahasiswa")
        
                    <li class="nav-item {{ $navbar === 'Belajar' ? 'active' : '' }}">
                        <a class="nav-link" href="/belajar">Belajar</a>
                    </li>

                    <li class="nav-item {{ $navbar === 'Diskusi' ? 'active' : '' }}">
                        <a class="nav-link" href="/belajar_diskusi">Diskusi</a>
                    </li>

                    @elseif (Auth::user()->role->name === "dosen")
                    <li class="nav-item {{ $navbar === 'Diskusi' ? 'active' : '' }}">
                        <a class="nav-link" href="/belajar_diskusi">Diskusi</a>
                    </li>

                    <li class="nav-item {{ $navbar === 'Diskusi' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard_dosen">Dasboard Dosen</a>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item {{ $navbar === 'Showcase' ? 'active' : '' }}">
                        <a class="nav-link" href="/showcase">Showcase</a>
                    </li>
                </ul>
                <div class="gap-3 d-flex justify-content-center">
                    @if (auth()->check())
                        <div class="d-flex">
                            <div>
                                <img class="rounded-circle me-2" src="assets/img/gue.jpg"
                                    style="width: 50px; height: 50px; border: 3.5px solid #2390B9;">
                            </div>
                            <div class="dropdown me-4 align-self-center">
                                <a class="dropdown-toggle me-1 show" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true"
                                    style="color: #2390B9;">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(-122px, 38px, 0px); border-radius: 8px; margin-top: 1rem;"
                                    data-popper-placement="bottom-end">
                                    <li><a class="dropdown-item" href="/profil_mahasiswa">Profile</a></li>
                                    <li><a class="dropdown-item" href="/pengaturan_mahasiswa">Pengaturan</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                            class="dropdown-item" onclick="toggleActive(this)" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <span>Keluar</span>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('loginakun') }}" class="btn btn-fill text-white">Login</a>
                    @endif
                    {{-- @endif --}}
                    <!-- <a href="#"> <img class="rounded-circle" src="img/profil.jpg" style="width: 50px; height: 50px ;"></a>
   <i class='bx bx-chevron-down' style="font-size: 40px;"></i> -->
                </div>
            </div>
        </nav>
    </div>
</section>
