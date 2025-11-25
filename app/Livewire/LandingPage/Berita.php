<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Berita extends Component
{
    public $search = '';

    public function render()
    {
        $berita = \App\Models\Berita::latest('tanggal')->get();

        return view('livewire.landing-page.berita', [
            'headNews' => $berita->first(),
            'latestNews' => $berita->skip(1),
        ]);
    }
}
