@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">
  @forelse ($movies as $movie)

  <p>{{ $movie->title }} - {{ $movie->year }} - {{ $movie->comments }}</p>
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
Register or sign in to add movies
@endauth

@endsection