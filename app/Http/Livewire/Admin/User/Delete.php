<?php

namespace App\Http\Livewire\Admin\User;

use App\Http\Livewire\Modal;
use App\Models\User;

class Delete extends Modal
{
    public $_id;
    public $name;
    public $email;
    public function submit(){
        $data=User::find($this->_id);
        $data->delete();
        $this->dispatchBrowserEvent('load-page', ['page' => 'admin.user.index']);
    }
    public function render()
    {
        
        if(isset($this->payload)){
            $this->_id = $this->payload['id'];
            $data=User::find($this->_id);
            $this->name = $data->name;
            $this->email = $data->email;
        }else{
            $this->show=false;
        }
        return view('livewire.admin.user.delete');
    }
}
