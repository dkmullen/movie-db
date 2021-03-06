@extends('layout')

@section('content')
<div class="container">
  <div class="form-medium">
    <div class="ui fluid card">
    <div class="content">
      <div class="header">{{ __('Reset Password') }}</div>
    </div>

    <div class="content">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
      <form class="ui form" method="POST" action="{{ route('password.email') }}">
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
        <div>
          <button type="submit" class="ui secondary button">
            {{ __('Send Password Reset Link') }}
          </button>
        </div>
        </form>
      </div>
    </div>
  </div> 
</div>
@endsection
