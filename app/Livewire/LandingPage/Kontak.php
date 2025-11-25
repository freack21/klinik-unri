<?php

namespace App\Livewire\LandingPage;

use App\Models\Kontak as KontakModel;
use Livewire\Component;

class Kontak extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Nama wajib diisi',
        'name.min' => 'Nama minimal 3 karakter',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'phone.required' => 'Nomor telepon wajib diisi',
        'phone.min' => 'Nomor telepon minimal 10 digit',
        'message.required' => 'Pesan wajib diisi',
        'message.min' => 'Pesan minimal 10 karakter',
    ];

    public function submit()
    {
        $this->validate();

        // Here you can add logic to save the contact form data
        // For now, we'll just show a success message

        session()->flash('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');

        // Reset form
        $this->reset(['name', 'email', 'phone', 'message']);

        // Dispatch browser event for SweetAlert
        $this->dispatch('contact-sent');
    }

    public function render()
    {
        $kontak = KontakModel::first();
        return view('livewire.landing-page.kontak', [
            'kontak' => $kontak
        ]);
    }
}

