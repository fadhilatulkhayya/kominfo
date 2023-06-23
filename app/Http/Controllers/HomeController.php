<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\KepalaDinas;
use App\Models\VisiMisi;
use App\Models\Tupoksi;
use App\Models\Majalah;
use App\Models\StrukturOrganisasi;

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
        $kepaladinas = KepalaDinas::where('id', 1)->get();

        return view('dashboard.profil.kepaladinas', compact('kepaladinas'));
    }

    public function visiMisi()
    {
        $visimisis = VisiMisi::where('id', 1)->get();
        return view('dashboard.profil.visimisi', compact('visimisis'));
    }

    public function tupoksi()
    {
        $tupoksis = Tupoksi::where('id', 1)->get();
        return view('dashboard.profil.tupoksi', compact('tupoksis'));
    }

    public function strukturOrganisasi()
    {
        $strukturOrganisasis = StrukturOrganisasi::where('id', 1)->get();
        return view('dashboard.profil.strukturorganisasi', compact('strukturOrganisasis'));
    }

    public function detailBerita()
    {
        return view('dashboard.detail_berita');
    }
}
