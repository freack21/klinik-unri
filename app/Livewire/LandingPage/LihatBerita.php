<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class LihatBerita extends Component
{
    public $id;
    public $berita;

    public function mount($id)
    {
        $this->id = $id;
        $this->berita = array_column(Berita::$beritaList, null, 'id')[$id] ?? null;
    }

    public function render()
    {
        return view('livewire.landing-page.lihat-berita');
    }
}
