@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success">
                        Order Paid
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <a href="{{url('/')}}" class="btn btn-secondary btn-sm" >Continue Shopping</a>
                        </div>
                        <div class="col">
                            <a href="{{url('/library')}}" class="btn btn-secondary btn-sm" >Go to My Library</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection