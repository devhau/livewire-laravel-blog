<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\AppLayout;

class ForgotPassword extends AppLayout
{
    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
