@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('content')
    <h4 class="mb-2">{{ __('Confirm Password') }}</h4>
    <p class="mb-4">{{ __('Please confirm your password before continuing.') }}</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">
            @include('utils.layout.error', ['param' => 'password'])
        </div>
        <button class="btn btn-primary mb-3 d-grid w-100" type="submit">
            {{ __('Confirm Password') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection
