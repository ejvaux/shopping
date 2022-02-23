<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Song</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <div>
            @if ($products)
            <div>
                @foreach ($products as $id => $product)
                <div wire:key="{{time()}}1">
                    <tr>
                        <td>
                            <img src="{{ $product['photo'] }}" width="90em" height="90em">
                            {{$product['title']}}
                        </td>
                        <td>{{$product['price']}}</td>
                        <td>
                            <button type="button" id="{{$id}}" wire:click="$emit('removeProduct','{{$id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                </div>
                @endforeach
                <tr wire:key="{{time()}}total">
                    <td class="text-right">TOTAL:</td>
                    <td>{{$total}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-right" colspan="3">
                        <a href="{{url('/order')}}" class="btn btn-success m-0">Check Out</a>
                    </td>
                </tr>
            </div>
            @else
                <tr wire:key="{{time()}}2">
                    <td class="text-center" colspan="3">No songs</td>
                </tr>
            @endif
            </div>
        </tbody>
    </table>
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('livewire:load', function () {
            console.log( "Stack:ready!" );

        })
    </script>
@endpush