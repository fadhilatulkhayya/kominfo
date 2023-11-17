<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Document;
use App\Models\Profile;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        $articles = $this->apiAllArticle();

        $categoryArticle = [];
        foreach ($articles as $article) {
            $categoryArticle[] = $this->apiCategoryArticle($article['categories'][0]);
        }

        return view('dashboard.home', compact('services', 'articles', 'categoryArticle'));
    }

    public function majalah()
    {
        return view('dashboard.majalah');
    }

    public function dokumen()
    {
        $documents = Document::latest()->get();
        return view('dashboard.document', compact('documents'));
    }

    public function layanan()
    {
        $services = Service::latest()->get();
        return view('dashboard.layanan', compact('services'));
    }

    public function profile(Profile $profile)
    {
        return view('dashboard.profile', compact('profile'));
    }

    public function detailBerita($slug)
    {
        $articles = $this->apiAllArticle();
        $detailArticles = $this->apiDetailArticle($slug);

        return view('dashboard.detail_berita', compact('detailArticles', 'articles'));
    }

    private function apiAllArticle()
    {
        $url = "https://berita.bonebolangokab.go.id/wp-json/wp/v2/posts";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        } else {
            return response()->json(['message' => 'Gagal mengambil data dari API'], 500);
        }
    }

    private function apiCategoryArticle($id)
    {
        $url = "https://berita.bonebolangokab.go.id/wp-json/wp/v2/categories/$id";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        } else {
            return response()->json(['message' => 'Gagal mengambil data dari API'], 500);
        }
    }

    private function apiDetailArticle($slug)
    {
        $url = "https://berita.bonebolangokab.go.id/api/article/$slug";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        } else {
            return response()->json(['message' => 'Gagal mengambil data dari API'], 500);
        }
    }
}
