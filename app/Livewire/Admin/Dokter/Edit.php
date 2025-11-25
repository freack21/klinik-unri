<?php

namespace App\Livewire\Admin\Dokter;

use App\Models\Dokter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public $dokterId;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $specialization = '';

    #[Validate('nullable|image|max:1024')]
    public $image;
    public $existingImage;

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

    public function mount($id)
    {
        $dokter = Dokter::findOrFail($id);
        $this->dokterId = $dokter->id;
        $this->name = $dokter->name;
        $this->specialization = $dokter->specialization;
        $this->existingImage = $dokter->image;
        $this->patients = $dokter->patients;
        $this->experience = $dokter->experience;
        $this->education = $dokter->education;
        $this->languages = $dokter->languages;
        $this->skills = $dokter->skills ?? [];
        $this->schedule = $dokter->schedule ?? [];
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

    public function update()
    {
        $this->validate();

        $dokter = Dokter::findOrFail($this->dokterId);

        $imagePath = $dokter->image;
        if ($this->image) {
            if ($dokter->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $dokter->image));
            }
            $imagePath = 'storage/' . $this->image->store('dokter', 'public');
        }

        $dokter->update([
            'name' => $this->name,
            'specialization' => $this->specialization,
            'image' => $imagePath,
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
        return view('livewire.admin.dokter.edit');
    }
}
