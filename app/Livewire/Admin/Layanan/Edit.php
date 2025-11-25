<?php

namespace App\Livewire\Admin\Layanan;

use App\Models\Layanan;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public $layananId;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required|array')]
    public $fasilitas = [];

    public function mount($id)
    {
        $layanan = Layanan::findOrFail($id);
        $this->layananId = $layanan->id;
        $this->title = $layanan->title;
        $this->icon = $layanan->icon;
        $this->description = $layanan->description;
        $this->fasilitas = $layanan->fasilitas ?? [];
    }

    public function addFasilitas()
    {
        $this->fasilitas[] = '';
    }

    public function removeFasilitas($index)
    {
        unset($this->fasilitas[$index]);
        $this->fasilitas = array_values($this->fasilitas);
    }

    public function update()
    {
        $this->validate();

        $layanan = Layanan::findOrFail($this->layananId);
        $layanan->update([
            'title' => $this->title,
            'icon' => $this->icon,
            'description' => $this->description,
            'fasilitas' => $this->fasilitas,
        ]);

        return $this->redirect(route('admin.layanan.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.layanan.edit');
    }
}
