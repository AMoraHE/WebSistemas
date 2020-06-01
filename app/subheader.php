<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subheader extends Model
{
    protected $fillable = ['sImg', 'sTitulo'];
    protected $table = 'subheaders';
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
