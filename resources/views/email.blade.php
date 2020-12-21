@extends('layout')

@section('content')
<div class="container">
  <div class="form-medium">
    <div class="ui fluid card">
    <div class="content">
      <div class="header">{{ __('Sign up for our worthless but never-to-be-sent newsletter') }}</div>
    </div>

    <div class="content">
      <form class="ui form" method="POST" action="/email">
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
            {{ __('Submit') }}
          </button>
        </div>
        @if (session('message'))
        <div>
          {{ session('message') }}
        </div>
        @endif
        </form>
      </div>
    </div>
  </div> 
</div>
@endsection