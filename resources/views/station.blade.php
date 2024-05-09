@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               {{$station->name}}
               <img src="{{ asset('images/' . $station->id . '.png') }}" alt="Station Image">
            </div>
        </div>
    </div>
</div>
@endsection
