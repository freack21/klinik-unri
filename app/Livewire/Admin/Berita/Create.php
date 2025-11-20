<?php

namespace App\Livewire\Admin\Berita;

use App\Models\Berita;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $judul = '';

    #[Validate('required')]
    public $deskripsi = '';

    #[Validate('required')]
    public $konten = '';

    #[Validate('required|date')]
    public $tanggal = '';

    #[Validate('nullable|image|max:2048')]
    public $gambar;

    #[Validate('nullable')]
    public $sumber = '';

    public function save()
    {
        $this->validate();

        $gambarPath = null;
        if ($this->gambar) {
            $gambarPath = $this->gambar->store('berita', 'public');
        }

        Berita::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'konten' => $this->konten,
            'tanggal' => $this->tanggal,
            'gambar' => $gambarPath,
            'sumber' => $this->sumber,
        ]);

        return $this->redirect(route('admin.berita.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.berita.create');
    }
}
