<div>
    <x-modal wire:model="show">
        <x-slot name="footer">
        <button type="button" class="btn btn-secondary btn-sm" x-on:click="show = false">Close</button>
        <button type="button" class="btn btn-primary  btn-sm">Save changes</button>
        </x-slot>
        <x-slot name="title">
           Demo modal 1, {{$name}}
        </x-slot>
        Content Modal
    </x-modal>
</div>
