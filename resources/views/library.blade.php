@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">My Library</div>
                        <div class="col text-right">
                            <a href="{{url('/')}}" class="btn btn-secondary btn-sm" ><- Browse Songs</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @livewire('library')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection