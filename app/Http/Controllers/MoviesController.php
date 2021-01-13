<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Show movies for a specific user, or show all
      $showingAll = true;
      if(request('user')) {
        $movies = User::where('name', request('user'))->firstOrFail()->movies;
        $showingAll = false;
      } else {
        $movies = Movie::latest()->get();
      }
      return view('movies.index', ['movies' => $movies, 'showingAll' => $showingAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $this->validateMovie();
      $movie = new Movie(request(['title', 'year', 'comments']));
      $movie->user_id = 4; // hardcoded for now
      $movie->save();
      $movies = Movie::latest()->get();
      return view('movies.index', ['movies' => $movies]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      // return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Movie $movie)
    {
      // dump(request()->all());
      $movie->update($this->validateMovie());
      return redirect($movie->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }

    protected function validateMovie()
    {
      return request()-> validate([
        'title' => ['required', 'min:2', 'max:255'],
        'year' => 'required',
        'comments' => 'required'
      ]);
    }
}
