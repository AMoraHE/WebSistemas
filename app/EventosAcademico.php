<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosAcademico extends Model
{
    protected $fillable = [ 'titulo', 'descripcion', 'documento', 'slug', 'FInicio', 'FCierre'];

       public function getRouteKeyName()
    {
      return 'slug';
    }
}
