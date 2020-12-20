<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <link rel="stylesheet" href="/assets/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <title>Laravel/SemanticUI</title>
</head>
<body>
<div class="ui secondary pointing menu">
    <a class="{{ Request::path() === '/' ? 'item active' : 'item'}}" href="/">
      Home
    </a>
    <a class="{{ Request::path() === 'messages' ? 'item active' : 'item'}}" href="/messages">
      Messages
    </a>
    <a class="{{ Request::path() === 'friends' ? 'item active' : 'item'}}" href="/friends">
      Friends
    </a>
    <a class="{{ Request::path() === 'movies' ? 'item active' : 'item'}}" href="/movies">
      Movies
    </a>

    <div class="right menu">
      @if (Route::has('login'))
        @auth
      <span class="ui item">{{ Auth::user()->name }}: 
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __(' Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </span>
        @else
            <a href="{{ route('login') }}" class="ui item">Sign In</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ui item">Register</a>
          @endif
        @endauth
      @endif
    </div>
  </div>

  @yield ('content')
  
  <footer>
    <div class="footer-content">
      <a href="/">Home</a> | <a href="/messages">Messages</a> 
        | <a href="friends">Friends</a> | <a href="movies">Movies</a>
    </div>
  </footer>

</body>
</html>