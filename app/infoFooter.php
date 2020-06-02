<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infoFooter extends Model
{
    protected $fillable = ['img', 'titulo', 'descripcion'];
    protected $table = 'info_footers';
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
