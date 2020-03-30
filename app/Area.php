<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    
    public function organigrama()
    {
        return $this->hasMany('App\Organigrama');
    }
}
