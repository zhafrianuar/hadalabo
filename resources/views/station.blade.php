@extends('layouts.app')

@section('content')


<div class="container-fluid py-5 home">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="branding-container">
                    <img class="logo" src="{{ asset('images/logo.svg') }}" alt="brand-logo">
                </div>

                </div>
                <div class="col-12 mt-3 text-content text-center">
                    <h1 class="heading mt-5">Station {{$station->id}}</h1>
                    <h2 class="heading mt-2">{{$station->name}}</h2>

                     
                    <img class="subheading mt-5" src="{{ asset('images/' . $station->id . '.svg') }}" alt="Station Image">
                    <br>

                    <img class="subheading mt-5" src="{{ asset('images/camera.svg') }}" alt="Station Image">
                    <p class="already-register">Scan the QR code at the station to proceed</p>
                </div>
            </div>
        </div>
@endsection
