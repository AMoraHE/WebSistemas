<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [ 'proyecto', 'desarrolladores',  'descripcion', 'newimage', 'slug'];

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
