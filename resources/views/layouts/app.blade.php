<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Texas Racquetball Association</title>
		<meta name="keywords" content="Texas, racquetball, sport, racquet" />
		<meta name="description" content="" />
		<meta name="Author" content="Julienne Arnold" />
		<meta property="og:title" content="Texas Racquetball Association"/>
		<meta property="og:description" content="TXRA leads the Texas racquetball community in supporting the sport on the local, state, national, and international levels."/>
		<meta property="og:url" content="http://67.205.179.1"/>		
		<meta property="og:image" content="http://67.205.179.1/images/logos/txra_logo_og.png"/>
		<meta property="og:image:width" content="746"/>
		<meta property="og:image:height" content="746"/>
		<meta property="og:image:type" content="image/png" />
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


		@yield('head')

		<!-- LAYER SLIDER -->
		<link href="{{ asset('plugins/slider.layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset('css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<style>
		.content {
			padding-top: 100px;
		}
		.credit {
				color: #fff;
				opacity: .8;
				position: absolute; 
				bottom: 0;
				padding-left:10px;
				font-size: 8pt;
		}

		.comment { 
			display: none;
		}
		.breadcrumb {
			/*display: none;*/
		}
				
	</style>
@yield('style')

	<body class="smoothscroll enable-animation grain-grey">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<h6><i class="icon-heart text-danger"></i> WHY RACQUETBALL?</h6>
						<p>"Not only is racquetball a blast to play, but also the sport offers a great deal of physical and mental health benefits. Racquetball is a cinch to learn, and there is a minimal amount of game equipment to buy. The game is fast-paced, so it offers an impressive workout for your entire body in a short amount of time. Racquetball isn't a game for slackers, but you will be having so much fun you wont even notice how much energy you are exerting." <a href="http://woman.thenest.com/benefits-playing-racquetball-13166.html" target="new"> Read More</a></p>
					</div>

					<!--div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div-->

					<!--
					<div class="col-md-5">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br />Dallas, Texas 75007 USA</li>
							<li><b>Phone:</b> 1-800-888-TXRA</li>
							<li><b>Email:</b> <a href="mailto:support@txra.org">support@txra.org</a></li>
						</ul>
					</div>
					-->
				</div>
			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->

			<!-- wrapper -->
		<div id="wrapper">

			<!--
				AVAILABLE HEADER CLASSES
				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height
				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom
				.clearfix		= required for mobile menu, do not remove!
				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<!--div id="header" class="dark header-md transparent clearfix" -->
			<div id="header" class="dark transparent clearfix">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH 
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div>
							</li>
							/SEARCH -->						

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo
						<a class="logo pull-left" href="index.html">
							<img src="{{ asset('images/TX.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/R.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
							<img src="{{ asset('images/A.png')}}" style="height:30px;display:inline; opacity:.4" alt="" />
						</a>
						-->
						
							<a href="/welcome"><img src="{{ asset('images/logos/txra_logo.png')}}" class="hidden-sm hidden-xs" style="max-height:70px; padding-top:15px;" alt="" /></a>
							<a href="/welcome"><img src="{{ asset('images/logos/txra_logo.png')}}" class="hidden-md hidden-lg" style="max-height:50px; padding-top:5px; display:inline;" alt="" /></a>
						<!--
							Top Nav
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example:
									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">	

								<!-- USER OPTIONS -->
									@if( Auth::guest())
									<li class="dropdown hidden-md hidden-lg">
										<a class="dropdown" href="/login">
											LOGIN
										</a>								
									<!--li class="dropdown">
										<a class="dropdown" href="/register">
											<span class="btn btn-sm btn-default">REGISTER</span>
										</a>
									</li-->
									@else
									<li class="dropdown hidden-md hidden-lg">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											<img class="user-avatar" alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" src="{{ asset('images/members/'. Auth::user()->id .'/profile.png') }}" height="34" />
										</a>
										<ul class="dropdown-menu hold-on-click">	
											<li><!-- My Profile -->
												<a href="{{ route('members.show', array('id' =>  Auth::user()->id))}}"><i class="fa fa-user"></i> My Profile</a>
											</li>							
											<li><!-- settings -->
												<a href="{{ route('members.edit', array('id' =>  Auth::user()->id))}}"><i class="fa fa-cogs"></i> Settings</a>
											</li>
											@if( Auth::user()->id == 1 )
												<li class="divider"></li>											
												<li class="dropdown">
													<a class="dropdown-toggle" href="#">
														<i class="fa fa-cogs"></i> ADMIN
													</a>								
													<ul class="dropdown-menu">
														<li><a href="{{ route('events.download', 'live')}}">DOWNLOAD LIVE EVENTS</a></li>
														<li><a href="{{ route('events.download', 'future')}}">DOWNLOAD FUTURE EVENTS</a></li>
														<li><a href="{{ route('events.download', 'past')}}">DOWNLOAD PAST EVENTS</a></li>
													</ul>
												</li>
											@endif
											<li class="divider"></li>
											<li><!-- logout -->
												<a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Log Out</a>
											</li>
										</ul>	
									</li>						
									@endif							
									<!-- /USER OPTIONS -->								
									<li class="dropdown">
									<!-- PLAY -->
										<a class="dropdown-toggle" href="#">
											PLAY
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOW TO PLAY
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('play.basics')}}">THE BASICS</a></li>
													<li><a href="{{ route('play.rules')}}">THE RULES</a></li>
													<li><a href="{{ route('play.levels')}}">SKILL LEVELS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													WHERE TO PLAY
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('play.map')}}">CLUBS & FACILITIES</a></li>
													<li><a href="{{ route('play.leagues.index')}}">LEAGUES</a></li>
													<li><a href="{{ route('events.index', array('type' =>'future'))}}">TOURNAMENTS</a></li>
												</ul>
											</li>

											<li class="dropdown">
												<a href="{{ route('play.instructors')}}">INSTRUCTORS</a>
												<!--
												<a class="dropdown-toggle" href="#">
													IMPROVE YOUR GAME
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('play.instructors')}}">INSTRUCTORS</a></li>
													<li><a href="page-services-2.html">CLINICS</a></li>
												</ul>
												-->
											</li>											
										</ul>
									</li>
									<li class="dropdown"><!-- PROGRAMS -->
										<a class="dropdown-toggle" href="#">
											PROGRAMS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a href="{{route('juniors.welcome')}}">JUNIORS</a>												
											</li>
											{{-- <li class="dropdown">
												<a href="{{route('collegiate.welcome')}}">
													COLLEGIATE
												</a>
											</li> --}}
											<li class="dropdown">
												<a class="dropdown" href="{{ route('referee.index')}}">
													REFEREE CERTIFICATION
												</a>
											</li>
											<li class="dropdown">
												<a href="{{ route('programs.instructors')}}">
													TEXAS INSTRUCTOR PROGRAM
												</a>
											</li>
											<!--li class="dropdown" style="display:none">
												<a class="dropdown-toggle" href="#">
													AMBASSADOR PROGRAM
												</a>
											</li-->											
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ANNUAL AWARDS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="{{route('awards.index')}}">Gallery</a>
													</li>
													<li>
														<a href="{{route('awards.nominate')}}">Nominate</a>
													</li>													
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- MEMBERS -->
										<a class="dropdown-toggle" href="#">
											MEMBERS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a href="{{route('members.listing')}}">PROFILES</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{route('members.rankings')}}">
													RANKINGS
												</a>
											</li>											
											<li class="dropdown">
												<a href="{{route('members.membership')}}">MEMBERSHIPS</a>
												<!--
												<ul class="dropdown-menu">
													<li><a href="portfolio-single-parallax.html">MEMBER BENEFITS</a></li>
													<li><a href="portfolio-single-parallax.html">FREE e-Membership</a></li>
													<li><a href="{{route('members.membership')}}">COMPETITVE MEMBERSHIPS</a></li>
												</ul>
												-->
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- EVENTS -->
										<a class="dropdown-toggle" href="#">
											EVENTS
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'live'))}}">
													LIVE EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'future'))}}">
													UPCOMING EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'recent'))}}">
													RECENT EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'past'))}}">
													ARCHIVED EVENTS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{ route('events.index', array('type' =>'ladder'))}}">
													LADDERS
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- EVENTS -->
										<a class="dropdown-toggle" href="#">
											NEWS
										</a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('news.index')}}">LATEST</a></li>
											<li><a href="{{ route('news.create')}}" >SUBMIT ARTICLE</a></li>
											<!--li><a href="{ { route('news .edit')}}">MY POSTS</a></li-->
										</ul>										
									</li>
									<li class="dropdown"><!-- ABOUT -->
										<a class="dropdown-toggle" href="#">
											ABOUT
										</a>
										<ul class="dropdown-menu">											
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LEADERSHIP
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('board.index')}}">THE BOARD OF DIRECTORS</a></li>
													<li><a href="{{ route('committees.index')}}" >COMMITTEES</a></li>
													<li><a href="{{ route('election.index')}}" >ELECTION PROCEDURE</a></li>
												</ul>
											</li>
											{{-- <li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MISSION & VALUES
												</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('about.mission')}}">MISSION STATEMENT</a></li>
													<li><a href="{{ route('about.ethics')}}" >CODE OF ETHICS</a></li>
												</ul>
											</li>	 --}}										
											{{-- <li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FINANCIALS
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-single-default.html">BUDGET</a></li>	
													<li><a href="blog-single-default.html"></a></li>													
												</ul>
											</li> --}}
											<li class="dropdown">
												<a class="dropdown-toggle" href="/about/bylaws">
													BY LAWS
												</a>
											</li>
											<li class="dropdown">
												<a class="dropdown" href="{{route('contact')}}">
													CONTACT US
												</a>												
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- DONATE -->
										<a class="dropdown" href="/donate">
											DONATIONS
										</a>
									</li>									

									<!-- USER OPTIONS -->
									@if( Auth::guest())
									<li class="dropdown hidden-xs hidden-sm">
										<a class="dropdown hidden-xs hidden-sm" href="/login">
											<span class="btn btn-sm btn-primary">LOGIN</span>
										</a>								
									<!--li class="dropdown">
										<a class="dropdown" href="/register">
											<span class="btn btn-sm btn-default">REGISTER</span>
										</a>
									</li-->
									@else
									<li class="dropdown hidden-xs hidden-sm">
										<a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											<img class="user-avatar" alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" src="{{ asset('images/members/'. Auth::user()->id .'/profile.png') }}" height="34" />
										</a>
										<ul class="dropdown-menu hold-on-click">
											<li><!-- My Profile -->
												<a href="{{ route('members.show', array('id' =>  Auth::user()->id))}}"><i class="fa fa-user"></i> My Profile</a>
											</li>									
											<li><!-- settings -->
												<a href="{{ route('members.edit', array('id' =>  Auth::user()->id))}}"><i class="fa fa-cogs"></i> Settings</a>
											</li>
											@if( Auth::user()->id == 1 )
												<li class="divider"></li>											
												<li class="dropdown">
													<a class="dropdown-toggle" href="#">
														ADMIN
													</a>								
													<ul class="dropdown-menu">
														<li><a href="{{ route('events.download', 'live')}}">DOWNLOAD LIVE EVENTS</a></li>
														<li><a href="{{ route('events.download', 'future')}}">DOWNLOAD FUTURE EVENTS</a></li>
														<li><a href="{{ route('events.download', 'past')}}">DOWNLOAD PAST EVENTS</a></li>
													</ul>
												</li>
											@endif
											<li class="divider"></li>
											<li><!-- logout -->
												<a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Log Out</a>
											</li>
										</ul>	
									</li>						
									@endif							
									<!-- /USER OPTIONS -->
								</ul>
							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->
			</div>
		<div class='content'>
			@yield('content')
		</div>



			<!-- MODAL -->
			<div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">CONTACT US</h4>
						</div>

						<!-- AJAX CONTACT FORM USING VALIDATE PLUGIN -->
						<form class="validate nomargin" action="php/contact.php" method="post">

							<!-- Modal Body -->
							<div class="modal-body">

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input type="text" value="" class="form-control required" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input type="email" value="" class="form-control required" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="contact:subject">Subject *</label>
												<input type="text" value="" class="form-control required" name="contact[subject][required]" id="contact:subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Department</label>
												<select class="form-control pointer" name="contact[department]">
													<option value="">--- Select ---</option>
													<option value="Board">Board</option>													
													<option value="Marketing">Marketing</option>
													<option value="Webdesign">Webdesign</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea maxlength="10000" rows="8" class="form-control required" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										
									</div>
								</div>

							</div>

							<!-- Modal Footer -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary pull-left"><i class="fa fa-check"></i> SEND MESSAGE</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- /MODAL -->

		<!-- FOOTER -->
		@include('includes.footer')    	
		<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/plugins/';</script>
		<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.2.3.min.js') }}"></script>

		<!-- LAYER SLIDER -->
		<script type="text/javascript" src="{{ asset('plugins/slider.layerslider/js/layerslider_pack.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/view/demo.layerslider_slider.js') }}"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/view/demo.revolution_slider.js')}}"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-61761895-4', 'auto');		 
		  //ga('set', 'userId', Auth::user()->id ); // Set the user ID using signed-in user_id.		 
		  ga('send', 'pageview');
		</script>

		<!-- collapse nav pill filters on click list item; for Mobile devices -->
		<script>
			$(document).on('click','.nav-filter-collapse.in',function(e) {
			    if( $(e.target).is('a') ) {
			        $(this).collapse('hide');
			    }
			});	
			</script>
		@yield('script')
</body>
</html>