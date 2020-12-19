<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('messages', function () {
  return view('messages');
});

Route::get('friends', function () {
  return view('friends');
});

// Route::get('movies', function () {
//   return view('movies');
// });

Route::get('/movies', [MoviesController::class, 'index']); // getAll
Route::get('/movies/create', [MoviesController::class, 'create'])
  ->middleware('auth');
Route::post('/movies', [MoviesController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');