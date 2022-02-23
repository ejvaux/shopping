@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">My Cart</div>
                        <div class="col text-right">
                            <a href="{{url('/')}}" class="btn btn-secondary btn-sm" ><- Continue Shopping</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @livewire('cart')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection