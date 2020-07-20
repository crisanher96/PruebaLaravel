<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    //Relacion de Muchos a Uno
    public function user(){
        $this->belongsTo('App\Usuarios', 'user_id');
    }

    public function category(){
        $this->belongsTo('App\Category', 'category_id');
    }
}
