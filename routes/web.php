<?php

use App\Livewire\Auth\Login;
use App\Livewire\LandingPage\Berita;
use App\Livewire\LandingPage\JadwalDokter;
use App\Livewire\LandingPage\Kontak;
use App\Livewire\LandingPage\Layanan;
use App\Livewire\LandingPage\LihatBerita;
use App\Livewire\LandingPage\LihatLayanan;
use App\Livewire\LandingPage\LihatPengumuman;
use App\Livewire\LandingPage\LihatSemuaBerita;
use App\Livewire\LandingPage\Pengumuman;
use App\Livewire\LandingPage\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.profile.index');
    })->name('index');

    Route::get('/pengumuman', \App\Livewire\Admin\Pengumuman\Index::class)->name('pengumuman.index');
    Route::get('/pengumuman/tambah', \App\Livewire\Admin\Pengumuman\Create::class)->name('pengumuman.create');
    Route::get('/pengumuman/{id}/edit', \App\Livewire\Admin\Pengumuman\Edit::class)->name('pengumuman.edit');

    Route::get('/berita', \App\Livewire\Admin\Berita\Index::class)->name('berita.index');
    Route::get('/berita/tambah', \App\Livewire\Admin\Berita\Create::class)->name('berita.create');
    Route::get('/berita/{id}/edit', \App\Livewire\Admin\Berita\Edit::class)->name('berita.edit');

    Route::get('/profile', \App\Livewire\Admin\Profile\Index::class)->name('profile.index');
    Route::get('/profile/tambah', \App\Livewire\Admin\Profile\Create::class)->name('profile.create');
    Route::get('/profile/{id}/edit', \App\Livewire\Admin\Profile\Edit::class)->name('profile.edit');

    Route::get('/layanan', \App\Livewire\Admin\Layanan\Index::class)->name('layanan.index');
    Route::get('/layanan/tambah', \App\Livewire\Admin\Layanan\Create::class)->name('layanan.create');
    Route::get('/layanan/{id}/edit', \App\Livewire\Admin\Layanan\Edit::class)->name('layanan.edit');

    Route::get('/kontak', \App\Livewire\Admin\Kontak\Index::class)->name('kontak.index');
    Route::get('/kontak/tambah', \App\Livewire\Admin\Kontak\Create::class)->name('kontak.create');
    Route::get('/kontak/{id}/edit', \App\Livewire\Admin\Kontak\Edit::class)->name('kontak.edit');

    Route::get('/dokter', \App\Livewire\Admin\Dokter\Index::class)->name('dokter.index');
    Route::get('/dokter/tambah', \App\Livewire\Admin\Dokter\Create::class)->name('dokter.create');
    Route::get('/dokter/{id}/edit', \App\Livewire\Admin\Dokter\Edit::class)->name('dokter.edit');
});

Route::get('/', Profile::class)->name('landingpage.profile');

Route::get('/pengumuman', Pengumuman::class)->name('landingpage.pengumuman');
Route::get('/pengumuman/{id}', LihatPengumuman::class)->name('landingpage.lihat-pengumuman');

Route::get('/berita', Berita::class)->name('landingpage.berita');
Route::get('/berita/semua', LihatSemuaBerita::class)->name('landingpage.berita.semua');
Route::get('/berita/{id}', LihatBerita::class)->name('landingpage.lihat-berita');

Route::get('/layanan', Layanan::class)->name('landingpage.layanan');
Route::get('/layanan/{id}', LihatLayanan::class)->name('landingpage.lihat-layanan');

Route::get('/kontak', Kontak::class)->name('landingpage.kontak');

Route::get('/jadwal-dokter', JadwalDokter::class)->name('landingpage.jadwal-dokter');
