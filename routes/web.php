<?php

use App\Livewire\LandingPage\Home;
use App\Livewire\LandingPage\LihatPengumuman;
use App\Livewire\LandingPage\Pengumuman;
use App\Livewire\LandingPage\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Profile::class)->name('landingpage.profile');
Route::get('/pengumuman', Pengumuman::class)->name('landingpage.pengumuman');
Route::get('/pengumuman/{id}', LihatPengumuman::class)->name('landingpage.lihat-pengumuman');
