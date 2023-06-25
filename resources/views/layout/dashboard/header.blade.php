<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="{{ url('https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css') }}" rel="stylesheet" />

    <title>Diskominfo Bone Bolango - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('template/dashboard') }}/images/logo-icon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('template/dashboard') }}/images/logo-icon.png" type="image/png" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/dashboard') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/dashboard') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('template/dashboard') }}/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="{{ asset('template/dashboard') }}/css/animated.css">
    <link rel="stylesheet" href="{{ asset('template/dashboard') }}/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('template/dashboard') }}/images/logo-diskominfo1.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('home') }}" class="@yield('menuBeranda')">Beranda</a></li>
                            <li class="submenu">
                                <a href="#profil" class="@yield('menuProfil')">Profil</a>
                                <ul>
                                    <li><a href="{{ route('kepalaDinas') }}">Kepala Dinas</a></li>
                                    <li><a href="{{ route('visiMisi') }}">Visi & Misi</a></li>
                                    <li><a href="{{ route('tupoksi') }}">Tugas Pokok & Fungsi</a></li>
                                    <li><a href="{{ route('strukturOrganisasi') }}">Struktur Organisasi</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('document') }}" class="@yield('menuDocument')">Dokumen</a></li>
                            <li><a href="{{ route('majalah') }}" class="@yield('menuEMagazine')">E-Magazine</a></li>
                            </li>
                            <li><a href="{{ route('layanan') }}" class="@yield('menuLayanan')">Layanan</a></li>

                            <li></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
