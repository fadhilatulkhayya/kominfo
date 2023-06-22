<?php

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Service
    Route::resource('/services', App\Http\Controllers\Admin\ServiceController::class);

    // Kepala Dinas
    Route::resource('/kepaladinas', App\Http\Controllers\Admin\KepalaDinasController::class);

    // Majalah
    Route::resource('/majalah', App\Http\Controllers\Admin\MajalahController::class);

    // Struktur Organisasi
    Route::resource('/strukturorganisasi', App\Http\Controllers\Admin\StrukturOrganisasiController::class);

    // Tupoksi
    Route::resource('/tupoksi', App\Http\Controllers\Admin\TupoksiController::class);

    // Visi Misi
    Route::resource('/visimisi', App\Http\Controllers\Admin\VisiMisiController::class);
});
