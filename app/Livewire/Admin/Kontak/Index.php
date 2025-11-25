<?php

namespace App\Livewire\Admin\Kontak;

use App\Models\Kontak;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Kontak::find($id)->delete();
    }

    public function render()
    {
        $kontaks = Kontak::latest()->paginate(10);

        return view('livewire.admin.kontak.index', [
            'kontaks' => $kontaks
        ]);
    }
}
