<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Us</title>


    <link rel="stylesheet" href="{{asset('css/aboutUs/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutUs/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/aboutUs/style.css')}}">

</head>
<body>
	<header class = "row">
		<div class="container header">
			<div class="container-fluid">
			    <div>
			      <a class="pull-center " href="#"><img src="img/LOGO.png" width="200px" alt="">
			      </a>
			    </div>
			</div>
		</div>
		<div class="container flex-xl-row text-center" style="margin-top: 10%">
			<h1 class="">WELCOME TO<a class=" " href="#"><img src="img/LOGO.png" width="200px" alt=""></a></h1>
			<p align="center">Your favourite food blog</p>
			<a href="{{url('/posts')}}" type="button" class="btn btn-default btn-lg"> <h2>Get Started</h2> </a>
		</div>
		
	</header>
	
	<section class = "flex-row container">
		<div class="col-4 text-center aboutus"><h1>About Us <hr></h1>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam facilis deserunt, consequatur minus dolore cumque quas sint iusto quae itaque! Quae, beatae? Ipsam commodi officiis quia voluptatum ullam, incidunt.</p>
		</div>
		<div class="row container two">
			<div class="col-lg-6 pull-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta placeat perspiciatis consectetur cumque, modi nemo. Asperiores impedit alias veniam, est ad incidunt! Molestias culpa hic temporibus iusto harum, dolore debitis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem voluptatem dolor cupiditate facere nulla veritatis earum nobis reprehenderit sapiente laudantium blanditiis magni fuga delectus, perspiciatis dicta incidunt. Et, nam blanditiis.</div>
  			<div class="col-lg-6 pull-right text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In unde, illo quidem, tempore voluptates labore numquam! Facere consequuntur, sint corporis ipsa nulla repellendus ratione, exercitationem eos dolorem fugiat cumque maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi sed, saepe porro, praesentium, maxime possimus pariatur neque temporibus repellendus nostrum tenetur deleniti a minus recusandae quia magnam nobis, quidem aspernatur.</div>
		</div>
	    	<div class="row">
	    		 <div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/Islombek.jpg')}}" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Islombek Salimov</p>
								<h5 class = "discription" >Front-end, head</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>

			  	<div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/islom.jpg')}}" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Islom Babaev</p>
			          			<h5 class = "discription" >Back-end</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>

			  	<div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/Igor.jpg')}}" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Igor Tsoy</p>
			          			<h5 class = "discription" >Designer</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>

			  	<div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/Laziza.jpg')}}" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Laziza Nasridinova</p>
			          			<h5 class = "discription" >Head of ideas</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>
				
				<div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/Kgudayarkhan')}}.jpg" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Khudayarkhan Mirjalolov</p>
			          			<h5 class = "discription" >Editor</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>
				<div class="col-md-4">
			    	<div class="thumbnail">
			       		<a><img class="img-responsive" src="{{asset('images/Vadim.jpg')}}" alt="Lights" style="width:100%">
			        		<div class="caption text-center">
			          			<p>Vadim Kim</p>
			          			<h5 class = "discription" >Front-end</h5>
			        		</div>
			      		</a>
			    	</div>
			  	</div>
	    	</div>
	</section>

	<footer style="background: #E8D3B3; height: 80px;">
		<div class="bigpixi-footer-social pull-right">
      <ul>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://twitter.com/">
              <img class="bigpixi-footer-social__icon" alt="Twitter" title="Twitter" src="http://simpleicons.org/icons/twitter.svg">
			</a></li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.facebook.com/">
              <img class="bigpixi-footer-social__icon" alt="Facebook" title="Facebook" src="http://simpleicons.org/icons/facebook.svg">
			</a></li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.youtube.com/">
              <img class="bigpixi-footer-social__icon" alt="YouTube" title="YouTube" src="http://simpleicons.org/icons/youtube.svg">
				</a></li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.instagram.com/">
              <img class="bigpixi-footer-social__icon" alt="Instagram" title="Instagram" src="http://simpleicons.org/icons/instagram.svg">
			</a></li>
          <li class="bigpixi-footer-social__list-item">
            <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.pinterest.com/">
              <img class="bigpixi-footer-social__icon" alt="Pinterest" title="Pinterest" src="http://simpleicons.org/icons/pinterest.svg">
			</a></li>
      </ul>
    </div>
	</footer>

</body>
</html>