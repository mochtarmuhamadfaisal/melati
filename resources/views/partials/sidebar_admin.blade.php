 <!-- AWAL SIDEBAR -->
 <div class="row">
    <div class="col-12 col-lg-3 col-navbar d-block">

        <aside class="sidebar">
            <div class="d-flex flex-column justify-content-center align-items-center">

                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="{{ asset('img/navbar-times.svg') }}" class="" alt="">
                </button>

                <div class="profile-img">
                    <img src="{{ asset('img/gue.jpg') }}" class="rounded-circle" style="width: 100%; object-fit: cover" alt="">
                </div>

                <h4 class="profile-name">{{ Auth::guard('admin')->user()->nama }} </h4>
                <p class="profile-email">Admin</p>
            </div>


            <div class="sidebar-item-container">

                <a href="/dashboard_admin" class="sidebar-item {{ ($sidebar === "Dashboard") ? 'active':'' }}" onclick="toggleActive(this)">
                    <span>Dashboard</span>
                </a>

                <a href="/matakuliah" class="sidebar-item {{ ($sidebar === "Mata Kuliah") ? 'active':'' }}" onclick="toggleActive(this)">
                    <span>Mata Kuliah</span>
                </a>

                <a href="/dosen" class="sidebar-item {{ ($sidebar === "Dosen") ? 'active':'' }}" onclick="toggleActive(this)">
                    <span>Dosen</span>
                </a>

                <a href="/mahasiswa" class="sidebar-item {{ ($sidebar === "Mahasiswa") ? 'active':'' }}" onclick="toggleActive(this)">
                    <span>Mahasiswa</span>
                </a>

                <a href="/pengaturan_admin" class="sidebar-item {{ ($sidebar === "Pengaturan") ? 'active':'' }}" onclick="toggleActive(this)">
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
<!-- AKHIR SIDEBAR -->

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}