@extends('layouts.profile')
@section('style')
    <style type="text/css">
    	.gold {
    		color: #D9D919;    		
    	}
    	.silver {
    		color: #C0C0C0;
    	}
    	.bronze {
    		color: #8C7853;
    	}
    	.ranking-box {
    		background-image: url('/images/backgrounds/blue.jpg');
    	}
    	.ranking-box h2, .ranking-box  h3 {
    		color:#fff;
    	}
    </style>
@stop
@section('profile_header')
	@if(Auth::id() == $user->id)
		<h1>MY PROFILE</h1>
	@else
		<h1>{{$user->full_name}}'s PROFILE</h1>
	@endif
@stop

@section("profile_content")
					
	<!-- FLIP BOX -->
	<div class="ranking-box box-flip box-icon box-icon-center box-icon-round box-icon-large text-center nomargin " >
		<div class="front">
			<div class="box1 noradius" >
				<div class="box-icon-title">
					<i class="fa fa-list-ol" style="background-color:#fff"></i>
					<h2>RANKINGS</h2>									
					<div class="text-muted small" style="color:white;font-size:smaller">{{ $usar->effective_rank}}</div>
				</div>
				<div class="row margin-top-10">
					<div class="col-md-4 col-sm-4 col-xs-4 margin-bottom-20">
						<h3 class="size-11 margin-top-0 margin-bottom-0 text-center"><i class="fa fa-female"></i> SINGLES</h3>
						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000" >{{$usar->state_singles_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">TEXAS</span>
								<span class="hidden-sm hidden-md hidden-lg  text-info bold">TX</span>	
							</h3>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000" >{{$usar->national_singles_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">NATIONAL</span>
								<span class="hidden-sm hidden-md hidden-lg text-info bold">NAT</span>						
							</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 margin-bottom-20">
						<h3 class="size-11 margin-top-0 margin-bottom-0 text-center"><i class="fa fa-female"></i><i class="fa fa-female"></i> DOUBLES</h3>
						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000">{{$usar->state_doubles_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">TEXAS</span>
								<span class="hidden-sm hidden-md hidden-lg  text-info bold">TX</span>	
							</h3>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000">{{$usar->national_doubles_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">NATIONAL</span>
								<span class="hidden-sm hidden-md hidden-lg  text-info bold">NAT</span>
							</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 margin-bottom-20">
						<h3 class="size-11 margin-top-0 margin-bottom-0 text-center"><i class="fa fa-female"></i><i class="fa fa-male"></i> 
						<span class="hidden-xs text-default bold">MIXED DOUBLES</span>
						<span class="hidden-sm hidden-md hidden-lg text-default bold">MIXED</span>
						</h3>
						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000">{{$usar->state_mixed_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">TEXAS</span>
								<span class="hidden-sm hidden-md hidden-lg  text-info bold">TX</span>
							</h3>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-6 text-center bold">
							<h2 class="size-20 margin-top-10 margin-bottom-0 font-raleway countTo" data-speed="3000">{{$usar->national_mixed_rank}}</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">
								<span class="hidden-xs text-info bold">NATIONAL</span>
								<span class="hidden-sm hidden-md hidden-lg  text-info bold">NAT</span>
							</h3>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="back">
			<div class="box2 noradius">
				<h4>WHO AM I?</h4>
				<hr />
				<p>{{ $profile->bio }}</p>
			</div>
		</div>
	</div>
	<!-- /FLIP BOX -->


{{-- 	<div class="box-light"><!-- .box-light OR .box-dark -->
		<div class="row">
			<!-- Game Style for Dobules Match Maker  -->
			<div class="col-md-6 col-sm-6">
				<div class="box-inner">
					<h3>GAME STYLE</h3>

				</div>
			</div>
		</div>
	</div> --}}
	
{{-- 			<!-- MY UPCOMING EVENTS -->
			<div class="col-md-6 col-sm-6">

				<div class="box-inner">
					<h3>
						<a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
						MY UPCOMING EVENTS
					</h3>
					<div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
					
						<div class="clearfix margin-bottom-10"><!-- post item -->
							<img class="thumbnail pull-left" src="http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/21674_normal.jpg" width="60" height="60" alt="" />
							<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Crazy Craig's Celebration Tournament</a></h4>
							<span class="size-11 text-muted">June 3-4, 2017</span>
							<br/>
							<span class="size-11 text-muted">Round Rock, TX</span>
							<br/>
							<span class="badge badge-black"><i class="fa fa-user"></i></span>

						</div><!-- /post item -->

						<div class="clearfix margin-bottom-10"><!-- post item -->
							<img class="thumbnail pull-left" src="http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/16981_normal.jpg" width="60" height="60" alt="" />
							<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">2017 June Triple Crown</a></h4>
							<span class="size-11 text-muted">June 10-11,2017</span>
							<br/>
							<span class="size-11 text-muted">Arlington, TX</span>
							<br/>
							<span class="badge badge-black"><i class="fa fa-user"></i></span>
						</div><!-- /post item -->

						<div class="clearfix margin-bottom-10">post item
							<img class="thumbnail pull-left" src="http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/16981_normal.jpg" width="60" height="60" alt="" />
							<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">2017 July Triple Crown</a></h4>
							<span class="size-11 text-muted">July 8-9, 2017</span>
							<br/>
							<span class="size-11 text-muted">Arlington, TX</span>
							<br/>
							<span class="badge badge-black"><i class="fa fa-user"></i></span>
						</div><!-- /post item -->

							<div class="clearfix margin-bottom-10"><!-- post item -->
							<img class="thumbnail pull-left" src="http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/14366_normal.jpg" width="60" height="60" alt="" />
							<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">3rd Annual ETCASA Shootout</a></h4>
							<span class="size-11 text-muted">July 29, 2017</span>
							<br/>
							<span class="size-11 text-muted">Longview, TX</span>
							<br/>
							<span class="badge badge-black"><i class="fa fa-user"></i></span>
						</div><!-- /post item -->


					</div>
				</div>
				<div class="box-footer">
					<!-- INLINE SEARCH -->
					<div class="inline-search clearfix">
						<form action="#" method="get" class="widget_search nomargin">
							<input type="search" placeholder="Search Event..." name="s" class="serch-input">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<div class="clear"></div>
						</form>
					</div>
					<!-- /INLINE SEARCH -->
				</div>
			</div>
			<!-- /MY UPCOMING EVENTS --> --}}

{{-- 			<!-- ACHIEVEMENTS -->
			<div class="col-md-6 col-sm-6">

				<div class="box-inner">
					<h3>
						<a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
						ACHIEVEMENTS <span class="badge badge-success">23</span>
					</h3>
					<div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">

						<div class="clearfix margin-bottom-10"><!-- squared item -->
							<i class="fa fa-trophy fa-2x thumbnail pull-left gold rounded" ></i>
							<h4 class="size-14 nomargin noborder nopadding bold"><a href="#">1<sup>st</sup> Men's A/B Singles</a></h4>
							<span class="size-12 text-muted">Tyler, TX Shootout May 6-7, 2017</span>
						</div><!-- /squared item -->

						<div class="clearfix margin-bottom-10"><!-- rounded item -->												
							<i class="fa fa-trophy fa-2x thumbnail pull-left silver rounded" ></i>
							<h4 class="size-14 nomargin noborder nopadding bold"><a href="#">2<sup>nd</sup> Men's Open/Elite Doubles</a></h4>
							<span class="size-12 text-muted">Tyler, TX Shootout May 6-7, 2017</span>
						</div><!-- /rounded item -->

						<div class="clearfix margin-bottom-10"><!-- squared item -->												
							<i class="fa fa-trophy fa-2x thumbnail pull-left bronze rounded" ></i>
							<h4 class="size-14 nomargin noborder nopadding bold"><a href="#">3<sup>rd</sup> U.S. Open Women's Elite Singles</a></h4>
							<span class="size-12 text-muted">Minneapolis, Mn Oct 5-8, 2017</span>
						</div><!-- /squared item -->

					</div>
				</div>									

				<div class="box-footer">
					<!-- INLINE SEARCH -->
					<div class="inline-search clearfix">
						<form action="#" method="get" class="widget_search nomargin">
							<input type="search" placeholder="Search Achievements..." name="s" class="serch-input">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<div class="clear"></div>
						</form>
					</div>
					<!-- /INLINE SEARCH -->

				</div>
			</div>
			<!-- /ACHIEVEMENTS --> --}}
		</div>


{{-- 		<div class="row margin-top-30">

			<!-- DISCUSSIONS -->
			<div class="col-md-6 col-sm-6">

				<div class="box-inner">
					<h3>
						<a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
						DISCUSSIONS
					</h3>
					<div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
					
						<div class="clearfix margin-bottom-20"><!-- discussion item -->
							<img class="thumbnail pull-left" src="assets/images/demo/people/300x300/3-min.jpg" width="60" height="60" alt="" />
							<h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Joana Doe</a></h4>
							<span class="size-13 text-muted">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								<span class="text-success size-11">12 min. ago</span>
							</span>
						</div><!-- /discussion item -->

						<div class="clearfix margin-bottom-20"><!-- discussion item -->
							<img class="thumbnail pull-left" src="assets/images/demo/people/300x300/4-min.jpg" width="60" height="60" alt="" />
							<h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Melissa Doe</a></h4>
							<span class="size-13 text-muted">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								<span class="text-success size-11">54 min. ago</span>
							</span>
						</div><!-- /discussion item -->

						<div class="clearfix margin-bottom-20"><!-- discussion item -->
							<img class="thumbnail pull-left" src="assets/images/demo/people/300x300/5-min.jpg" width="60" height="60" alt="" />
							<h4 class="size-15 nomargin noborder nopadding bold"><a href="#">juliet Doe</a></h4>
							<span class="size-13 text-muted">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								<span class="text-success size-11">8 days ago</span>
							</span>
						</div><!-- /discussion item -->

						<div class="clearfix margin-bottom-20"><!-- discussion item -->
							<img class="thumbnail pull-left" src="assets/images/demo/people/300x300/6-min.jpg" width="60" height="60" alt="" />
							<h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Suanna Doe</a></h4>
							<span class="size-13 text-muted">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								<span class="text-success size-11">12 day ago</span>
							</span>
						</div><!-- /discussion item -->

						<div class="clearfix margin-bottom-20"><!-- discussion item -->
							<img class="thumbnail pull-left" src="assets/images/demo/people/300x300/7-min.jpg" width="60" height="60" alt="" />
							<h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Felicia Doe</a></h4>
							<span class="size-13 text-muted">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								<span class="text-success size-11">1 month ago</span>
							</span>
						</div><!-- /discussion item -->

					</div>
				</div>

				<div class="box-footer">
					<!-- INLINE SEARCH -->
					<div class="inline-search clearfix">
						<form action="#" method="get" class="widget_search nomargin">
							<input type="search" placeholder="Search Discussion..." name="s" class="serch-input">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<div class="clear"></div>
						</form>
					</div>
					<!-- /INLINE SEARCH -->

				</div>

			</div>
			<!-- /DISCUSSIONS -->

			<!-- NOTIFICATIONS -->
			<div class="col-md-6 col-sm-6">

				<div class="box-inner">
					<h3>
						<a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
						NOTIFICATIONS
					</h3>
					<div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
					
						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-success label-square pull-left">
								<i class="fa fa-comment"></i>
							</span>
							<span class="size-14 text-muted"><b>New Comment</b>: <a href="blog-single-default.html">Lorem ipsum Dolor</a></span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-danger label-square pull-left">
								<i class="glyphicon glyphicon-remove"></i>
							</span>
							<span class="size-14 text-muted"><b>Rejected</b>: <a href="#">Joana Doe</a> rejected friendship</span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-warning label-square pull-left">
								<i class="fa fa-warning"></i>
							</span>
							<span class="size-14 text-muted"><b>Warning</b>: Lorem ipsum Dolor</span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-info label-square pull-left">
								<i class="fa fa-info-circle"></i>
							</span>
							<span class="size-14 text-muted"><b>Info</b>: Lorem ipsum Dolor</span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-primary label-square pull-left">
								<i class="fa fa-check"></i>
							</span>
							<span class="size-14 text-muted"><b>Primary</b>: Lorem ipsum Dolor</span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-default label-square pull-left">
								<i class="fa fa-heart-o"></i>
							</span>
							<span class="size-14 text-muted"><b>Default</b>: Lorem ipsum Dolor</span>
						</div><!-- /notification item -->

						<div class="clearfix margin-bottom-20"><!-- notification item -->
							<span class="label label-purple label-square pull-left">
								<i class="fa fa-clock-o"></i>
							</span>
							<span class="size-14 text-muted"><b>Various</b>: Lorem ipsum Dolor</span>
						</div><!-- /notification item -->

					</div>
				</div>

				<div class="box-footer">
					<!-- INLINE SEARCH -->
					<div class="inline-search clearfix">
						<form action="#" method="get" class="widget_search nomargin">
							<input type="search" placeholder="Search notification..." name="s" class="serch-input">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<div class="clear"></div>
						</form>
					</div>
					<!-- /INLINE SEARCH -->

				</div>

			</div>
			<!-- /NOTIFICATIONS -->

		</div> --}}


	</div>


	{{-- <form method="post" action="#" class="box-light margin-top-20"><!-- .box-light OR .box-dark -->
		<div class="box-inner">
			<h4 class="uppercase">LEAVE A MESSAGE TO <strong>{{ $user->first_name }} {{ $user->last_name }}</strong></h4>
			
			<textarea required class="form-control word-count" data-maxlength="100" rows="5" placeholder="Type your message here..."></textarea>
			<div class="text-muted text-right margin-top-3 size-12 margin-bottom-10">
				<span>0/100</span> Words
			</div>

			<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
		</div>
	</form> --}}

@stop