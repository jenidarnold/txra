@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		

	<section class="page-header page-header-xs">
		<div class="container">

			<h1>USAR-IP CERTIFIED RACQUETBALL INSTRUCTORS IN TEXAS</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="#">Play</a></li>
				<li class="active">Instructors</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			
			<p class="lead">The following Texas Racquetball Instructors are certified by the <a href="{{ route('programs.instructors')}}">USAR-IP</a>. Click on the instructor's photo for an introduction and contact information.</a> </p>
			<hr/>

			<div class="row">
				<!-- item -->
				<div class="col-md-3">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">									
									<img class="img-" src="{{ asset('images/instructors/JansenAllen.jpg')}}" alt="" />
									<h2>JANSEN ALLEN</h2>
									<small>Dallas, TX</small>								
								</div>
							</div>						
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">JANSEN ALLEN</h4>
								<small>IRT PRO</small>									
								<hr />
								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>

					<!-- Jansen Modal -->
					<div id="modAllen" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modAllenLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="modAllenLabel">JANSEN ALLEN - Certified Instructor</h4>
								</div>

								<!-- Modal Body -->
								<div class="modal-body">
									<p>Since starting racquetball at the early age of 4 and becoming a top 8 professional player on tour, I have always wanted to give back to the sport and become an instructor to help others. The USA Racquetball Instructor Program was a great opportunity for me to become more familiar with teaching others and critiquing my coaching skills as well.  I enjoyed learning and successfully completing the Instructor Program with Fran Davis in San Antonio, Texas at the YMCA.  This is my first certification and I look forward to working with others to help improve their game.  Texas racquetball has always been the home of many great racquetball players and I hope to continue this trend by promoting the junior program and growing the sport.  I would recommend this great program to anyone who loves racquetball and teaching others.</p>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/2015jessebaza.jpg')}}" alt="" />
									<h2>JESSE BAZA</h2>
									<small>San Antonio, TX</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">JESSE BAZA</h4>
								<small>aka DJ FAT BISCUIT </small>
								<hr/>
								<blockquote class="text-left">
									<p> The certification gives validation and the credentials needed to inspire confidence to teach the game properly.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modBaza" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'JESSE BAZA'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- JESSE BAZA Modal -->
					<div id="modBaza" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modBazaLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="modBazaLabel">JESSE BAZA - Certified Instructor</h4>
								</div>

								<!-- Modal Body -->
								<div class="modal-body">
									<p>When I was at Texas A&M (many years ago when I had a full head of hair and 50 lbs. lighter) I took my first racquetball course and quickly got hooked on the game.  It was in this class that I met Lance Gilliam, also from San Antonio, who was kind enough to teach me a thing or two about the sport and we remain friends to this day.  I later found out Lance was the Grand Puba of racquetball and continues to promote the sport in San Antonio.  Over the years I’ve also kept involved with the sport, became an Alamo City Racquetball instructor and began teaching beginners and juniors at several gyms.  However, I only recently completed my USAR-IP certification with Fran Davis at the YMCA Henderson Pass in August 2014.  The certification gives validation and the credentials needed to inspire confidence to teach the game properly.  Fran is a great coach/mentor who has taught me to be a better coach on how to teach, talk, demonstrate, reinforce and encourage students.  Her simple tips even improved my game tremendously!  I highly recommend taking this certification if you love racquetball and teaching.  It’s a great way to continually remind yourself of the basics which is the best foundation to the game.</p>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/SandyLong.jpg')}}" alt="" />
									<h2>SANDY LONG</h2>
									<small>Fort Worth, Texas</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">SANDY LONG</h4>
								<small>Texas State Juniors' Coach</small>
								<hr />
								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/2014diegoperez.png')}}" alt="" />
									<h2>DIEGO PEREZ</h2>
									<small>Tyler, TX</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">DIEGO PEREZ</h4>
								<small> </small>

								<hr />

								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->
			</div>
			<hr/>
			<div class="row">
				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/JoannaReyes.jpg')}}" alt="" />
									<h2>JOANNA REYES</h2>
									<small>Corpus Christi, TX</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">JOANNA REYES</h4>
								<small></small>

								<hr />

								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/2014mikesorensen.png')}}" alt="" />
									<h2>MIKE SORENSEN</h2>
									<small>Plano, TX</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">MIKE SORENSEN</h4>
								<small></small>

								<hr />

								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->

					<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/2014edievann.png')}}" alt="" />
									<h2>EDDIE VANN</h2>
									<small>Katy, Texas</small>
								</div>
							</div>
						</div>

						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">EDDIE VANN</h4>
								<small></small>

								<hr />

								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
						<div class="front">
							<div class="box1 box-default">
								<div class="box-icon-title">
									<img class="img-" src="{{ asset('images/instructors/2016lLeoVasquez.jpg')}}" alt="" />
									<h2>LEO R VASQUEZ</h2>
									<small>Arlington, TX</small>
								</div>
							</div>
						</div>
						<div class="back">
							<div class="box2 box-primary">
								<h4 class="nomargin">LEO R VASQUEZ</h4>
								<small>Vice-President USAR</small>

								<hr />

								<blockquote class="text-left">
									<p>I have always wanted to give back to the sport and become an instructor to help others.</p>
								</blockquote>
								<a href="#" data-toggle="modal" data-target="#modAllen" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
								<a href="/members/profile/1" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
								<hr/>

								<a href="http://m.me/jansen.allen.3" class="social-icon social-icon-sm social-facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="{{ route('contact',array('to' => 'Jansen Allen'))}}" class="social-icon social-icon-sm social-linkedin">
									<i class="fa fa-envelope"></i>
									<i class="fa fa-envelope"></i>
								</a>
								<a href="#" class="social-icon social-icon-sm social-google">
									<i class="fa fa-phone"></i>
									<i class="fa fa-phone"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /item -->
			
			</div>
		</div>
	</section>
	<!-- / -->
@stop