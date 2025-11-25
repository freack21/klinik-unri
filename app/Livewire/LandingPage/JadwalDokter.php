<?php

namespace App\Livewire\LandingPage;

use App\Models\Dokter;
use Livewire\Component;

class JadwalDokter extends Component
{
    public $selectedDoctorId;

    public $doctors;

    public function mount()
    {
        $this->doctors = Dokter::all();
        if ($this->doctors->isNotEmpty()) {
            $this->selectedDoctorId = $this->doctors->first()->id;
        }
    }

    public function selectDoctor($id)
    {
        $this->selectedDoctorId = $id;
    }

    public function render()
    {
        $selectedDoctor = $this->doctors->firstWhere('id', $this->selectedDoctorId);

        return view('livewire.landing-page.jadwal-dokter', [
            'selectedDoctor' => $selectedDoctor,
            'doctors' => $this->doctors,
        ]);
    }
}
