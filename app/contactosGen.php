<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactosGen extends Model
{
    protected $fillable = ['titulo', 'descripcion'];
    protected $table = 'contactos_gens';
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
