<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function majalah()
    {
        return view('dashboard.majalah');
    }

    public function layanan()
    {
        return view('dashboard.layanan');
    }

    public function kepalaDinas()
    {
        return view('dashboard.profil.kepaladinas');
    }

    public function visiMisi()
    {
        return view('dashboard.profil.visimisi');
    }

    public function tupoksi()
    {
        return view('dashboard.profil.tupoksi');
    }

    public function strukturOrganisasi()
    {
        return view('dashboard.profil.strukturorganisasi');
    }
}
