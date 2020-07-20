<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='users';

    //Relacion de Uno a Muchos
    public function posts(){
        $this->hasMany('App\Post');
    }

}
