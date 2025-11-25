<?php

namespace App\Livewire\Admin\Dokter;

use App\Models\Dokter;
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
        Dokter::find($id)->delete();
    }

    public function render()
    {
        $dokters = Dokter::where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.dokter.index', [
            'dokters' => $dokters
        ]);
    }
}
