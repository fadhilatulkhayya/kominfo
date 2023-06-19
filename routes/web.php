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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
