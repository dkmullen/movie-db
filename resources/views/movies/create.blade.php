@extends ('layout')
@section ('content')

<h3 class="ui header">Movies</h3>
<div class="ui segment">

<form class="ui form" method="POST" action="/movies">
@csrf

  <div class="field">
    <label>Title</label>
    <input type="text" name="title" placeholder="Title">
    @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
    @enderror
  </div>
  <div class="field">
    <label>Year</label>
    <input type="number" name="year" min="1880" max="2030" pattern="[0-9]+" placeholder="Year">
  </div>
  <div class="field">
    <label>Comments</label>
    <input type="text" name="comments" placeholder="Comments">
  </div>

  <button class="ui secondary button" type="submit">Submit</button>
  <a href="/movies">
  <button class="ui button" type="button">Cancel</button>
  </a>
</form>
 

</div>

@endsection