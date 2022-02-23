<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($products as $product)
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ $product->photo }}" width="90em" height="90em">
                    </div>
                    <div class="col">
                        <div class="row mb-4">
                            <div class="col"><h3>{{$product->title}}</h3></div>
                        </div>
                        <div class="row">
                            <div class="col">By: <span class="font-weight-bold">{{$product->artist}}</span></div>
                        </div>
                    </div>
                    <div class="col-2">
                        {{$product->price}}
                    </div>
                    <div class="col-3">
                        {{--<div>
                        @isset(session()->get('cart')[$product->id])
                            <button type="button" wire:click="$emit('removeProduct','{{$product->id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-cart-shopping"></i> Remove</button>
                        @else
                            <button type="button" wire:click="$emit('addProduct','{{$product->id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-success btn-sm"><i class="fa-solid fa-cart-shopping"></i> Add</button>
                        @endisset
                        </div>--}}
                        <button type="button" wire:click="$emit('addProduct','{{$product->id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-success btn-sm"><i class="fa-solid fa-cart-shopping"></i> Add</button>
                        {{--@if ()
                            <button type="button" wire:click="$emit('removeProduct','{{$product->id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-danger btn-sm">Remove from cart</button>
                        @else
                            <button type="button" wire:click="$emit('addProduct','{{$product->id}}')" wire:key="{{ time().$loop->index }}" class="btn btn-success btn-sm">Add to cart</button>
                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('scripts')
<script type="text/javascript">
    document.addEventListener('livewire:load', function () {
        console.log( "Stack:ready!" );

    })
    </script>
@endpush
