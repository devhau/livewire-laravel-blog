<div>
    <x-modal wire:model="show"  wire:is-form="1" wire:form-reset='1'>
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary btn-sm" x-on:click="show = false">
                <i class="align-middle" data-feather="x-square"></i>
                <span class="align-middle">Close</span>
            </button>
            <button type="submit" class="btn btn-primary  btn-sm">
                <i class="align-middle" data-feather="save"></i>
                <span class="align-middle">Save</span>
            </button>
        </x-slot>
        <x-slot name="title">
        @if($IsNew)
            {{ __('form.role.title.add') }}
        @else
            {{ __('form.role.title.edit') }}
        @endif
        </x-slot>
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('form.role.field.name') }}</label>
            <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="{{__('form.role.field.name')}}">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="guard_name" class="form-label">{{ __('form.role.field.guard_name') }}</label>            
            <select wire:model="guard_name" class="form-select" id="guard_name" aria-label="Guard name" required>
                            <option value="web">WEB</option>
                            <option value="api">API</option>
                            <option value="all">ALL</option>
                        </select>
            @error('guard_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="permission" class="form-label">{{__('form.role.field.permission')}}</label>
            <div class="row">
                @foreach ($permissions as $item)
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  wire:model.defer="permissionids" id="permission-{{ $item->id }}"  value="{{ $item->id }}">
                            <label class="form-check-label" for="permission-{{ $item->id }}">
                            {{ $item->name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-modal>
</div>
