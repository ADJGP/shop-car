@extends('auth.template')

@section('content')
<div class="auth-layout-wrap">
<div class="auth-content">
    <div class="card o-hidden">
        <div class="row">
            <div class="col-md-6 text-center ">
                <div class="pl-3 auth-right">
                    <div class="auth-logo text-center mt-4">
                        <img src="{{asset('assets/images/car.png')}}" alt="">
                    </div>
                    <div class="flex-grow-1"></div>
                    <div class="w-100 mb-4">
                    <a class="btn btn-outline-primary btn-outline-email btn-block btn-icon-text btn-rounded" href="{{ url('login') }}">
                            <i class="i-Mail-with-At-Sign"></i>{{ __('Sign In') }}
                        </a>
                        <a class="btn btn-outline-primary btn-outline-google btn-block btn-icon-text btn-rounded" title="No disponible">
                            <i class="i-Google-Plus"></i> {{ __('Sign In With') }} Google
                        </a>
                        <a class="btn btn-outline-primary btn-outline-facebook btn-block btn-icon-text btn-rounded" title="No disponible">
                            <i class="i-Facebook-2"></i> {{ __('Sign In With') }} Facebook
                        </a>
                    </div>
                    <div class="flex-grow-1"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4">

                    <h1 class="mb-3 text-18 text-center">{{ __('Sign Up') }}</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">{{ __('Your name') }}</label>
                            <input id="name" type="text" class="form-control form-control-rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="repassword">{{ __('Retype Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-rounded" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button class="btn btn-primary btn-block btn-rounded mt-3">{{ __('Sign Up') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
