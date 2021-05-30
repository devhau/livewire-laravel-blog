<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\AppLayout;

class Login extends AppLayout
{ 
    
    public $email;
    public $password;
    public $remember;
    protected $rules = [
        'email' => 'required|string',
        'password' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();
        
        // Execution doesn't reach here if validation fails.

        if ($this->attemptLogin()) {
            return redirect()->to('/');
        }else{
            $this->addError('submit',__('auth.failed'));
        }        
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
    protected function guard()
    {
        return Auth::guard();
    }
    protected function attemptLogin()
    {
        return $this->guard()->attempt(
            ['email' => $this->email, 'password' => $this->password], $this->remember
        );
    }
    
}
