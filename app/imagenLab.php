<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagenLab extends Model
{
	protected $table = 'imagen_labs';

	protected $fillable = ['lab_id', 'imagen'];

    public function getRouteKeyName()
	{
	    return 'id_il';
	}
}
