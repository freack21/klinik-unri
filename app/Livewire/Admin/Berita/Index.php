<?php

namespace App\Livewire\Admin\Berita;

use App\Models\Berita;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function delete($id)
    {
        Berita::find($id)->delete();
    }

    public function render()
    {
        $berita = Berita::where('judul', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.berita.index', [
            'berita' => $berita
        ]);
    }
}
