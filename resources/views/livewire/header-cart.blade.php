<div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-cart-shopping fa-lg"></i><span class="badge rounded-pill badge-danger" style="margin-left: -.3em;top: -1em">{{ count($cart) }}</span>
        </button>
        <div class="dropdown-menu" style="min-width: 17em;" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-header">
                <div class="row">
                    <div class="col">
                        <i class="fa-solid fa-cart-shopping"></i> {{ count($cart) }}
                    </div>
                    <div class="col">
                        Total: {{$total}}
                    </div>
                </div>
            </div>
            <div class="dropdown-divider"></div>
                <div class="px-4" wire:key="{{time()}}1">
                    @if($cart)
                        <div>
                        @foreach ($cart as $details)
                        <div class="row" wire:key="{{time()}}">
                            <div class="col">
                                <p >
                                    {{$details['title']}}
                                </p>
                            </div>
                            <div class="col-4">
                                <p >
                                    {{$details['price']}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    @else
                        <div>
                            <div class="dropdown-header">
                                <p class="text-muted text-center">No songs yet.</p>
                            </div>
                        </div>
                    @endisset
                </div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-item text-center">
                <a href="{{url('/cart')}}">View all</a>
            </div>
        </div>
    </div>
</div>
