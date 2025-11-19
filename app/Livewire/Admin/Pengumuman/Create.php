<?php

namespace App\Livewire\Admin\Pengumuman;

use App\Models\Pengumuman;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    #[Validate('required')]
    public $judul = '';

    #[Validate('required')]
    public $isi = '';

    #[Validate('required|date')]
    public $tanggal = '';

    #[Validate('required')]
    public $waktu = '';

    public function save()
    {
        $this->validate();

        Pengumuman::create([
            'judul' => $this->judul,
            'isi' => $this->isi,
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
        ]);

        return $this->redirect(route('admin.pengumuman.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.pengumuman.create');
    }
}
