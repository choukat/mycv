<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
   protected $fillable = [
     'title', 'description', 'logo', 'begin', 'end'
   ];
}
