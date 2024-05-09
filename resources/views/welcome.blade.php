<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container-fluid py-5 home">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    @include('components.branding')
                </div>
                <div class="col-12 mt-3 text-content text-center">
                    <h1 class="heading mt-5">Hada Labo</h1>
                    <h1 class="heading">Popup Store KL</h1>
                    <h2 class="subheading mt-5">Fahrenheit 88</h2>

                    <p class="date">24 MAY 2024 - 2 JUNE 2024</p>
                    <a href="{{ route('register') }}" class="mt-3 home-btn btn rounded-pill">CLICK TO Register Now</a>
                    <p class="already-register">Already Registered</p>
                    <a href="{{route('login')}}" class="home-btn btn rounded-pill">LOGIN HERE</a>
                </div>
            </div>
        </div>
    </body>
</html>
