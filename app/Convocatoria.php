<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $fillable = ['convocatoria',  'descripcion', 'newimage', 'slug'];

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
