<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WebLayout extends Component
{
    protected $listeners = [
        'load-page'=>'loadPage'
    ];
    public function loadPage(){

    }
    public function __construct($id = null)
    {
        parent::__construct($id);        
        $this->initialLayoutConfiguration['type']='extends';
        $this->initialLayoutConfiguration['view']='layouts.web';
    }
}
