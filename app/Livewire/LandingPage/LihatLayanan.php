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
        $data = array_column(Layanan::$layananList, null, 'id')[$this->id] ?? null;

        return view('livewire.landing-page.lihat-layanan', [
            'layanan' => $data
        ]);
    }
}
