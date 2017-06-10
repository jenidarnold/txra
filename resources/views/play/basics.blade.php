@extends('layouts.app')
@section('style')
    <style type="text/css">
    .info-bar p {
    	text-align: left;
    	color: #666;
    }
    .info-bar h3 {
    	text-align: center;
    }
    </style>
@stop
@section('content')
<section class="page-header page-header-sm header-md parallax parallax-3" style="background-image:url({{ asset('images/court/ymca_bandw_crop9.jpg') }}) ">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<h1>THE BASICS</h1>
	
		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/play">Play</a></li>
			<li class="active">Basics</li>
		</ol><!-- /breadcrumbs -->
	</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">

					<h1 class="blog-post-title">HOW TO PLAY RACQUETBALL</h1>
					<ul class="blog-post-info list-inline">
						<li>
							<a href="#">
								<i class="fa fa-clock-o"></i> 
								<span class="font-lato">June 29, 2017</span>
							</a>
						</li>								
						<li>
							<a href="#">
								<i class="fa fa-user"></i> 
								<span class="font-lato">John Doe</span>
							</a>
						</li>
					</ul>

					<img class="img-responsive pull-right" src="{{asset('images/play/court.jpg')}}" width="300" alt="zones" />
					

					<!-- article content -->
					<p>Racquetball is easy and fun to play, although it may take a few games to figure out the basics such as scoring, serving and some simple rules. Racquetball can be played indoors and outdoors, but most Texas courts can be found indoors at private/public health clubs, and all sorts of local recreation centers. The game can be played as 'singles', between two players, or 'doubles' between two teams of two players each. There is also a game, 'cut-throat' which involves three players. Each player has his/her own racquet and one ball is used.
					</p>
					<p>Matches are typically two games to 15 points and a tie-breaker to 11 points if needed. For the basics let's get started with a few so you can enjoy your racquetball experience. The serve-Play begins with the server standing in the Service Zone and serving the ball to his/her opponent(s) who is standing in the Receiving Zone. To serve, the server must first bounce the ball and then strike it with the racquet.
					</p>
		</div>
	</section>


	<section>
		<div class="container">
			<h3>RACQUETBALL EQUIPMENT</h3>
			
			<!-- 
				INFO BAR 
				inside .container
			-->
			<div class="info-bar info-bar- info-bar-bordered">
				<div class="container">
					<div class="row">					
						<div class="col-sm-5th">
							<img class="img-responsive" src="{{ asset('images/equipment/racquet_gb.jpg')}}" alt="">	
							<h3>RACQUET</h3>
							<p>Cost anywhere from $20-$200. Depends on budget, and willingness to pay for feel and technology.</p>	
						</div>

						<div class="col-sm-5th">
							<img class="img-responsive" src="{{ asset('images/equipment/eyewear.jpg')}}" alt="">	
							<h3>EYEWEAR</h3>
							<p>Recommended and important, helps reduce the risk of injury if you are hit in the eye</p>		
						</div>

						<div class="col-sm-5th">
							<img class="img-responsive" src="{{ asset('images/equipment/balls.jpg')}}" alt="">	
							<h3>BALL</h3>
							<p>Balls come in different colors such as blue, green, lavender and black. Any color will do.</p>
						</div>

						<div class="col-sm-5th">
							<img class="img-responsive" src="{{ asset('images/equipment/glove.jpg')}}" alt="">	
							<h3>GLOVE</h3>
							<p>Optional, this will help you keep a firm grip on the racquet during those fast rallies.</p>
						</div>

						<div class="col-sm-5th">
							<img class="img-responsive" src="{{ asset('images/equipment/shoes.jpg')}}" alt="">	
							<h3>SHOES</h3>
							<p>Any type of indoor court or tennis shoe, there are shoes designed specifically for racquetball</p>
						</div>

					
					</div>

				</div>
			</div>
			<!-- /INFO BAR -->		

			<!-- SHARE POST -->
			<div class="row">
				<div class="col-md-4 col-md-offset-8">
					<div class="clearfix margin-top-30">

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="Google plus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
							<i class="icon-pinterest"></i>
							<i class="icon-pinterest"></i>
						</a>

						<a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="Email">
							<i class="icon-email3"></i>
							<i class="icon-email3"></i>
						</a>
					</div>
				</div>	
			</div>
			<!-- /SHARE POST -->					
		</div>			
	</section>

</section>
<!-- / -->
@stop