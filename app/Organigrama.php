<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organigrama extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
