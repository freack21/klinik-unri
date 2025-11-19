<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class LihatPengumuman extends Component
{
    public $id;
    public $pengumuman;

    public function mount($id)
    {
        $this->id = $id;
        $this->pengumuman = Pengumuman::find($id);
    }

    public function render()
    {
        return view('livewire.landing-page.lihat-pengumuman');
    }
}
