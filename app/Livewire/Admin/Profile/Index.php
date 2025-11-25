<?php

namespace App\Livewire\Admin\Profile;

use App\Models\Profile;
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
        Profile::find($id)->delete();
    }

    public function render()
    {
        $profiles = Profile::where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.profile.index', [
            'profiles' => $profiles
        ]);
    }
}
