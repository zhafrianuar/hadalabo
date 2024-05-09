@extends('layouts.app')

@section('content')


<div class="container-fluid py-5 station">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="branding-container">
                <img class="logo" src="{{ asset('images/logo.svg') }}" alt="brand-logo">
            </div>
        </div>
        <div class="col-12 mt-3 text-content text-center">
            <div class="icon-container mt-4">
                <img class="icon-bg" src="{{ asset('images/icon-bg.svg') }}" alt="Lock Image">
                <img class="icon" src="{{ asset('images/station3icon.svg') }}" alt="Lock Image">
            </div>
            <h1 class="station-heading mt-2">Station {{$station->id}}</h1>
            <h2 class="station-subheading">{{$station->name}}</h2>
            <img class="mt-5" src="{{ asset('images/' . $station->id . '.svg') }}" alt="Station Image">
            <a href="" class="camera-btn mx-auto mt-4"><img  src="{{ asset('images/camera.svg') }}" alt=""></a>
            <p class="bottom-text mt-2">Scan the QR code at the station to proceed</p>
        </div>
    </div>
</div>
@endsection


