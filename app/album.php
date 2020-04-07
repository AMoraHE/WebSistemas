<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'imgPrin', 'slug'];
    protected $table = 'albums';
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
