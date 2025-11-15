<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class LihatSemuaBerita extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.landing-page.lihat-semua-berita', [
            'berita' => Berita::$beritaList,
        ]);
    }
}
