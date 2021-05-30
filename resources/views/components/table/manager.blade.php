<div>
    <div class="table-responsive">
        <table class="table table-bordered border-primary">
            <thead  class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    @foreach ($columns as $col)                        
                        <th scope="col">{{$col['title']}}</th>
                    @endforeach
                    @if(isset($actions))
                    <th scope="col"> {{__('action.action')}} </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($ListData as $item)
                    <tr>
                        <td>{{ ($ListData->currentPage()-1) * $ListData->perPage() + $loop->index + 1 }}</td>
                        @foreach ($columns as $col)                        
                            <td>
                                @if(isset($col['action']))
                                {!! $col['action']($item) !!}
                                @else
                                {{ $item->{$col['field']} }}
                                @endif
                            </td>
                        @endforeach
                        @if(isset($actions))
                        <td>
                            @foreach ($actions as $action)
                                {!! $action['action']($item) !!}
                            @endforeach
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
