@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }} </div>

                <div class="panel-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('/posts/create')}}">Create a new post</a><br>
                    <a href="{{url('/posts')}}">Go to main page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@if(count($posts)>0)
<table class = "table table-striper">
    <tr>
        <th>Title</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td><a href="/posts/{{$post->id}}/edit ">Edit</a></td>
        <td>{!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

    {{Form::hidden('_method', 'DELETE')}}

    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}</td>
    </tr>
    @endforeach
    @else
        <p>You have no posts yet</p>
</table>
@endif
@endsection
