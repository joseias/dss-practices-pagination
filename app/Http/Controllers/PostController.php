<?php

namespace App\Http\Controllers;

use Exception;

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
        $request->validate([
            'title' => 'required|max:10',
            'content' => 'required',
        ]);


        $user_id = 1; // just an example

        try {
            $user = User::findOrFail($user_id);

            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->date = date("Y-m-d");

            $post->user()->associate($user);

            $post->save();

            return view('post.show', ['post' => $post]);
        } catch (Exception $e) {
            return response()->json(["message" => "user id = {$user_id} not found!"], 404);
        }
    }

    public function paginate()
    {
        $posts = Post::paginate(5); // Fetch 5 posts per page
        return view('post.paginate', ['posts' => $posts]);
    }

    public function show($id){
        try {
            $post = Post::findOrFail($id);
            return view('post.show', ['post' => $post]);
        } catch (Exception $e) {
            return response()->json(["message" => "post id = {$id} not found!"], 404);
        }
    }
}
