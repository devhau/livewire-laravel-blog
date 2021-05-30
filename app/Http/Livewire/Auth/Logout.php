<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Logout extends Component
{
    protected function guard()
    {
        return Auth::guard();
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
