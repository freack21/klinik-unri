<?php

namespace App\Livewire\Admin\Berita;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public $beritaId;

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

    public $oldGambar;

    #[Validate('nullable')]
    public $sumber = '';

    public function mount($id)
    {
        $berita = Berita::findOrFail($id);
        $this->beritaId = $berita->id;
        $this->judul = $berita->judul;
        $this->deskripsi = $berita->deskripsi;
        $this->konten = $berita->konten;
        $this->tanggal = $berita->tanggal;
        $this->oldGambar = $berita->gambar;
        $this->sumber = $berita->sumber;
    }

    public function update()
    {
        $this->validate();

        $berita = Berita::findOrFail($this->beritaId);
        $gambarPath = $berita->gambar;

        if ($this->gambar) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $gambarPath = $this->gambar->store('berita', 'public');
        }

        $berita->update([
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
        return view('livewire.admin.berita.edit');
    }
}
