<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Berita extends Component
{
    public $search = '';

    public function render()
    {
        $berita = \App\Models\Berita::all();

        return view('livewire.landing-page.berita', [
            'headNews' => $berita[0],
            'latestNews' => array_slice($berita, 1),
        ]);
    }
}
