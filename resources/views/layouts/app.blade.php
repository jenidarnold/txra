<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Texas Racquetball Association</title>
		<meta name="keywords" content="Texas, racquetball, sport, racquet" />
		<meta name="description" content="" />
		<meta name="Author" content="Julienne Arnold" />


	   <!--Facebook Metadata /-->
	    @if(!empty($meta['image']))
	        <meta property="og:image" content="{{ url($meta['image']) }}"/>
	    @else
			<meta property="og:image" content="http://texasracquetball.org/images/logos/txra_full_logo_og.png"/>
	    @endif
	    @if(!empty($meta['description']))
	        <meta property="og:description" content="{{ str_limit($meta['description'], $limit = 250, $end = '...') }}"/>
	    @else
			<meta property="og:description" content="TXRA leads the Texas racquetball community in supporting the sport on the local, state, national, and international levels."/>
	    @endif
	    @if(!empty($meta['title']))
	        <meta property="og:title" content="{{ $meta['title'] }}"/>
	    @else
			<meta property="og:title" content="Texas Racquetball Association"/>
	    @endif
	    @if(!empty($meta['url']))
			<meta property="og:url" content="{{ url($meta['url']) }}"/>
	    @else
			<meta property="og:url" content="http://texasracquetball.org"/>		
		@endif
		@if(!empty($meta['image_type']))
			<meta property="og:image:type" content="{{ $meta['image_type'] }}"/>
	    @else
			<meta property="og:image:type" content="image/png"/>
		@endif
		@if(!empty($meta['image_width']))
			<meta property="og:image:width" content="{{ $meta['image_width'] }}"/>
	    @else	
			<meta property="og:image:width" content="746"/>
		@endif
		@if(!empty($meta['image_height']))
			<meta property="og:image:height" content="{{ $meta['image_height'] }}"/>
	    @else	
			<meta property="og:image:height" content="746" />
		@endif
		@if(!empty($meta['type']))
			<meta property="og:type" content="{{ $meta['type'] }}"/>
	    @else
			<meta property="og:type" content="website"/>
		@endif

		<meta property="fb:app_id" content="1163926640418093"/>

		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Mobile icons -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('images/icons/txra-icon-57x57.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/icons/txra-icon-72x72.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/icons/txra-icon-114x114.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/icons/txra-icon-144x144.png')}}">

		@yield('head')

		<!-- LAYER SLIDER -->
		<link href="{{ asset('plugins/slider.layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css" />

		<!-- Jcrop -->
		<link href="{{ asset('css/jquery.Jcrop.min.css') }}" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css?v=1.00.02') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset('css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- Adding reCAPTCHA to your site -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<style>
		.content {
			padding-top: 60px;
		}
		@media only screen and (min-width: 1000px) {
		.content {
			padding-top: 100px;
			}
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
			/*font-weight: bold;*/
		}
		.breadcrumb .active {
			/*color: #8ab933 !important;*/
			/*background-color: #98a09e;*/
			font-weight: bolder;
		}

		#topNav div.nav-main-collapse {
			max-height: 400px !important;
		}
				
	</style>
@yield('style')

<!-- PHP variables -->
@php ($board = array(1, 644, 557, 511))

	<body class="smoothscroll enable-animation grain-grey">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<h1 style="font-size:16pt"><i class="icon-heart text-danger"></i>MISSION STATEMENT</h1>
						<h3>The Texas Racquetball Association's mission is to develop and promote the growth of racquetball.</h3>
					</div>
				</div>
			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->

			<!-- wrapper -->
		{{-- <div id="wrapper"> --}}

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
							<a href="/welcome"><img src="{{ asset('images/logos/TXRA_full_logo.png')}}" class="hidden-md hidden-sm hidden-xs" style="max-height:90px; padding-top:5px;padding-left:5px" alt="" /></a>
							<a href="/welcome"><img src="{{ asset('images/logos/TXRA_full_logo.png')}}" class="hidden-sm hidden-xs hidden-lg" style="max-height:90px; padding-top:5px;padding-left:5px" alt="" /></a>
							<a href="/welcome"><img src="{{ asset('images/logos/TXRA_logo_only.png')}}" class="hidden-md hidden-lg" style="max-height:50px; padding-top:5px;padding-left:5px; display:inline;" alt="" /></a>
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
									
									{{-- <li><a href="{{ url('/survey') }}">SURVEY</a></li> --}}							
									{{-- <li class="dropdown hidden-xs hidden-sm">
										<a class="dropdown hidden-xs hidden-sm" href="/sweepstakes">
											<span class="btn btn-sm btn-danger">SWEEPSTAKES</span>
										</a>	
									</li>
									<li class="dropdown hidden-md hidden-lg label-danger">
										<a class="dropdown" href="/sweepstakes">
											SWEEPSTAKES
										</a>
									</li> --}}
									
									{{-- <li class="dropdown hidden-md hidden-lg label-warning">
										<a class="dropdown" href="/checkin">
											CLUB CHECK-INS
										</a>
									</li> --}}

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
											<img class="user-avatar" alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" src="{{ asset('images/members/'. Auth::user()->id .'/'. Auth::user()->profile()->first()->avatar) }}" height="34" />
										</a>
										<ul class="dropdown-menu hold-on-click">	
											<li><!-- My Profile -->
												<a href="{{ route('members.show', array('id' =>  Auth::user()->id))}}"><i class="fa fa-user"></i> My Profile</a>
											</li>							
											<li><!-- settings -->
												<a href="{{ route('members.edit', array('id' =>  Auth::user()->id))}}"><i class="fa fa-cogs"></i> Settings</a>
											</li>
											<!-- Admin Only -->
											@if(Auth::check() && Auth::user()->id == 1 )
												<li class="divider"></li>	
												<li><a href="{{ route('admin.index')}}"><i class="fa fa-lock"></i> ADMIN</a></li>
											@endif
											<!-- Board Only -->											
         									@if (Auth::check() && (in_array(Auth::user()->id, $board)))
												<li class="divider"></li>	
												<li><a href="{{ route('boardonly.index')}}"><i class="fa fa-lock"></i> BOARD ACCESS</a></li>
											@endif
											<li class="divider"></li>
											<li><!-- logout -->
												<a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Log Out</a>
											</li>
										</ul>	
									</li>						
									@endif							
									<!-- /USER OPTIONS -->	

									<li class="dropdown mega-menu">
									<!-- PLAY -->
										<a class="dropdown-toggle" href="#">
											PLAY
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>WHO</span></li>
															<li><a href="{{ route('members.listing')}}">MEMBER PROFILES</a></li>
															<li>
																<a class="dropdown" href="{{route('members.rankings')}}">
																	PLAYER RANKINGS
																</a>
															</li>	
															<li><a href="{{ route('play.instructors')}}">INSTRUCTORS</a></li>	
															<li><a href="{{ route('referees')}}">REFEREES</a></li>		
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>WHAT</span></li>
															<ul class="list-unstyled">
																<li class="">
																	<a class="dropdown" href="{{ route('events.index', array('type' =>'live'))}}">
																		LIVE EVENTS
																	</a>
																</li>
																<li class="">
																	<a class="dropdown" href="{{ route('events.index', array('type' =>'future'))}}">
																		FUTURE EVENTS
																	</a>
																</li>
																<li class="">
																	<a class="dropdown" href="{{ route('events.index', array('type' =>'recent'))}}">
																		RECENT EVENTS
																	</a>
																</li>
																<li class="">
																	<a class="dropdown" href="{{ route('events.index', array('type' =>'past'))}}">
																		PAST EVENTS
																	</a>
																</li>
																<li class="">
																	<a class="dropdown" href="{{ route('events.index', array('type' =>'ladder'))}}">
																		LADDERS
																	</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>WHERE</span></li>
															<li><a href="{{ route('play.map')}}">CLUBS & FACILITIES</a></li>
															<li class="dropdown hidden-xs hidden-sm">
																<a class="dropdown" href="/checkin">
																CHECK-INS <span class="btn btn-xs btn-warning">BETA</span>
																</a>	
															</li>
															{{-- <li><a href="{{ route('play.leagues.index')}}">LEAGUES</a></li> --}}
															<li><a href="{{ route('events.index', array('type' =>'future'))}}">TOURNAMENTS</a></li>								

														</ul>
													</div>
													
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>HOW</span></li>
															<li><a href="{{ route('play.basics')}}">THE BASICS</a></li>
															<li><a href="{{ route('play.rules')}}">THE RULES</a></li>
															<li><a href="{{ route('play.levels')}}">SKILL LEVELS</a></li>
														</ul>
													</div>
												</div>												
											</li>							
										</ul>
									</li>
									<li class="dropdown mega-menu"><!-- PROGRAMS -->
										<a class="dropdown-toggle" href="#">
											PROGRAMS
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">
													<div class="col-md-4">
														<ul class="list-unstyled">
															<li><span>YOUTH PROGRAMS</span></li>
															<li>
																<a href="{{route('juniors.welcome')}}">JUNIORS PROGRAM</a>												
															</li>
															
															<li>
																<a target="new" href="https://www.teamusa.org/usa-racquetball/programs/college-racquetball">
																	COLLEGE RACQUETBALL
																</a>
															</li>
															<li>
																<a href="/scholarships">SCHOLARSHIPS</a>	
															</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul class="list-unstyled">
															<li><span>CERTIFICATIONS</span></li>
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
														</ul>
													</div>
													<div class="col-md-4">
														<ul class="list-unstyled">
															<li><span>ANNUAL AWARDS</span></li>
															<li>
																<a href="{{route('awards.index')}}">Gallery</a>
															</li>
															<li>
																<a href="{{route('awards.nominate')}}">Nominate</a>
															</li>		
														</ul>
													</div>
													<div class="col-md-4">
														<ul class="list-unstyled">
															<li><span>GRANTS</span></li>
															<li>
																<a href="{{route('grants.index')}}">View Submissions</a>
															</li>
															<li>
																<a href="{{route('grants.create')}}">Request a Grant</a>
															</li>		
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</li>
									
									<li class="dropdown mega-menu"><!-- NEWS -->
										<a class="dropdown-toggle" href="#">
											NEWS
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">
													<div class="col-md-5th">														
														<ul class="list-unstyled">
															<li><span>QUICK LINKS</span></li>
															<li><a href="{{ route('news.index')}}">LATEST NEWS</a></li>
															{{-- <li><a href="{{ route('news.index')}}">TRENDING</a></li> --}}
															<li><a href="{{ route('news.category', array('id' =>3, 'category' => 'Tip of the Day'))}}">TIP OF THE DAY</a></li>
														</ul>
													</div>
													<div class="col-md-5th">														
														<ul class="list-unstyled">
															<li><span>OPINION</span></li>
															<li><a href="{{ route('news.category', array('id' =>10, 'category' => 'OP-ED'))}}">OP-ED</a></li>
															<li><a href="{{ route('news.category', array('id' =>13, 'category' => 'Social Commentary'))}}">SOCIAL COMMENTARY</a></li>	
														</ul>
													</div>
													<div class="col-md-5th">														
														<ul class="list-unstyled">
															<li><span>PLAYERS</span></li>
															<li><a href="{{ route('news.category', array('id' =>2, 'category' => 'Player Spotlight') )}}">PLAYER SPOTLIGHT</a></li>
															<li><a href="{{ route('news.category', array('id' =>6, 'category' => 'Events'))}}">TOURNAMENTS & EVENTS</a></li>
															<li><a href="{{ route('news.category', array('id' =>11, 'category' => 'Post-Match') )}}">POST-MATCH</a></li>
														</ul>
													</div>
													<div class="col-md-5th">														
														<ul class="list-unstyled">
															<li><span>BUSINESS</span></li>
															<li><a href="{{ route('news.category', array('id' =>9, 'category' => 'Board Minutes'))}}">BOARD MINUTES</a></li>
															<li><a href="{{ route('news.category', array('id' =>14, 'category' => 'Financial Reports'))}}">FINANCIAL REPORTS</a></li>
														</ul>
													</div>
													<div class="col-md-5th">														
														<ul class="list-unstyled">
															<li><span class="">CONTRIBUTE</span></li>
															<li><a href="{{ route('news.create')}}" >SUBMIT ARTICLE</a></li>
														</ul>
													</div>
												</div>
											</li>
										</ul>										
									</li>
									<li class="dropdown mega-menu"><!-- ABOUT -->
										<a class="dropdown-toggle" href="#">
											ABOUT
										</a>
										<ul class="dropdown-menu">											
											<li>
												<div class="row">
													<div class="col-md-3">														
														<ul class="list-unstyled">
															<li><span>ORGANIZATION</span></li>
															<li><a href="{{ route('board.index')}}">BOARD OF DIRECTORS</a></li>
															<li><a href="{{ route('committees.index')}}">COMMITTEES</a></li>
														</ul>
													</div>
													<div class="col-md-3">														
														<ul class="list-unstyled">
															<li><span>POLICIES</span></li>
															<li><a href="/about/bylaws">BY LAWS</a></li>
															<li><a href="{{ route('election.index')}}" >ELECTION PROCEDURE</a></li>
															<li><a href="{{ route('election.nominate')}}" >NOMINATE FOR BOARD</a></li>
															<li><a href="{{ route('about.sanctioning')}}" >SANCTIONING GUIDELINES</a></li>
															{{-- <li><a href="{{ route('about.mission')}}">MISSION STATEMENT</a></li>
															<li><a href="{{ route('about.ethics')}}" >CODE OF ETHICS</a></li> --}}
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>PARTICIPATE</span></li>
															<li><a href="/donate">DONATE</a></li>
															<li><a href="/about/committees#join">VOLUNTEER</a></li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="list-unstyled">
															<li><span>REPORTS</span></li>
															<li><a href="{{ route('news.category', array('id' =>9, 'category' => 'Board Minutes'))}}">BOARD MINUTES</a></li>
															<li><a href="{{ route('news.category', array('id' =>12, 'category' => 'Financial Reports'))}}">FINANCIAL REPORTS</a></li>
														</ul>
													</div>
												</div>
											</li>								
										</ul>
									</li>
									<li><!-- CONTACT US -->
										<li><a href="{{route('contact')}}">CONTACT US</a>
									</li>			

									<li class="dropdown mega-menu"><!-- MEMBERSHIPS-->
										<a class="dropdown-toggle" href="#">
											JOIN
										</a>
										<ul class="dropdown-menu">											
											<li>
												<div class="row">
													<div class="col-md-6">														
														<ul class="list-unstyled">
															<li><span>TEXAS RACQUETBALL ASSOCIATION</span></li>
															<li><a href="/register">
																FREE E-Membership with TXRA
																</a>
															</li>
															<li>
																<a href="{{route('members.membership')}}">
																Become a TXRA member when you purchase a USAR Competitive License mebership
																</a>
															</li>
														</ul>
													</div>
													<div class="col-md-6">														
														<ul class="list-unstyled">
															<li><span>USA RACQUETBALL</span></li>
															<li><a  target="usar" href="https://www.teamusa.org/usa-racquetball/emembership">FREE E-Membership with USAR</a></li>
															<li class="dropdown">
																<a href="{{route('members.membership')}}">Competitive License Membership</a>	
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</li>

									<!-- USER OPTIONS -->
									@if( Auth::guest())
									<li class="dropdown hidden-xs hidden-sm">
										<a class="dropdown hidden-xs hidden-sm" href="/login">
											<span class="btn btn-sm btn-primary">LOGIN</span>
										</a>																
									@else
									<li class="dropdown hidden-xs hidden-sm">
										<a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											<img class="user-avatar" alt="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" src="{{ asset('images/members/'. Auth::user()->id .'/'. Auth::user()->profile()->first()->avatar) }}" height="34" />
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
												<li><a href="{{ route('admin.index')}}"><i class="fa fa-lock"></i> ADMIN</a></li>
											@endif
											<!-- Board Only -->
											@if (Auth::check() && (in_array(Auth::user()->id, $board)))
												<li class="divider"></li>	
												<li><a href="{{ route('boardonly.index')}}"><i class="fa fa-lock"></i> BOARD ACCESS</a></li>
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


        <!-- 
                MODAL ON LOAD 
                
                data-autoload="true"            - load modal on page load
                data-autoload-delay="2000"      - load after 2000 ms (1000ms = 1s)
                
                Please note, an unique ID is required.
                localstorage use the ID to hide the modal, if used checked "Don't show this popup again"
            -->
          
            <div id="modReferral" class="modal fade" data-autoload="false" data-autoload-delay="2000">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h1 class="modal-title text-center text-primary" id="myModalLabel">Refer-A-Friend</h4>
                        </div><!-- /Modal Header -->

                        <!-- body modal -->
                        <div class="modal-body clearfix">
                        	@include('includes.promos.refer_faq')                           
                        </div>


                        <div class="modal-footer">
                            <!-- Don't show this popup again -->
                            <div class="size-11 text-left">
                                <label class="checkbox pull-left">
                                    <input class="loadModalHide" type="checkbox" />
                                    <i></i> <span class="weight-300 ">Don't show this popup again</span>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /MODAL ON LOAD -->

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

		<!-- Jcrop v0.9-->
		<script type="text/javascript" src="{{ asset('js/jquery.Jcrop.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.color.js') }}"></script>

		<!-- LAYER SLIDER -->
		<script type="text/javascript" src="{{ asset('plugins/slider.layerslider/js/layerslider_pack.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/view/demo.layerslider_slider.js') }}"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/view/demo.revolution_slider.js')}}"></script>

		@yield('page-js-files')

		<!-- GLOABAL SCRIPTS -->
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-61761895-4', 'auto');	
		  //@if(Auth::check()) {	 
		  //	ga('set', 'userId', Auth::user()->id ); // Set the user ID using signed-in user_id.	
		  //@endif	 
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

		<script type="text/javascript">
		/* send a DELETE request without creating a form
		Exemples : 
		<a href="posts/2" data-method="delete" data-token="{{csrf_token()}}"> 
		- Or, request confirmation in the process -
		<a href="posts/2" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
		*/
		    (function() {
		     
		      var laravel = {
		        initialize: function() {
		          this.methodLinks = $('a[data-method]');
		          this.token = $('a[data-token]');
		          this.registerEvents();
		        },
		     
		        registerEvents: function() {
		          this.methodLinks.on('click', this.handleMethod);
		        },
		     
		        handleMethod: function(e) {
		          var link = $(this);
		          var httpMethod = link.data('method').toUpperCase();
		          var form;
		     
		          // If the data-method attribute is not PUT or DELETE,
		          // then we don't know what to do. Just ignore.
		          if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
		            return;
		          }
		     
		          // Allow user to optionally provide data-confirm="Are you sure?"
		          if ( link.data('confirm') ) {
		            if ( ! laravel.verifyConfirm(link) ) {
		              return false;
		            }
		          }
		     
		          form = laravel.createForm(link);
		          form.submit();
		     
		          e.preventDefault();
		        },
		     
		        verifyConfirm: function(link) {
		          return confirm(link.data('confirm'));
		        },
		     
		        createForm: function(link) {
		          var form = 
		          $('<form>', {
		            'method': 'POST',
		            'action': link.attr('href')
		          });
		     
		          var token = 
		          $('<input>', {
		            'type': 'hidden',
		            'name': '_token',
		            'value': link.data('token')
		            });
		     
		          var hiddenInput =
		          $('<input>', {
		            'name': '_method',
		            'type': 'hidden',
		            'value': link.data('method')
		          });
		     
		          return form.append(token, hiddenInput)
		                     .appendTo('body');
		        }
		      };
		     
		      laravel.initialize();
		     
		    })();
		</script>

		<!-- Facebook API -->
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appIdTest      : '1163926640418093',
		      appId      : '299121233904807',
		      xfbml      : true,
		      version    : 'v2.10'
		    });
		    FB.AppEvents.logPageView();
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>


		@yield('script')
		
		<script>

			window.mobilecheck = function() {
			  var check = false;
				  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
				  return check;
			};

			$(function(){
				if(window.mobilecheck())
				{
					$('.show-mobile').show();
					$('.hide-mobile').hide();
		        }else{
		        	$('.show-mobile').hide();
					$('.hide-mobile').show();
		        }
		    })
		</script>

		@yield('page-js-script')
	</body>
</html>