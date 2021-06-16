@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                            <label for="password">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-floating my-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-dark">{{ __('Reset Password') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
