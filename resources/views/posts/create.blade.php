@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1> Publish a post </h1>


        <hr>


        <form method="post" action="/posts">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="body">Post</label>
                <textarea id="body" name="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Post it</button>
            </div>
        </form>

        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection