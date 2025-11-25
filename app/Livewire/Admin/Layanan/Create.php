<?php

namespace App\Livewire\Admin\Layanan;

use App\Models\Layanan;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required|array')]
    public $fasilitas = [];

    public function addFasilitas()
    {
        $this->fasilitas[] = '';
    }

    public function removeFasilitas($index)
    {
        unset($this->fasilitas[$index]);
        $this->fasilitas = array_values($this->fasilitas);
    }

    public function save()
    {
        $this->validate();

        Layanan::create([
            'title' => $this->title,
            'icon' => $this->icon,
            'description' => $this->description,
            'fasilitas' => $this->fasilitas,
        ]);

        return $this->redirect(route('admin.layanan.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.layanan.create');
    }
}
