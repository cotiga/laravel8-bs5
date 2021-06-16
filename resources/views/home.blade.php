@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mt-4">
            <div class="rounded-3 shadow-sm p-4">
                <h1 class="h5">{{ __('Dashboard') }}</h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
@endsection
