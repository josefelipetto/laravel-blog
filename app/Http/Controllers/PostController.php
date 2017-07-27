<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // respond to GET /posts

        $posts = Post::latest()->get();


        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        // respond to GET /posts/create
        return view('posts.create');
    }

    public function store()
    {
        // respond to POST /posts

        $this->validate(request(), [
           'title' => 'required',
           'body'  => 'required'
        ]);


        Post::create([

            'title' => request('title'),
            'body'  => request('body'),
            'author'=> 'Jose',
            'user_id' => 1

        ]);

        return redirect('/');

    }

    public function edit()
    {

        // respond to GET /posts/id/edit
    }

    public function update()
    {

        // respond to PATCH /posts/id
    }

    public function show(Post $post)
    {

        // respond to GET /posts/id
        return view("posts.show",compact("post"));
    }

    public function destroy($id)
    {

        // respond to DELETE /posts/id
    }


}
