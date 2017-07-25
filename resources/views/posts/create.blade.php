@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1> Publish a post </h1>


        <hr>


        <form method="post" action="/posts">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Post</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Post it</button>
        </form>
    </div>
@endsection