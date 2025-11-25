<?php

namespace App\Livewire\Admin\Profile;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class Edit extends Component
{
    use WithFileUploads;

    public $profileId;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $body = '';

    #[Validate('nullable|image|max:2048')]
    public $image;

    public $oldImage;

    public function mount($id)
    {
        $profile = Profile::findOrFail($id);
        $this->profileId = $profile->id;
        $this->title = $profile->title;
        $this->body = $profile->body;
        $this->oldImage = $profile->image;
    }

    public function update()
    {
        $this->validate();

        $profile = Profile::findOrFail($this->profileId);
        $imagePath = $profile->image;

        if ($this->image) {
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            $imagePath = $this->image->store('profile', 'public');
        }

        $profile->update([
            'title' => $this->title,
            'body' => $this->body,
            'image' => $imagePath,
        ]);

        return $this->redirect(route('admin.profile.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.profile.edit');
    }
}
