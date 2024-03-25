<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        /*
        Ejercicio: añadir reglas de validación
        */

        $user = User::findOrFail(1);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->date = date("Y-m-d");

        $post->user()->associate($user);

        $post->save();

        return "Post created";
    }

}
