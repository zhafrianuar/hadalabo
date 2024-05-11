@extends('layouts.app')

@section('content')
<div class="container-fluid login">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center mt-5">
            @include('components.branding')
        </div>
        <div class="col-12 mt-5 px-5">
            
            <h1 class="text-center login-text mb-4">Register</h1>
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="fname" class="label">{{ __('First Name') }}</label>
                            <div class="col-12">
                                <input id="fname" type="text" class="input-text form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lname" class="label">{{ __('LastName') }}</label>

                            <div class="col-12">
                                <input id="lname" type="text" class="input-text form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="label">{{ __('Email Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number" class="label">{{ __('Mobile Number') }}</label>

                            <div class="col-12">
                                <input id="number" type="text" class="input-text form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="number" class="label">{{ __('Where do you find this Event?') }}</label>
                                <div class="col-12">
                                    <select name="where" class="input-text form-select" aria-label="Default select example">
                                        <option value="Facebook">Facebook</option>
                                        <option value="Tiktok">Tiktok</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="XiaoHongShu">XiaoHongShu</option>
                                        <option value="Others">Others</option>

                                    </select>
                                <div>
                        </div>
                   
                        <div class="row mb-0 mt-5">
                            <div class="col-12">
                                <button type="submit" class="main-btn btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
            </form>
                
           
        </div>
    </div>
</div>
@endsection
