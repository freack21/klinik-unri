<?php

use App\Livewire\LandingPage\Home;
use App\Livewire\LandingPage\LihatPengumuman;
use App\Livewire\LandingPage\Pengumuman;
use App\Livewire\LandingPage\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage\Berita;
use App\Livewire\LandingPage\JadwalDokter;
use App\Livewire\LandingPage\Layanan;
use App\Livewire\LandingPage\LihatBerita;
use App\Livewire\LandingPage\LihatLayanan;
use App\Livewire\LandingPage\LihatSemuaBerita;
use App\Livewire\LandingPage\Kontak;
use App\Livewire\Auth\Login;

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/pengumuman', \App\Livewire\Admin\Pengumuman\Index::class)->name('pengumuman.index');
    Route::get('/pengumuman/tambah', \App\Livewire\Admin\Pengumuman\Create::class)->name('pengumuman.create');
    Route::get('/pengumuman/{id}/edit', \App\Livewire\Admin\Pengumuman\Edit::class)->name('pengumuman.edit');

    Route::get('/berita', \App\Livewire\Admin\Berita\Index::class)->name('berita.index');
    Route::get('/berita/tambah', \App\Livewire\Admin\Berita\Create::class)->name('berita.create');
    Route::get('/berita/{id}/edit', \App\Livewire\Admin\Berita\Edit::class)->name('berita.edit');
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
