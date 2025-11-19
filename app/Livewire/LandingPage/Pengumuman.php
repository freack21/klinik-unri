<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Pengumuman extends Component
{
    public function render()
    {
        $pengumuman = Pengumuman::all();
        return view('livewire.landing-page.pengumuman', [
            'pengumuman' => $pengumuman,
        ]);
    }
}
