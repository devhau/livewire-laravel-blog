<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Livewire\AppLayout;
use App\Models\User;

class Register extends AppLayout
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255|alpha_dash',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        return redirect()->to(route('login'));
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
