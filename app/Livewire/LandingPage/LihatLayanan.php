<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class LihatLayanan extends Component
{
    public int $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $data = \App\Models\Layanan::find($this->id);

        return view('livewire.landing-page.lihat-layanan', [
            'layanan' => $data,
        ]);
    }
}
