<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('dashboard.home', compact('services'));
    }

    public function majalah()
    {
        return view('dashboard.majalah');
    }

    public function layanan()
    {
        $services = Service::latest()->get();
        return view('dashboard.layanan', compact('services'));
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

    public function detailBerita()
    {
        return view('dashboard.detail_berita');
    }
}
