<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$post->title}}</title>
</head>
<body>
	<h1>{{$post->title}}</h1>
	<a href="/posts/{{$post->id}}"><img style="width:20%"src="/storage/cover_images/{{$post->cover_image}}" ></a>
		<p>{!!$post->post_body!!}</p>
		<hr>
		<small>The post was created at {{$post->created_at}}</small>
	{{-- koroche tut displayatsya nazvanie, soderjimoe posta i kogda sozdano(mojew ubrat` esli ne need) --}}

	<a href="{{url('/posts')}}" class="btn btn-default">Back to index page</a>  
	{{-- esli che pomenyay knopku i nazvanie --}}

	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit a post</a>

	{!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
	{!!Form::close()!!}
		@endif
	@endif
</body>
</html>