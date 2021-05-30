<div>
    @section('pageTitle')
        Wellcome
    @endsection
    <button x-data="{}" x-on:click="ShowModal('test-modal',{'name':'nguyen van hau'})">Hello.</button>
    <livewire:test-modal />
</div>
