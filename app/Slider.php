<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
protected $fillable = ['contenido','slug','image','titulo'];


  public function getRouteKeyName()
  {
    return 'slug';
  }
}
