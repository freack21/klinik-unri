<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use App\Models\Pengumuman as PengumumanModel;

class Pengumuman extends Component
{
    public function render()
    {
        $pengumuman = PengumumanModel::all();
        return view('livewire.landing-page.pengumuman', [
            'pengumuman' => $pengumuman,
        ]);
    }
}
