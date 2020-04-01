<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $fillable = ['titulo','slug','newimage', 'redaccion'];


    public function getRouteKeyName()
    {
      return 'slug';
    }

    public static function purgeYear($year){
        DB::table('noticias')->whereYear('created_at', $year)->delete();

    }

  

}
