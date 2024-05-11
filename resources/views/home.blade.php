@extends('layouts.app')

@section('content')
<div class="container-fluid login">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="col-12 d-flex justify-content-center mt-5">
                    @include('components.branding')
                </div>
                <div class="col-12 mt-3 text-content text-center">
                    <h1 class="heading mt-5">Start your Hydration</h1>
                    <h1 class="heading">Journey Now!</h1>

                    <img class="mt-3" src="{{ asset('images/map' . (auth()->user()->station + 1) . '.svg') }}" alt="Station Image">
                    <br>
                    
                    <a href="{{ route('station', ['station' => (auth()->user()->station + 1)]) }}" class="mt-3 home-btn btn rounded-pill">Start with Station {{(auth()->user()->station + 1)}} </a>
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="rounded border border-primary p-2 text-center">
                                    <p class="m-0">0/5 Station Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>



              
        </div>
    </div>
</div>
@endsection
