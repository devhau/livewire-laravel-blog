<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;
    protected $payload;
    protected $listeners = [
        'show'=>'show'
    ];
    public function show($payload=null){
        $this->payload = $payload;
        $this->show = true;
    }
}
