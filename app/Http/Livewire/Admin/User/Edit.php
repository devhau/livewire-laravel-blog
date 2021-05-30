<?php

namespace App\Http\Livewire\Admin\User;

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
    public $email;
    public $password;
    public $roleids=[];
    public function updatingShow($value)
    {
        $this->resetForm();
    }
    public function resetForm(){
        $this->_id = null;
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->roleids=[];
        $this->resetErrorBag();
        $this->resetValidation();
    }
    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|string|email|max:255',
    ];

    public function submit(){
        if($this->IsNew()){
            $this->rules['email']='required|string|email|max:255|unique:users';
        }else{
            $this->rules['email']='required|string|email|max:255|unique:users,email,'.$this->_id;
        }
        $this->validate();        
        // Execution doesn't reach here if validation fails.

        if($this->IsNew()){
            $user = new User();
        }else{
            $user = User::find($this->_id);
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        $user->syncRoles($this->roleids);
        $this->dispatchBrowserEvent('load-page', ['page' => 'admin.user.index']);
        $this->show=false;
        $this->resetForm();
    }
    public function render()
    {
        
        if(isset($this->payload)){
            $this->_id = $this->payload['id'];
            $user=User::find($this->_id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->roleids = $user->roles->pluck('id')->map(fn($id) => (string) $id)->toArray();
        }
        return view('livewire.admin.user.edit',
    [
        'roles'=>Role::all(),
        'IsNew'=>$this->IsNew()
    ]);
    }
}
