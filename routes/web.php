<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\EmailController;

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

Route::get('email', function () {
  return view('email');
});

// Route::get('movies', function () {
//   return view('movies');
// });

Route::get('/movies', [MoviesController::class, 'index'])->name('movies'); // getAll
Route::get('/movies/create', [MoviesController::class, 'create'])
  ->middleware('auth');
Route::post('/movies', [MoviesController::class, 'store']);
Route::get('/movies/{movie}/edit', [MoviesController::class, 'edit'])->name('movies.edit'); // getOne
Route::put('/movies/{movie}', [MoviesController::class, 'update']);

Route::post('/email', [EmailController::class, 'store']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');