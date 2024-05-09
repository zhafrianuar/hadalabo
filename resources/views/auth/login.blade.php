@extends('layouts.app')
@section('content')
<div class="container-fluid login">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center mt-5">
            @include('components.branding')
        </div>
        <div class="col-12 mt-5 px-5">
            <h1 class="text-center login-text mb-4">LOGIN</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="label">{{ __('E-mail') }}</label>

                    <div class="col-12">
                        <input id="email" type="email" class="input-text @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror"
                    value="password" name="password" required autocomplete="current-password">

                <div class="row mb-0">
                    <div class="col-12">
                        <button type="submit" class="main-btn btn rounded-pill">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
     <div class="register-block text-center">
        <p class="text-center">Don’t have account yet!</p>
        <p>Register <a href="{{ route('register') }}">here</a></p>
     </div>
</div>
@endsection
