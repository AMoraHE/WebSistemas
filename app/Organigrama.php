<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organigrama extends Model
{

    Protected $fillable = ['integrante', 'genero'];
    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    
}
