<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['programa',  'descripcion', 'doc', 'slug', 'FInicio', 'FFin'];
    protected $table = 'programas';

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
