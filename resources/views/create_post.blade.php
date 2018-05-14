<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Creating a Post</title>
</head>
<body>
	{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!} 
			{{ csrf_field() }}
			<div class="form-group">
				{{Form::label('title', 'Title')}}
				{{Form::text('title', '' , ['class'=> 'form-control', 'placeholder'=> 'Enter the title'])}}
			</div>
    {{-- sozdayet formu, ti tut pomenyay dizayn esli need --}}
	{{--

	textarea
	  --}}
			<div class="form-group">
				{{Form::label('post_body', 'Body')}}
				{{Form::textarea('post_body', '' , ['class'=> 'form-control', 'placeholder'=> 'Enter your text here'])}}


			</div>
			<div>
					{{-- drop down list --}}
				{!!Form::select('categorie', ['1'=>'Breakfast', '2'=> 'Salad', '3'=> 'Launch', '4'=>'Dinner', '5'=>'Desert', '6'=>'Healthy']) !!}
			</div>
			<div>
				{{Form::file('cover_image')}}
			</div>
			{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
	@include('error_msg')
</body>
</html>