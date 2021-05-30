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
            {{ __('form.user.title.add') }}
        @else
            {{ __('form.user.title.edit') }}
        @endif
        </x-slot>
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('form.user.field.name') }}</label>
            <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="{{__('form.user.field.name')}}">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('form.user.field.email') }}</label>
            <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="{{__('form.user.field.email')}}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        @if($IsNew)
        <div class="mb-3">
            <label for="password" class="form-label">{{__('form.user.field.password')}}</label>
            <input wire:model.defer="password" type="text" class="form-control" id="password" placeholder="{{__('form.user.field.password')}}">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        @endif
        <div class="mb-3">
            <label for="email" class="form-label">{{__('form.user.field.role')}}</label>
            <div class="row">
                @foreach ($roles as $item)
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  wire:model.defer="roleids" id="permission-{{ $item->id }}"  value="{{ $item->id }}">
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
