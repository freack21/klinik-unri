<?php

namespace App\Livewire\Admin\Dokter;

use App\Models\Dokter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $specialization = '';

    #[Validate('nullable|image|max:1024')]
    public $image;

    #[Validate('required')]
    public $patients = '';

    #[Validate('required')]
    public $experience = '';

    #[Validate('required')]
    public $education = '';

    #[Validate('required')]
    public $languages = '';

    #[Validate('required|array')]
    public $skills = [];

    #[Validate('required|array')]
    public $schedule = [];

    public function mount()
    {
        $this->schedule = [
            ['day' => 'Senin', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ['day' => 'Selasa', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ['day' => 'Rabu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ['day' => 'Kamis', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ['day' => 'Jum’at', 'time' => '08.00 – 12.00 WIB', 'available' => true],
            ['day' => 'Sabtu', 'time' => '08.00 – 12.00 WIB', 'available' => true],
        ];
    }

    public function addSkill()
    {
        $this->skills[] = '';
    }

    public function removeSkill($index)
    {
        unset($this->skills[$index]);
        $this->skills = array_values($this->skills);
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('dokter', 'public');
        }

        Dokter::create([
            'name' => $this->name,
            'specialization' => $this->specialization,
            'image' => $imagePath ? 'storage/' . $imagePath : null,
            'patients' => $this->patients,
            'experience' => $this->experience,
            'education' => $this->education,
            'languages' => $this->languages,
            'skills' => $this->skills,
            'schedule' => $this->schedule,
        ]);

        return $this->redirect(route('admin.dokter.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.dokter.create');
    }
}
