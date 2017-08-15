@extends('layouts.app')
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
@section('content')

	<section class="page-header page-header-xs">
		<div class="container">

			@yield('profile_header')

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- LAYOUT-->
	<section>
		<div class="container">
			
			<!-- LEFT -->
			<div class="col-lg-3 col-md-3 col-sm-4">
			
				<div class="thumbnail text-center">
					<!-- && (@getimagesize('http://localhost:8886/images/members/'. $user->id  . '/profile.png'))) -->
					@if((true)) 	
						<img src='{{ asset('images/members/'. $user->id  . '/profile.png')}}' alt="" />
					@else
						@if($profile->gender == 'female')
							<i class="ico-lg ico-color et-profile-female" style="background-color:#D8BFD8"></i>
						@else
							<i class="ico-lg ico-color et-profile-male" style="background-color:#1E8BC3"></i>
						@endif
					@endif
					<h2 class="size-18 margin-top-10 margin-bottom-0">{{ $user->first_name }} {{ $user->last_name }}</h2>
					{{-- <h3 class="size-11 margin-top-0 margin-bottom-10 text-muted">{{ ucfirst($profile->skill) }}</h3> --}}
				</div>
				
				<!-- Show Profile Progress if this profile belongs to current Auth -->
				@if(Auth::id() == $user->id)
				{{-- <div class="margin-bottom-30">
					<label>88% completed profile</label>
					<div class="progress progress-xxs">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
					</div>
				</div> --}}
				@endif

				<!-- SIDE NAV -->
				<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
					<li class="list-group-item {{ $active['profile'] }}"><a href="{{ route('members.show', array('id' => $user->id))}}"><i class="fa fa-eye"></i> PROFILE</a></li>
					{{-- <li class="list-group-item list-toggle">   <!-- NOTE: "active" to be open on page load -->                
						<a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1"><i class="fa fa-calendar"></i> UPCOMING EVENTS</a></a>
						<ul id="collapse-1" class="collapse"><!-- NOTE: "collapse in" to be open on page load -->
							<li>
								<span class="badge badge-black"><i class="fa fa-user"></i></span>
								<span class="badge badge-red">6/03</span>

								<a href="#"><i class="fa fa-angle-right"></i> Crazy Craig's Celeb...</a>
							</li>
							<li>
								<span class="badge badge-red">6/10</span>
								<a href="#"><i class="fa fa-angle-right"></i> 2017 June Triple Crown</a>
							</li>										
							<li class="active">
								<span class="badge badge-blue">7/08</span>
								<a href="#"><i class="fa fa-angle-right"></i> 2017 July Triple Crown</a>
							</li>
							<li class="active">
							    <span class="badge badge-black"><i class="fa fa-user"></i></span>
								<span class="badge badge-blue">7/29</span>
								<a href="#"><i class="fa fa-angle-right"></i> 3rd Annual ETCASA</a>
							</li>
						</ul>
					</li>
					<li class="list-group-item"><a href="#"><i class="fa fa-trophy"></i> ACHIEVEMENTS <span class="badge badge-warning">23</span></a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-history"></i> MATCH HISTORY</a></li> --}}
					{{-- <li class="list-group-item"><a href="#"><i class="fa fa-photo"></i> GALLERY</a></li>
					<li class="list-group-item"><a href="#"><i class="fa fa-comments-o"></i> COMMENTS</a></li> --}}
					<!-- Show Profile Settings if this profile belongs to current Auth -->
					@if(Auth::id() == $user->id)
						<li class="list-group-item {{ $active['settings'] }}"><a href="{{ route('members.edit', array('id' => $user->id))}}"><i class="fa fa-gears"></i> SETTINGS</a></li>		
					@endif	
					<li class="list-group-item "><a href="{{ route('members.listing')}}"><i class="fa fa-users"></i> BACK TO ALL</a></li>				
				</ul>
				<!-- /SIDE NAV -->


				<!-- info -->
				<div class="box-light margin-bottom-30"><!-- .box-light OR .box-light -->

					<div class="text-muted margin-bottom-20">
						<h2 class="size-18 text-muted margin-bottom-20"><b>About Me</b></h2>
						<ul class="list-unstyled nomargin">
							<li class="margin-bottom-10"><i class="fa fa-home width-20 hidden-xs hidden-sm"></i> {{ $profile->city }}</li>
							<li class="margin-bottom-10"><i class="fa fa-female width-20 hidden-xs hidden-sm"></i> {{ ucfirst($profile->gender) }}</li>
							<li class="margin-bottom-10"><i class="fa fa-hand-stop-o width-20 hidden-xs hidden-sm"></i> {{ ucfirst($profile->dominant_hand) }}</li>
							<li class="margin-bottom-10"><i class="fa fa-signal width-20 hidden-xs hidden-sm"></i> {{ ucfirst($profile->skill) }}</li>
							<li class="margin-bottom-10"><i class="fa fa-wrench width-20 hidden-xs hidden-sm"></i> {{ $profile->racquet }}</li>
						</ul>
					</div>						

					<!--
					<div class="text-muted">
					
						<ul class="list-unstyled nomargin">
							<li class="margin-bottom-10"><i class="fa fa-globe width-20 hidden-xs hidden-sm"></i> <a href="http://www.stepofweb.com">www.stepofweb.com</a></li>
							<li class="margin-bottom-10"><i class="fa fa-facebook width-20 hidden-xs hidden-sm"></i> <a href="http://www.facebook.com/stepofweb">stepofweb</a></li>
							<li class="margin-bottom-10"><i class="fa fa-twitter width-20 hidden-xs hidden-sm"></i> <a href="http://www.twitter.com/stepofweb">@stepofweb</a></li>
						</ul>
					</div>
					-->
					<!-- /info -->

				
				</div>

			</div>


			<!-- RIGHT -->
			<div class="col-lg-9 col-md-9 col-sm-8">
			   @yield('profile_content')
			</div>

		</div>
	</section>
	<!-- / -->
@stop