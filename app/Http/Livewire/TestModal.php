<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Modal;

class TestModal extends Modal
{
    public $name;
    public function render()
    { 
        if(isset($this->payload)){
            $this->name = $this->payload['name'];
        }
        return view('livewire.test-modal');
    }
}
