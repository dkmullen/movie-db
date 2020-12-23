<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  use HasFactory;
  protected $fillable = ['title', 'year', 'comments'];
  
  public function path() {
    return route('movies');
  }

  public function user() 
  {
    return $this->belongsTo(User::class);
  }
}
