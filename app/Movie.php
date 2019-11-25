<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Movie extends Model
{
  protected $fillable = ['title', 'year', 'director', 'poster', 'synopsis'];
  protected $hidden = ['created_at', 'updated_at'];//
}
