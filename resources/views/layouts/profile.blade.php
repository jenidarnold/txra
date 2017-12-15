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
    	
    	.nav-tabs>li, .nav-tabs>li>a {
		    float: left !important;
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
				<div class="text-center">
					@if((true)) 	
						<img name="imgProfile" id="imgProfile" class="user-avatar thumbnail img-responsive" src='{{ asset('images/members/'. $user->id  .'/' .$profile->avatar)}}' alt="" />
					@else
						@if($profile->gender == 'female')
							<i class="thumbnail ico-lg ico-color et-profile-female" style="background-color:#D8BFD8"></i>
						@else
							<i class="thumbnail ico-lg ico-color et-profile-male" style="background-color:#1E8BC3"></i>
						@endif
					@endif
					{{-- <h2 class="size-18 margin-top-10 margin-bottom-0">{{ $user->first_name }} {{ $user->last_name }}</h2> --}}				
				</div>
					
				<!-- Show Profile Progress if this profile belongs to current Auth -->
				@if ((Auth::id() == $user->id) && ($profile->progress < 100))

				<div class="margin-bottom-30 text-center alert alert-info">
					<h5 class="text-success">
						Complete your profile to be elibile for the<br/> 
						<a href="/sweepstakes" target="new">PICK-A-FREE-TOURNEY-SWEEPSTAKES</a>
					</h5>
					<h6>
						<a class="text-info" href="{{ route('members.edit', array('id' => $user->id))}}" title="Goto My Settings to complete profile">
							<i class="fa fa-info-circle"></i> Profile {{ $profile->progress}}% completed
						</a>
					</h6>
					<div class="progress progress-xs">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $profile->progress}}" aria-valuemin="0" aria-valuemax="100" style="{{'width:' . $profile->progress . '%; min-width: 2em;'}}"></div>
					</div>
				</div>
				@else
					<!-- Show Eligbile for Sweepstakes if date < Promo-end date-->
					<div class="margin-bottom-30 text-center alert alert-success">
						<h5 class="text-success">
							Congratulations!<br/> 
							You have been entered into the<br/> 
							<a href="/sweepstakes" target="new">PICK-A-FREE-TOURNEY SWEEPSTAKES!</a>
						</h5>
						<h6>
							<a href="{{ route('refer.show', array('id' => $user->id))}}" class="text-left">Refer-a-Friend for more chances to win!</a>
						</h6>
					</div>
				@endif

				<!-- SIDE NAV -->

				@if(!isset($action))
				
					<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
						<li class="list-group-item {{ $active['profile'] }}"><a href="{{ route('members.show', array('id' => $user->id))}}"><i class="fa fa-eye"></i> TXRA PROFILE</a></li>
						<!-- Show Profile Settings if this profile belongs to current Auth -->
						@if((Auth::id() == $user->id))
							<li class="list-group-item {{ $active['settings'] }}">
								<a href="{{ route('members.edit', array('id' => $user->id))}}"><i class="fa fa-gears"></i> MY SETTINGS</a>
							</li>
							<li class="text-left list-group-item {{ $active['referrals'] }}">
								<a href="{{ route('refer.show', array('id' => $user->id))}}" class=" text-left"><i class="fa fa-share-alt"></i> MY REFERRALS 
								<span class="badge progress-bar-success">{{ $referrals->count()}}</span>
								</a>
							</li>
							{{-- <li class="text-left list-group-item {{ $active['rewards'] }}">
								<a href="{{ route('rewards.show', array('id' => $user->id))}}" class=" text-left"><i class="fa fa-money"></i> MY REWARD POINTS <span class="badge">{{\App\Credit::balance($user->id)}}</span></a>
							</li>	 --}}
						@endif	

						@if(isset($user->usar_id))
							@if($user->usar_id > 0)
								<li class="list-group-item ">
									<a href="{{ 'http://www.usaracquetballevents.com/profile-player.asp?UID='. $user->usar_id}}" target="usar_profile"><img src="{{ asset('images/logos/r2sports.gif')}}" width="20px"> USAR PROFILE</a>
								</li>
								<li class="list-group-item ">
									<a href="{{ 'http://www.usaracquetballevents.com/profile-player.asp?UID='. $user->usar_id . '&matchHistoryType=Singles'}}" target="usar_profile"><img src="{{ asset('images/logos/r2sports.gif')}}" width="20px"> USAR MATCH HISTORY</a>
								</li>
							@endif
						@endif				
						<li class="list-group-item "><a href="{{ route('members.listing')}}"><i class="fa fa-users"></i> BACK TO ALL PROFILES</a></li>				
					</ul>
					<!-- /SIDE NAV -->


					@if(isset($about))
						<!-- info -->
						<div class="box-light1 margin-bottom-30 alert alert-info"><!-- .box-light OR .box-light -->					
							<div class="text-primary margin-bottom-20">
								<h2 class="size-18 text-primary text-center margin-bottom-20"><b>About Me</b></h2>
								<hr class="text-primary"/>
								<ul class="list-unstyled nomargin">
									<li class="margin-bottom-10"><i class="fa fa-home width-20"></i> {{ $profile->city }}</li>
									
									<li class="margin-bottom-10">
									@if($profile->gender == 'female')
										<i class="fa fa-female width-20"></i> 
									@else
										<i class="fa fa-male width-20"></i> 
									@endif
									{{ ucfirst($profile->gender) }}</li>

									<li class="margin-bottom-10"><i class="fa fa-hand-stop-o width-20"></i> 
										@if(isset($profile->dominant_hand) && $profile->dominant_hand <> "")	
											{{ ucfirst($profile->dominant_hand) }}-handed
										@endif
									</li>
									<li class="margin-bottom-10"><i class="fa fa-signal width-20"></i> {{ ucfirst($profile->skill) }}</li>
									<li class="margin-bottom-10"><i class="fa fa-search fa-flip-horizontal margin-right-20"></i> {{ $profile->racquet }}</li>
								</ul>
							</div>			
						</div>
					@endif
				@endif
			</div>
    
			<!-- RIGHT -->
			<div class="col-lg-9 col-md-9 col-sm-8">
			   @yield('profile_content')
			</div>

		</div>
	</section>
	<!-- / -->
@stop