<?php

namespace App\Livewire\Admin\Profile;

use App\Models\Profile;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Create extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $body = '';

    #[Validate('nullable|image|max:2048')]
    public $image;

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('profile', 'public');
        }

        Profile::create([
            'title' => $this->title,
            'body' => $this->body,
            'image' => $imagePath,
        ]);

        return $this->redirect(route('admin.profile.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.profile.create');
    }
}
