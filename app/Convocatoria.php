<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $fillable = ['convocatoria',  'descripcion', 'doc', 'slug'];
    protected $table = 'convocatorias';

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
