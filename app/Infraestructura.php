<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    protected $fillable = ['imgInicio', 'descripcion', 'responsable', 'correo', 
    'img1', 'img2', 'img3', 'img4', 'img5', 'img6', 'slug'];
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
