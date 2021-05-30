<?php

namespace App\Http\Livewire\Admin\Role;


use Livewire\Component;
use App\Http\Livewire\AdminLayout;
use Spatie\Permission\Models\Role;
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
                'title'=>'Guard',
                'field'=>'guard_name'
            ],
            [
                'style'=>'',
                'class'=>'col',
                'title'=>'Permission',
                'field'=>'permission',
                'action'=> function($item){
                    $Permission = $item->getPermissionNames()->toArray(); // Returns a collection
                    return join('; ',$Permission);
                }
            ]
        ];
        $actions=[
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.role.edit\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">'.__('action.edit').'</span>
                     </button>';
                }
            ],
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.role.delete\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="delete"></i> <span class="align-middle">'.__('action.delete').'</span>
                     </button>';
                }
            ]
        ];
        return view('livewire.admin.role.index',[
            'columns'=>$columns,
            'actions'=>$actions,
            'data' => Role::paginate()
        ]);
    }
}
