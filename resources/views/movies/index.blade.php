@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">
  @forelse ($movies as $movie)

  @auth
  <p><a href="{{ route('movies.edit', $movie)}}">{{ $movie->title }}</a> - {{ $movie->year }} - {{ $movie->comments }}</p>
  @else
  <p>{{ $movie->title }} - {{ $movie->year }} - {{ $movie->comments }}</p>
  @endauth
  @empty <p>No movies yet.</p>
  @endforelse

</div>

@auth
<a href="/movies/create">
  <button class="ui secondary button">
    Add
  </button>
</a>
@else
<a href="{{ route('register') }}">Register</a> or <a href="{{ route('login') }}" class="ui item">sign In</a>
to add movies
@endauth

@endsection