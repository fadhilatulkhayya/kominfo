<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('template/dashboard') }}/images/logo-diskominfo1.png" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'>Main Menu</li>

                <li class="sidebar-item @yield('menuDashboard')">
                    <a href="/beranda_admin" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub @yield('menuProfil')">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-square" width="20"></i>
                        <span>Profil</span>
                    </a>
                    <ul class="submenu ">

                        <li>
                            <a href="/menu_kepala_dinas">Kepala Dinas</a>
                        </li>

                        <li>
                            <a href="{{ route('visimisi.index') }}">Visi & Misi</a>
                        </li>

                        <li>
                            <a href="/menu_tupoksi">Tugas Pokok & Fungsi</a>
                        </li>

                        <li>
                            <a href="/menu_struktur_organisasi">Struktur Organisasi</a>
                        </li>

                    </ul>

                </li>

                <li class="sidebar-item @yield('menuMajalah')">
                    <a href="/menu_majalah" class='sidebar-link'>
                        <i class="bi bi-book" width="20"></i>
                        <span>E-Magazine</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('menuLayanan')">
                    <a href="/menu_layanan" class='sidebar-link'>
                        <i class="bi bi-window" width="20"></i>
                        <span>Layanan</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('menuBerita')">
                    <a href="/menu_berita" class='sidebar-link'>
                        <i class="bi bi-newspaper" width="20"></i>
                        <span>Berita</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<div id="main">
    <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                <li class="dropdown">
                    <a href="#" data-bs-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar me-1">
                            <img src="{{ asset('template/admin') }}/assets/images/avatar/avatar-s-1.png" alt=""
                                srcset="">
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
