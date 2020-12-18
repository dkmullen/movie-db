@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">
  @forelse ($movies as $movie)

  <p>{{ $movie->title }} - {{ $movie->year }} - {{ $movie->comments }}</p>
  @empty <p>No movies yet.</p>
  @endforelse

</div>
<a href="/movies/create">
<button class="ui secondary button">
  Add
</button>
</a>

@endsection