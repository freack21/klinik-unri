<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use App\Models\Pengumuman as PengumumanModel;

class LihatPengumuman extends Component
{
    public $id;
    public $pengumuman;

    public function mount($id)
    {
        $this->id = $id;
        $this->pengumuman = PengumumanModel::find($id);
    }

    public function render()
    {
        return view('livewire.landing-page.lihat-pengumuman');
    }
}
