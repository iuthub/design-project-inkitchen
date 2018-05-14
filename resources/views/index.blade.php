@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <title>InKitchen</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{asset('css/index/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/index/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/font-awesome.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header class = "flex-row">
        <div class="container flex-row">
            <div class="container-fluid" style="margin-top: 20px; margin-bottom: 0px;">
                <div class="col-3 pull-left"><div class="navbar-header" >
                      <a class="navbar-brand" href="#"><img src="img/LOGO.png" width="200px" alt=""></a>
                    </div>
                </div> 
       
                </div>
    
   
<div class="container col-6">
    <hr>
        <nav class="navbar navbar-default">
          <div class="" >
            <ul class="nav navbar-nav">
               <li class="dropdown">
              </li>
                <li><a href="{{url('categories/breakfast')}}">Breakfast</a></li>
                <li><a href="{{url('categories/salad')}}">Salad</a></li>
                 <li><a href="{{url('categories/breakfast')}}">Launch</a></li>
                 <li><a href="{{url('categories/dinner')}}">Dinner</a></li>
                 <li><a href="{{url('categories/desert')}}">Desert</a></li>
                  <li><a href="{{url('categories/healthy')}}">Healthy</a></li>
                           
                      <li><a href="{{url('/')}}">About Us</a></li>
                  <li><a href="{{url('/posts/create')}}">Create a post</a></li>
              
            </ul>
          </div>
        </nav>
    <hr>    
    </div>
    </header>

    <section>
            <div id="myCarousel" class="carousel slide container" data-ride="carousel">
                    
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  
                  <div class="carousel-inner"  align="center">
                    <div class="item active"><a href="#">
                        <img src="{{asset('images/Favours-of-India-Food-and-Tea-Tour-1600x900.jpg')}}">
                    </a>
                    </div>

                    <div class="item"><a href="#">
                        <img src="{{asset('images/Favours-of-India-Food-and-Tea-Tour-1600x900.jpg')}}">
                    </a>
                    </div>

                    <div class="item"><a href="#">
                        <img src="{{asset('images/Favours-of-India-Food-and-Tea-Tour-1600x900.jpg')}}">
                    </a>
                      
                    </div>
                  </div>
            </div>
    </section>

        <div>
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <div class="well">
                       {{--  <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3> --}}
                        <h3>{{$post->title}}</h3>
                        <a href="/posts/{{$post->id}}"><img style="width:20%"src="/storage/cover_images/{{$post->cover_image}}" ></a>
                        <small>Created at {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No Posts Created Yet</p>
            @endif

        </div>

    <footer style="background: #E8D3B3; height: 80px;">
        <div class="bigpixi-footer-social pull-right">
      <ul class="pull-right">
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://twitter.com/">
              <img class="bigpixi-footer-social__icon" alt="Twitter" title="Twitter" src="http://simpleicons.org/icons/twitter.svg">
</a>          </li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.facebook.com/">
              <img class="bigpixi-footer-social__icon" alt="Facebook" title="Facebook" src="http://simpleicons.org/icons/facebook.svg">
</a>          </li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.youtube.com/">
              <img class="bigpixi-footer-social__icon" alt="YouTube" title="YouTube" src="http://simpleicons.org/icons/youtube.svg">
</a>          </li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.instagram.com/">
              <img class="bigpixi-footer-social__icon" alt="Instagram" title="Instagram" src="http://simpleicons.org/icons/instagram.svg">
</a>          </li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.pinterest.com/">
              <img class="bigpixi-footer-social__icon" alt="Pinterest" title="Pinterest" src="http://simpleicons.org/icons/pinterest.svg">
</a>          </li>
      </ul>
    </div>
    </footer>
    

</body>
</html>
@endsection