<?php

namespace App\Livewire\LandingPage;

use App\Models\Profile as ProfileModel;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $profile = ProfileModel::first();
        $berita = \App\Models\Berita::latest('tanggal')->take(4)->get();

        return view('livewire.landing-page.profile', [
            'profile' => $profile,
            'berita' => $berita
        ]);
    }
}
