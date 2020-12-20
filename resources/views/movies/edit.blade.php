@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">

<form class="ui form" method="POST" action="/movies/{{ $movie->id }}">
@csrf
@method('PUT')

  <div class="field">
    <label>Title</label>
    <input type="text" name="title" placeholder="Title" value="{{ $movie->title }}">
    @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
    @enderror
  </div>
  <div class="field">
    <label>Year</label>
    <input type="number" name="year" min="1880" max="2030" pattern="[0-9]+" placeholder="Year" value="{{ $movie->year }}">
  </div>
  <div class="field">
    <label>Comments</label>
    <input type="text" name="comments" placeholder="Comments" value="{{ $movie->comments }}">
  </div>

  <button class="ui secondary button" type="submit">Submit</button>
  <a href="/movies">
  <button class="ui button" type="button">Cancel</button>
  </a>
</form>
 

</div>

@endsection