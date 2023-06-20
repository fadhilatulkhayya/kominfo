<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/beranda_admin"><img src="{{ asset('template/dashboard') }}/images/logo-diskominfo1.png"
                            alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @yield('menuDashboard')">
                    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub @yield('menuProfil')">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person"></i>
                        <span>Profil</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="">Kepala Dinas</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="">Visi & Misi</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="">Tugas Pokok & Fungsi</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/menu_struktur_organisasi">Struktur Organisasi</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item @yield('menuMajalah')">
                    <a href="/menu_majalah" class='sidebar-link'>
                        <i class="bi bi-file-earmark-richtext-fill"></i>
                        <span>E-Magazine</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('menuLayanan')">
                    <a href="{{ route('admin.services.index') }}" class='sidebar-link'>
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
