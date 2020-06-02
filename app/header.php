<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $fillable = ['img', 'titulo'];
    protected $table = 'headers';
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
