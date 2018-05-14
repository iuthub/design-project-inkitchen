@extends('layouts.app')

@section('content')

	@if(count($posts)>0)
		@foreach($posts as $post)
			@if($post->categorie==1)
				<a href="/posts/{{$post->id}}">{{$post->title}}</a>
				 <a href="/posts/{{$post->id}}"><img style="width:20%"src="/storage/cover_images/{{$post->cover_image}}" ></a>
			@endif
		@endforeach
	@else 
		<h3>No Posts Found</h3>
	@endif
	<br>
	<a href="{{url('/posts')}}">Go to main page</a>

@endsection