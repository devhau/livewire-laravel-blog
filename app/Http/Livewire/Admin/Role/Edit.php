<?php

namespace App\Http\Livewire\Admin\Role;

use App\Http\Livewire\Modal;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class Edit extends Modal
{
    public function IsNew(){
        return !isset($this->_id);
    }
    public $_id;
    public $name;
    public $guard_name='web';
    public $permissionids=[];
    public function updatingShow($value)
    {
        $this->resetForm();
    }
    public function resetForm(){
        $this->_id = null;
        $this->name = '';
        $this->permissionids=[];
        $this->guard_name='web';
        $this->resetErrorBag();
        $this->resetValidation();
    }
    protected $rules = [
        'name' => 'required|string',
    ];

    public function submit(){
        if($this->IsNew()){
            $this->rules['name']='required|string|max:255|unique:roles';
        }else{
            $this->rules['name']='required|string|max:255|unique:roles,name,'.$this->_id;
        }
        $this->validate();        
        // Execution doesn't reach here if validation fails.

        if($this->IsNew()){
            $role = new Role();
        }else{
            $role = Role::find($this->_id);
        }
        $role->name = $this->name;
        $role->guard_name = $this->guard_name;
        $role->save();
        $role->syncPermissions($this->permissionids);
        $this->dispatchBrowserEvent('load-page', ['page' => 'admin.role.index']);
        $this->show=false;
        $this->resetForm();
    }
    public function render()
    {
        
        if(isset($this->payload)){
            $this->_id = $this->payload['id'];
            $role=Role::find($this->_id);
            $this->name = $role->name;
            $this->guard_name = $role->guard_name;
            $this->permissionids = $role->permissions->pluck('id')->map(fn($id) => (string) $id)->toArray();
        }
        return view('livewire.admin.role.edit',
    [
        'permissions'=> Permission::where('guard_name',$this->guard_name)->get(),
        'IsNew'=>$this->IsNew()
    ]);
    }
}
