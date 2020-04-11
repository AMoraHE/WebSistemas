<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $fillable = ['imgInicio', 'descripcion', 'responsable', 'correo', 'slug', 'nombre'];
    protected $table = 'infraestructuras';
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
