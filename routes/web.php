<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicPageController;
use App\Http\Middleware\AdminAuthenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/kontak', [PublicPageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PublicPageController::class, 'submitContact'])->name('contact.submit');

Route::prefix('profil')->name('profile.')->group(function () {
    Route::view('/visi-misi', 'pages.profile.visi-misi')->name('visi-misi');
    Route::view('/sejarah', 'pages.profile.sejarah')->name('sejarah');
    Route::view('/geografis', 'pages.profile.geografis')->name('geografis');
    Route::view('/struktur-organisasi', 'pages.profile.struktur-organisasi')->name('struktur-organisasi');
    Route::view('/lembaga-daerah', 'pages.profile.lembaga-daerah')->name('lembaga-daerah');
});

Route::prefix('layanan')->name('service.')->group(function () {
    Route::view('/kependudukan', 'pages.service.kependudukan')->name('kependudukan');
    Route::view('/perizinan', 'pages.service.perizinan')->name('perizinan');
    Route::view('/kesehatan', 'pages.service.kesehatan')->name('kesehatan');
    Route::view('/pendidikan', 'pages.service.pendidikan')->name('pendidikan');
    Route::view('/pajak-retribusi', 'pages.service.pajak-retribusi')->name('pajak-retribusi');
    Route::view('/ketenagakerjaan', 'pages.service.ketenagakerjaan')->name('ketenagakerjaan');
    Route::view('/mobil-siaga', 'pages.service.mobil-siaga')->name('mobil-siaga');
});

Route::prefix('pariwisata')->name('tourism.')->group(function () {
    Route::get('/destinasi-wisata', [PublicPageController::class, 'tourismDestination'])->name('destinasi-wisata');
    Route::view('/event-festival', 'pages.tourism.event-festival')->name('event-festival');
    Route::view('/kuliner-khas', 'pages.tourism.kuliner-khas')->name('kuliner-khas');
    Route::get('/umkm-desa', [PublicPageController::class, 'umkm'])->name('umkm-desa');
    Route::view('/kontak-informasi', 'pages.tourism.kontak-informasi')->name('kontak-informasi');
});

Route::prefix('informasi')->name('information.')->group(function () {
    Route::get('/berita-terbaru', [PublicPageController::class, 'news'])->name('berita-terbaru');
    Route::get('/agenda', [PublicPageController::class, 'agenda'])->name('agenda');
    Route::get('/pengumuman', [PublicPageController::class, 'announcements'])->name('pengumuman');
    Route::view('/transparansi', 'pages.information.transparansi')->name('transparansi');
    Route::view('/regulasi', 'pages.information.regulasi')->name('regulasi');
});

Route::prefix('data')->name('data.')->group(function () {
    Route::view('/data-penduduk', 'pages.data.data-penduduk')->name('data-penduduk');
    Route::view('/produk-hukum', 'pages.data.produk-hukum')->name('produk-hukum');
});

Route::prefix('ppid')->name('ppid.')->group(function () {
    Route::view('/profil-ppid', 'pages.ppid.profil-ppid')->name('profil-ppid');
    Route::get('/daftar-informasi-publik', [PublicPageController::class, 'ppid'])->name('daftar-informasi-publik');
});

Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminAuthenticate::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::post('/delete', [AdminController::class, 'destroy'])->name('destroy');
});

