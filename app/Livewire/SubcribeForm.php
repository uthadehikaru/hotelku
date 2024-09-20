<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class SubcribeForm extends Component
{
    public $name;

    public $email;

    public function render()
    {
        return view('livewire.subcribe-form');
    }

    public function subscribe()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        User::firstOrCreate([
            'email' => $this->email,
        ], [
            'name' => $this->name,
            'password' => Hash::make(Str::random(10)),
        ]);

        $this->dispatch('message', type: 'success', message: 'Terima kasih! Anda telah berlangganan.');

        $this->reset('name', 'email');
    }
}
