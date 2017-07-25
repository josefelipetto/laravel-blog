<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // respond to GET /posts
        return view('posts.index');
    }

    public function create()
    {
        // respond to GET /posts/create
        return view('posts.create');
    }

    public function store()
    {
        // respond to POST /posts

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

    public function show($id)
    {

        // respond to GET /posts/id
    }

    public function destroy($id)
    {

        // respond to DELETE /posts/id
    }


}
