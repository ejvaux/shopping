<div>
    <div>
        <table class="table table-borderless">
            <tbody>
                @foreach ($products as $id => $product)
                <div wire:key="{{time()}}1">
                    <tr>
                        <td>{{$product['title']}}</td>
                        <td>{{$product['price']}}</td>
                    </tr>
                </div>
                @endforeach
                <tr wire:key="{{time()}}total">
                    <td class="text-right">TOTAL:</td>
                    <td>{{$total}}</td>
                </tr>
                <tr class="border-top">
                    <td class="text-right" colspan="2">
                        <button wire:click="$emit('orderPaid')" class="btn btn-success btn-sm m-0">Pay Now</button>
                        <a href="{{url('/cart')}}" class="btn btn-warning btn-sm m-0">Cancel</a>
                    </td>
                </tr>
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
</div>
