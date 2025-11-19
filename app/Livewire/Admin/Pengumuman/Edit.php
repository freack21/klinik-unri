<?php

namespace App\Livewire\Admin\Pengumuman;

use App\Models\Pengumuman;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    public $pengumumanId;

    #[Validate('required')]
    public $judul = '';

    #[Validate('required')]
    public $isi = '';

    #[Validate('required|date')]
    public $tanggal = '';

    #[Validate('required')]
    public $waktu = '';

    public function mount($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $this->pengumumanId = $pengumuman->id;
        $this->judul = $pengumuman->judul;
        $this->isi = $pengumuman->isi;
        $this->tanggal = $pengumuman->tanggal;
        $this->waktu = $pengumuman->waktu;
    }

    public function update()
    {
        $this->validate();

        $pengumuman = Pengumuman::findOrFail($this->pengumumanId);
        $pengumuman->update([
            'judul' => $this->judul,
            'isi' => $this->isi,
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
        ]);

        return $this->redirect(route('admin.pengumuman.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.pengumuman.edit');
    }
}
