<?php

use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\StrukturOrganisasiController;
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
Route::get('/menu-majalah', function () {
    return view('dashboard.majalah');
});
Route::get('/menu-layanan', function () {
    return view('dashboard.layanan');
});

//Route Dashboard Profil
Route::get('/menu-kepala-dinas', function () {
    return view('dashboard.profil.kepaladinas');
});
Route::get('/menu-visi-misi', function () {
    return view('dashboard.profil.visimisi');
});
Route::get('/menu-tupoksi', function () {
    return view('dashboard.profil.tupoksi');
});
Route::get('/menu-struktur-organisasi', function () {
    return view('dashboard.profil.strukturorganisasi');
});
// Route Dashboard End


//Route Admin
Route::get('/beranda_admin', function () {
    return view('admin.index');
});

Route::resource('strukturorganisasi', StrukturOrganisasiController::class);

Route::resource('kepaladinas', KepalaDinasController::class);

Route::resource('visimisi', VisiMisiController::class);

Route::resource('tupoksi', TupoksiController::class);

Route::resource('majalah', MajalahController::class);

// Route::resource('layanan', LayananC::class);
