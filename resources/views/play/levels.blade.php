@extends('layouts.app')
@section('style')
	<style>
	 .mega-price-table li {
	 	height: 80px;
	 }
	 .pricing-title {
	 	height: 75px !important;
	 }
	</style>

@stop
@section('content')		
<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
		.dark		= dark page header
		.light		= light page header
-->
<section class="page-header parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/17-min.jpg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Skill Levels</h1>
		<span class="font-lato size-18 weight-300">a breakdown of the difference in skill level</span>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/play/basics">Play</a></li>
			<li class="active">Skill Levels</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->
<div class="container">

  <!--  Reference http://bestracquetball.com/divisions-or-levels/  -->

	<div class="row mega-price-table margin-bottom-60">
		
		<div class="col-md-2 col-sm-6 hidden-sm hidden-xs pricing-desc">

			<div class="pricing-title">
				<h3>Levels</h3>			
			</div>

			<ul class="list-unstyled">
				<li>Knowledge of Rules</li>
				<li class="alternate">Time on Court</li>
				<li>Forehand/Backhand</li>
				<li class="alternate">Accuracy of Shot</li>
				<li>Shot/Serve Selection</li>
				<li class="alternate">Anticipation of Shots</li>
				<li>Game Strategy</li>
				<li class="alternate">Court Positioning</li>
				<li>Leagues/Tournaments</li>
			</ul>

		</div>

		<div class ="col-md-10 col-sm-6">
			<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "3", "autoPlay": 5000, "navigation": true, "pagination": false}'>

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Novice</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Zero knowledge of the rules of the game.
								</li>
								<li class="alternate">
									Just started playing the game.
								</li>
								<li>
									Subpar forehand. No backhand at all.
								</li>
								<li class="alternate">
									Extremely inaccurate! “Heads up!”
								</li>
								<li>
									“Grip it & rip it”. Just hits the ball with no remorse!
								</li>
								<li class="alternate">
									Has no clue where the ball is going, how it got there, or what their opponent is thinking. 
								</li>
								<li>
									Zero strategy involved in their game.
								</li>
								<li class="alternate">
									All over the place. Chasing the ball.
								</li>
								<li>
									No league or tournaments yet.
								</li>
							</ul>

							<!-- /option list -->
							<!-- button -->
								<a href="#" class="btn btn-primary fullwidth">Read More</a>		
						</div>
					</div>				
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class=" block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>D</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Very basic knowledge of the rules of the game.
								</li>
								<li class="alternate">
									Plays every once in a while. Not regularly.
								</li>
								<li>
									May use tennis double-handed backhand shot. Does everything to try to avoid using the backhand.
								</li>
								<li class="alternate">
									Still skips a lot of open shots. The ones that stay in play typically end up in center court. 
								</li>
								<li>
									Starting to broaden their horizons and learn some new shots.
								</li>
								<li class="alternate">
									Still struggles to know where shots are going to end up. No idea what opponent is going to do.
								</li>
								<li>
									Still not much strategy involved in their game.
								</li>
								<li class="alternate">
									Starting to realize center court helps but doesn’t know how to make it happen.
								<li>
									May start to consider league play.
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>C</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows most of the rules of the game.
								</li>
								<li class="alternate">
									Has been playing for a little while. Still not dedicated to playing but does find time to play a little more consistently.
								</li>
								<li>
									Starting to develop a good forehand shot. Backhand is still unreliable but it’s starting to get some pop behind it.
								</li>
								<li class="alternate">
									Hitting the ball much harder. Kills the ball every now and then.
								</li>
								<li>
									Basic knowledge. Tough time executing.
								</li>
								<li class="alternate">
									Starting to figure out angles. Still doing a lot of chasing.
								</li>
								<li>
									Basic strategy.
								</li>
								<li class="alternate">
									Realizes importance of center court. Still struggles implementing it during gameplay.
								</li>
								<li>
									Plays in leagues. Considering tournament play.
								</li>							
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class=" block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>B</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows all of the rules of the game.
								</li>
								<li class="alternate">
									Regular on the court.
								</li>
								<li>
									Forehand and backhand are getting closer to each other.
								</li>
								<li class="alternate">
									Still not 100% consistent but getting better.
								</li>
								<li>
									Has multiple shots and serves in arsenal and starting to know when to use them.
								</li>
								<li class="alternate">
									Understands where the ball is going. Still doesn’t grasp what opponent is doing to play them.
								</li>
								<li>
									Understands what to do. Has a tough time with consistency.
								</li>
								<li class="alternate">
									Knows to stay in center court. Trouble maintaining position.
								</li>
								<li>
									Actively trying to improve game. Plays in league. Some tournament play.
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>A</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows all of the rules of the game.
								</li>
								<li class="alternate">
									Plays regularly. One of the better players at the club.
								</li>
								<li>
									Both are approaching “deadly”. Can kill ball either way more often than not.
								</li>
								<li class="alternate">
									Extremely accurate! Kills, re-kills, passing shots, ceiling balls all shot very well.
								</li>
								<li>
									Has a large arsenal and knows when to use them.
								</li>
								<li class="alternate">
									Seems to always be where the ball is going.
								</li>
								<li>
									Thinks on court and plays shots ahead.
								</li>
								<li class="alternate">
									Maintains court position. Shoots opponent out of position.
								</li>
								<li>
									Plays in multiple tournaments.
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Elite</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows all of the rules of the game.
								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->

							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Open</h3>
							</div>

							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows all of the rules of the game.
								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->

				<!-- item -->
				<div class="item-box">
					<div class="block">
						<div class="pricing">

							<div class="pricing-head">
								<h3>Pro</h3>
							</div>

						<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Knows all of the rules of the game.
								</li>
								<li class="alternate">
								</li>
								<li>

								</li>
								<li class="alternate">
								
								</li>
								<li>

								</li>
								<li class="alternate">

								</li>
								<li>
									
								</li>
								<li class="alternate">
									
								</li>
								<li>
									
								</li>
							</ul>
							<!-- /option list -->


							<!-- button -->
							<a href="#" class="btn btn-primary fullwidth">Read More</a>	

						</div>					
					</div>
				</div>
				<!-- /item -->
			</div>
		</div>	
	</div>
</div>


@stop