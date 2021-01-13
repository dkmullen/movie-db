@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">
  @forelse ($movies as $movie)
    @auth
      <p><a href="{{ route('movies.edit', $movie)}}">{{ $movie->title }}</a> - 
        {{ $movie->year }} - {{ $movie->comments }} - 
        <a href="/movies?user={{ $movie->user->name }}">{{ $movie->user->name }}</a>
      </p>
    @else
      <p>{{ $movie->title }} - {{ $movie->year }} - {{ $movie->comments }} - 
        <a href="/movies?user={{ $movie->user->name }}">{{ $movie->user->name }}</a>
      </p>
    @endauth
    @empty <p>No movies yet.</p>
  @endforelse
</div>

@if (!$showingAll)
  <p>Showing movies from {{ $movie->user->name }}. <a href="/movies">Show all movies</a>.</p>
@endif

@auth
  <a href="/movies/create">
    <button class="ui secondary button">Add</button>
  </a>
@else
  <a href="{{ route('register') }}">Register</a> or <a href="{{ route('login') }}" class="ui item">sign in</a>
  to add movies
@endauth

@endsection