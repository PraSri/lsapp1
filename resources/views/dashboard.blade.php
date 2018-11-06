@extends('layouts.app')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <head>
                    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                    <link rel="stylesheet" type="text/css" href="css/app.css">
            </head>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    <body>
                            <div id="app">
                                {{-- <dashboard :title="'{{$title}}'"></dashboard> --}}
                                <app></app>
                            </div>
                            <script type="text/javascript" src="js/vueapp.js"></script>
                    </body>
                    {{-- @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
