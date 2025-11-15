<?php

use App\Livewire\LandingPage\Home;
use App\Livewire\LandingPage\LihatPengumuman;
use App\Livewire\LandingPage\Pengumuman;
use App\Livewire\LandingPage\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage\Berita;
use App\Livewire\LandingPage\Layanan;
use App\Livewire\LandingPage\LihatBerita;
use App\Livewire\LandingPage\LihatLayanan;
use App\Livewire\LandingPage\LihatSemuaBerita;
use App\Livewire\LandingPage\Kontak;

Route::get('/', Profile::class)->name('landingpage.profile');

Route::get('/pengumuman', Pengumuman::class)->name('landingpage.pengumuman');
Route::get('/pengumuman/{id}', LihatPengumuman::class)->name('landingpage.lihat-pengumuman');

Route::get('/berita', Berita::class)->name('landingpage.berita');
Route::get('/berita/semua', LihatSemuaBerita::class)->name('landingpage.berita.semua');
Route::get('/berita/{id}', LihatBerita::class)->name('landingpage.lihat-berita');

Route::get('/layanan', Layanan::class)->name('landingpage.layanan');
Route::get('/layanan/{id}', LihatLayanan::class)->name('landingpage.lihat-layanan');

Route::get('/kontak', Kontak::class)->name('landingpage.kontak');
