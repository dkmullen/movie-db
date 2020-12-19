@extends('layout')

@section('content')
<div class="container">
  <div class="form-medium">
    <div class="ui fluid card">
    <div class="content">
      <div class="header">{{ __('Log In') }}</div>
    </div>

    <div class="content">
      <form class="ui form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="field">
          <label for="password">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="field">
          <div class="ui checkbox">
            <input class="hidden" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
            </label>
          </div>
        </div>

        <div>
          <button type="submit" class="ui secondary button">
            {{ __('Login') }}
          </button>
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
          @endif
        </div>
        </form>
      </div>
    </div>
  </div> 
</div>
@endsection
