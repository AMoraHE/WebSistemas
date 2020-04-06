<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['aplicacion', 'proyecto', 'desarrolladores', 'objetivo', 'descripcion', 'resultados', 'newimage', 'slug'];

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
