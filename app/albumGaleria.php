<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albumGaleria extends Model
{
    protected $fillable = ['imagen', 'albumSlug'];
    protected $table = 'album_galerias';
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
