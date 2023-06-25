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

// Route Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu-majalah', [App\Http\Controllers\HomeController::class, 'majalah'])->name('majalah');
Route::get('/menu-layanan', [App\Http\Controllers\HomeController::class, 'layanan'])->name('layanan');
Route::get('/menu-kepala-dinas', [App\Http\Controllers\HomeController::class, 'kepalaDinas'])->name('kepalaDinas');
Route::get('/menu-visi-misi', [App\Http\Controllers\HomeController::class, 'visiMisi'])->name('visiMisi');
Route::get('/menu-tupoksi', [App\Http\Controllers\HomeController::class, 'tupoksi'])->name('tupoksi');
Route::get('/menu-struktur-organisasi', [App\http\Controllers\HomeController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');

Route::get('/detail-berita/{slug}', [App\Http\Controllers\HomeController::class, 'detailBerita'])->name('detailBerita');
// Route Home End


//Route Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Kepala Dinas
    Route::resource('/kepaladinas', App\Http\Controllers\Admin\KepalaDinasController::class);

    // Struktur Organisasi
    Route::resource('/strukturorganisasi', App\Http\Controllers\Admin\StrukturOrganisasiController::class);

    // Tupoksi
    Route::resource('/tupoksi', App\Http\Controllers\Admin\TupoksiController::class);

    // Visi Misi
    Route::resource('/visimisi', App\Http\Controllers\Admin\VisiMisiController::class);

    // Service
    Route::resource('/services', App\Http\Controllers\Admin\ServiceController::class);

    // Document
    Route::resource('/document', App\Http\Controllers\Admin\DocumentController::class);
});
//Route Admin End
