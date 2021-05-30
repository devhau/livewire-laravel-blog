<div>
    <x-modal wire:model="show"  wire:is-form="1">
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary btn-sm" x-on:click="show = false">
                <i class="align-middle" data-feather="x-square"></i>
                <span class="align-middle">{{ __('action.no') }}</span>
            </button>
            <button type="submit" class="btn btn-primary  btn-sm">
                <i class="align-middle" data-feather="save"></i>
                <span class="align-middle">{{ __('action.yes') }}</span>
            </button>
        </x-slot>
        <x-slot name="title">
        </x-slot>
        <b>{{$email}}</b>,{{ __('form.user.title.remove') }}
    </x-modal>
</div>
