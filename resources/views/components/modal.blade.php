<!-- Modal -->
@if($attributes->wire('model')==true)

@if($attributes->wire('form-reset')=='1')
<div x-data="{
        show: @entangle($attributes->wire('model'))
   
    }" x-show="show" x-on:keydown.escape.window="show = false" style="display:none">
@else
    
<div x-data="{
        show: @entangle($attributes->wire('model')).defer
   
    }" x-show="show" x-on:keydown.escape.window="show = false" style="display:none">
@endif

    <div class="modal fade show modal-livewire-admin {{$attributes->wire('modal-size')}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                @if($attributes->wire('is-form')=='1')
                <form wire:submit.prevent="submit">
                @endif
                <div class="modal-header">
                @if(isset($header))
                    {{ $header }}
                @else
                    <h5 class="modal-title"> @if(isset($title)) {{$title}} @endif</h5>
                    <button type="button" class="btn-close" x-on:click="show = false"></button>
                @endif
                    
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                
                @if(isset($footer))
                <div class="modal-footer">
                    {{ $footer }}
                </div>
                @endif
                @if($attributes->wire('is-form')=='1')
                </form>
                @endif
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
</div>
@endif