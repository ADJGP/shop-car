@extends('auth.template')

@section('content')
    <div class="auth-layout-wrap">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="{{asset('assets/images/car.png')}}" alt="">
                               <h1 class="mb-3 text-18 text-uppercase">{{ __('Sign In') }}</h1>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __("Password") }}</label>
                                    <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">{{ __('Sign In') }}</button>

                            </form>

                            <div class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        <u>{{ __('Forgot Your Password?') }}</u>
                                    </a>
                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center  bg-black">
                        <div class="pr-3 auth-right">
                            <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="{{ url('register') }}">
                                <i class="i-Mail-with-At-Sign"></i>{{ __('Sign Up') }}
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-outline-google btn-block btn-icon-text" title="No disponible">
                                <i class="i-Google-Plus"></i> {{ __('Sign Up With') }} Google
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-block btn-icon-text btn-outline-facebook" title="No disponible">
                                <i class="i-Facebook-2"></i> {{ __('Sign Up With') }} Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

