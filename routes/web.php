<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SktmController;
use App\Http\Controllers\SkMenikaController;
use App\Http\Controllers\BelumMenikaController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\RekomRumahIbadahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SkPenghasilanController;
use App\Http\Controllers\SkgrHibaController;
use App\Http\Controllers\SprptController;
use App\Http\Controllers\SkPindahWilayaController;
use App\Http\Controllers\SuratTeregistrasiController;
use App\Http\Controllers\DomisiliUsahaController;
use App\Http\Controllers\SkBedaDataController;


// Halaman utama
Route::get('/', function () {
    return view('auth/login');
});

// Rute untuk SKTM dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/sktm/{id}/print', [SktmController::class, 'print'])->name('sktm.print');
    Route::resource('sktm', SktmController::class);
    Route::resource('sktm', SktmController::class);
});

// Rute untuk SK Menika
Route::middleware(['auth'])->group(function () {
    Route::get('sk_menika/{id}/print', [SkMenikaController::class, 'print'])->name('sk_menika.print');
    Route::resource('sk_menika', SkMenikaController::class);
});

// Rute untuk SK Belum Menika
Route::middleware(['auth'])->group(function () {
    Route::get('/sk_belum_menika/{id}/print', [BelumMenikaController::class, 'print'])->name('sk_belum_menika.print');
    Route::resource('sk_belum_menika', BelumMenikaController::class);
});

// Rute untuk SK Kematian
Route::middleware(['auth'])->group(function () {
    Route::get('/sk_kematian/{id}/print', [KematianController::class, 'print'])->name('sk_kematian.print');
    Route::resource('sk_kematian', KematianController::class);
});

// Rute untuk SKPenghasilan
Route::middleware(['auth'])->group(function () {
    Route::get('/sk_penghasilan/{id}/print', [SkPenghasilanController::class, 'print'])->name('sk_penghasilan.print');
    Route::resource('sk_penghasilan', SkPenghasilanController::class);
});

// Rute untuk rekom rumah ibadah
Route::middleware(['auth'])->group(function () {
    Route::get('/sk_rekom_rumah_ibadah/{id}/print', [RekomRumahIbadahController::class, 'print'])->name('sk_rekom_rumah_ibadah.print');
    Route::resource('sk_rekom_rumah_ibadah', RekomRumahIbadahController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/sk_pindah_wilaya/{id}/print', [SkPindahWilayaController::class, 'print'])->name('sk_pindah_wilaya.print');
    Route::resource('sk_pindah_wilaya', SkPindahWilayaController::class);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/skgr/{id}/print', [SkgrHibaController::class, 'print'])->name('skgr.print');
    Route::resource('skgr', SkgrHibaController::class);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/sprpt/{id}/print', [SprptController::class, 'print'])->name('sprpt.print');
    Route::resource('sprpt', SprptController::class);
    
});
Route::middleware(['auth'])->group(function () {
    Route::get('/surat_teregistrasi/{id}/print', [SuratTeregistrasiController::class, 'print'])->name('surat_teregistrasi.print');
    Route::resource('surat_teregistrasi', SuratTeregistrasiController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/sk_beda_data/{id}/print', [SkBedaDataController::class, 'print'])->name('sk_beda_data.print');
    Route::resource('sk_beda_data', SkBedaDataController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/domisili_usaha/{id}/print', [DomisiliUsahaControllerr::class, 'print'])->name('domisili_usaha.print');
    Route::resource('domisili_usaha',DomisiliUsahaController::class);
});

// Rute untuk Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Rute untuk Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

