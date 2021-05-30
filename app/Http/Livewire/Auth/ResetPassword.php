<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\AppLayout;

class ResetPassword extends AppLayout
{
    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
