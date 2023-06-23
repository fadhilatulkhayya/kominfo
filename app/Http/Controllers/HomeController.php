<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\KepalaDinas;
use App\Models\VisiMisi;
use App\Models\Tupoksi;
use App\Models\Majalah;
use App\Models\StrukturOrganisasi;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        $articles = $this->apiAllArticle();

        return view('dashboard.home', compact('services', 'articles'));
    }

    public function majalah()
    {
        $majalahs = Majalah::latest()->get();
        return view('dashboard.majalah', compact('majalahs'));
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

    public function detailBerita($slug)
    {
        $articles = $this->apiAllArticle();
        $article = $this->apiDetailArticle($slug);

        return view('dashboard.detail_berita', compact('article', 'articles'));
    }

    private function apiAllArticle()
    {
        $client = new Client();
        $url = "https://berita.bonebolangokab.go.id/api/article";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return $responseBody;
    }

    private function apiDetailArticle($slug)
    {
        $client = new Client();
        $url = "https://berita.bonebolangokab.go.id/api/article/$slug";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return $responseBody;
    }
}
