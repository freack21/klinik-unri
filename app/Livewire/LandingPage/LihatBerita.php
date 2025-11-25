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
        $this->berita = \App\Models\Berita::find($this->id);
    }

    public function render()
    {
        return view('livewire.landing-page.lihat-berita');
    }
}
