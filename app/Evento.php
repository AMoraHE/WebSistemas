<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    public static function updateData($id,$data){
       DB::table('eventos')->where('id', $id)->update($data);
    }

    public static function deleteData($id=0){
        DB::table('eventos')->where('id', '=', $id)->delete();

    }
}
