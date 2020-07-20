<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Usuarios;
use App\Post;

class PruebasController extends Controller
{
    public function pruebaOrm() {
        $posts=Post::all();
        var_dump($posts);
        die();

    }
}
