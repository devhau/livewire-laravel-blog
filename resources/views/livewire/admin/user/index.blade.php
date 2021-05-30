<div class="card">
    <div class="card-header bg-transparent pb-2">
        <h5 class="card-title">{{__('manager.user.title')}}</h5>
        <h6 class="card-subtitle text-muted">{{__('manager.user.description')}}</h6>        
        <button class="btn btn-primary btn-sm" x-on:click="ShowModal('admin.user.edit')"><i class="align-middle"
            data-feather="plus-square"></i> <span class="align-middle">{{__('action.add')}}</span></button>
    </div>
    <div class="card-body">
       
        <livewire:admin.user.edit />
        <livewire:admin.user.delete />
        <x-table.manager :columns="$columns" :data="$data" :actions="$actions" />

        <div class="row">
            <div class="col-12">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
