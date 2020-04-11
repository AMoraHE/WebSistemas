<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoGaleria extends Model
{
    protected $fillable = ['imagen', 'proySlug'];
    protected $table = 'proyecto_galerias';
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'id';
	}
}
