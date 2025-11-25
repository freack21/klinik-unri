<?php

namespace App\Livewire\Admin\Kontak;

use App\Models\Kontak;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Create extends Component
{
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

    public function save()
    {
        $this->validate();

        Kontak::create([
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
        return view('livewire.admin.kontak.create');
    }
}
