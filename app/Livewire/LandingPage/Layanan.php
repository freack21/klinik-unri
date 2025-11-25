<?php

namespace App\Livewire\LandingPage;

use App\Models\Layanan as LayananModel;
use Livewire\Component;

class Layanan extends Component
{
    public function render()
    {
        $services = LayananModel::all();
        return view('livewire.landing-page.layanan', [
            'services' => $services
        ]);
    }
}
