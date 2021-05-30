<?php

namespace App\Http\Livewire\Admin\Role;

use App\Http\Livewire\Modal;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Delete extends Modal
{
    public $_id;
    public $name;
    public $guard_name;
    public function submit(){
        $role=Role::find($this->_id);
        $role->delete();
        $this->dispatchBrowserEvent('load-page', ['page' => 'admin.role.index']);
    }
    public function render()
    {
        
        if(isset($this->payload)){
            $this->_id = $this->payload['id'];
            $role=Role::find($this->_id);
            $this->name = $role->name;
            $this->guard_name = $role->guard_name;
        }else{
            $this->show=false;
        }
        return view('livewire.admin.role.delete');
    }
}
