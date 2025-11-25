<?php

namespace App\Livewire\Admin\Kontak;

use App\Models\Kontak;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public $kontakId;

    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $service_hours = '';

    #[Validate('required')]
    public $phone = '';

    #[Validate('required')]
    public $whatsapp = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $map_embed_url = '';

    public function mount($id)
    {
        $kontak = Kontak::findOrFail($id);
        $this->kontakId = $kontak->id;
        $this->description = $kontak->description;
        $this->service_hours = $kontak->service_hours;
        $this->phone = $kontak->phone;
        $this->whatsapp = $kontak->whatsapp;
        $this->email = $kontak->email;
        $this->map_embed_url = $kontak->map_embed_url;
    }

    public function update()
    {
        $this->validate();

        $kontak = Kontak::findOrFail($this->kontakId);
        $kontak->update([
            'description' => $this->description,
            'service_hours' => $this->service_hours,
            'phone' => $this->phone,
            'whatsapp' => $this->whatsapp,
            'email' => $this->email,
            'map_embed_url' => $this->map_embed_url,
        ]);

        return $this->redirect(route('admin.kontak.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.kontak.edit');
    }
}
