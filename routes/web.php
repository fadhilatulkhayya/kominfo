<?php

use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\TupoksiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Dashboard Start

Route::get('/', function () {
    return view('dashboard.home');
});
Route::get('/majalah', function () {
    return view('dashboard.majalah');
});
Route::get('/layanan', function () {
    return view('dashboard.layanan');
});
Route::get('/berita', function () {
    return view('dashboard.berita');
});

//Route Dashboard Profil
Route::get('/kepala-dinas', function () {
    return view('dashboard.profil.kepaladinas');
});
Route::get('/visi-misi', function () {
    return view('dashboard.profil.visimisi');
});
Route::get('/menu-tupoksi', function () {
    return view('dashboard.profil.tupoksi');
});
Route::get('/struktur-organisasi', function () {
    return view('dashboard.profil.strukturorganisasi');
});
// Route Dashboard End


//Route Admin
Route::get('/beranda_admin', function () {
    return view('admin.index');
});

Route::get('/menu_struktur_organisasi', function () {
    return view('admin.profil.struktur_organisasi.index');
});

Route::resource('kepaladinas', KepalaDinasController::class);

Route::resource('visimisi', VisiMisiController::class);

Route::resource('tupoksi', TupoksiController::class);

Route::get('/menu_majalah', function () {
    return view('admin.majalah.index');
});

Route::get('/menu_layanan', function () {
    return view('admin.layanan.index');
});

Route::get('/menu_berita', function () {
    return view('admin.berita.index');
});
