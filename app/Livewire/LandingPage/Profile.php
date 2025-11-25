<?php

namespace App\Livewire\LandingPage;

use App\Models\Profile as ProfileModel;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $profile = ProfileModel::first();
        return view('livewire.landing-page.profile', [
            'profile' => $profile
        ]);
    }
}
