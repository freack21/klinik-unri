<?php

namespace App\Livewire\Admin\Layanan;

use App\Models\Layanan;
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
        Layanan::find($id)->delete();
    }

    public function render()
    {
        $layanans = Layanan::where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.layanan.index', [
            'layanans' => $layanans
        ]);
    }
}
