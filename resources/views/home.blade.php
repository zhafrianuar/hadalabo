@extends('layouts.app')

@section('content')
<div class="container-fluid start">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-12 d-flex justify-content-center mt-5">
                @include('components.branding')
            </div>
            <div class="col-12 mt-3 text-content text-center">
                <h1 class="home-heading mt-5">Start your Hydration</h1>
                <h1 class="home-heading">Journey Now!</h1>

                <img class="mt-3 path-image" src="{{ asset('images/map' . (auth()->user()->station + 1) . '.svg') }}"
                    alt="Station Image">
                <br>

                <a href="{{ route('station', ['station' => (auth()->user()->station + 1)]) }}"
                    class="mt-3 home-btn btn rounded-pill">
                    @if(auth()->user()->station == 0)
                    Start with Station {{(auth()->user()->station + 1)}} 
                    @elseif(auth()->user()->station > 0 && auth()->user()->station < 5)
                    Continue with Station {{(auth()->user()->station + 1)}} 
                    @else
                    Redeem your gift at Gift House
                    @endif

                </a>
                <div class="container mt-5">
                    <div class="station-indicator">
                        <p class="station-number" class="m-0">{{auth()->user()->station}}/5</p>
                        <p>Station Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
