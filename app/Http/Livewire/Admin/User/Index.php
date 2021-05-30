<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Http\Livewire\AdminLayout;
use App\Models\User;
use App\Traits\WithPagination;

class Index extends AdminLayout
{
    use WithPagination;
    public function render()
    {
        $columns=[
            [
                'class'=>'col',
                'title'=>'Name',
                'field'=>'name'
            ],
            [
                'class'=>'col',
                'title'=>'Email',
                'field'=>'email'
            ],
            [
                'style'=>'',
                'class'=>'col',
                'title'=>'Role',
                'field'=>'role',
                'action'=> function($item){
                    $roles = $item->getRoleNames()->toArray(); // Returns a collection
                    return join('; ',$roles);
                }
            ]
        ];
        $actions=[
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.user.edit\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">'.__('action.edit').'</span>
                     </button>';
                }
            ],
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.user.delete\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="delete"></i> <span class="align-middle">'.__('action.delete').'</span>
                     </button>';
                }
            ]
        ];
        return view('livewire.admin.user.index',[
            'columns'=>$columns,
            'actions'=>$actions,
            'data' => User::paginate()
        ]);
    }
}
