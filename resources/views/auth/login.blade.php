@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">{{ __('Type youre credential here.') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label font-weight-bold" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-first btn-block">Login</button>
                        <button type="submit" class="btn btn-second btn-block">
                            <span class="fa fa-twitter"></span>
                            Twetter
                        </button>
                        <button type="submit" class="btn btn-three btn-block">
                            <span class="fa fa-google"></span>
                            Gmail
                        </button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-conter-center">

                <a class="btn btn-link btn-sm btn-block" href="{{ route('password.request') }}">
                    <Strong class="text-center">

                        {{ __('Forgot Your Password?') }}
                    </Strong>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
