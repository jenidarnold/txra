@extends('layouts.app')
@section('style')
    <style type="text/css">

    </style>
@stop
@section('content')

	<section class="page-header page-header-xs">
		<div class="container">
			<div class="container">
				<h1><i class="fa fa-user-circle"></i> ADMIN</h1>			
				<!-- breadcrumbs -->
				<ol class="breadcrumb">
					<li><a href="/admin">Index</a></li>
					<li><a href="{{route('admin.invites')}}">Invites</a></li>
					<li><a href="{{route('admin.users')}}">Users</a></li>
					<li><a href="{{route('admin.rankings')}}">Rankings</a></li>
					<li><a href="{{route('admin.events')}}">Events</a></li>
				</ol><!-- /breadcrumbs -->		
			</div>
			{{-- @yield('admin_header') --}}
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- LAYOUT-->
	<section>
		<div class="container">
			
			<!-- LEFT -->
			<div class="col-lg-2 col-md-2 col-sm-3 well">				
				{{-- <div class="text-center">
						
					@if((true)) 	
						<img name="imgProfile" id="imgProfile" class="user-avatar thumbnail img-responsive" src='{{ asset('images/members/'. $user->id  . '/profile.png')}}' alt="" />
					@else
						@if($profile->gender == 'female')
							<i class="thumbnail ico-lg ico-color et-profile-female" style="background-color:#D8BFD8"></i>
						@else
							<i class="thumbnail ico-lg ico-color et-profile-male" style="background-color:#1E8BC3"></i>
						@endif
					@endif
					</div>
				--}}
					
			<!-- SIDE NAV -->
			<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
			
				<li><a href="{{route('admin.invites')}}">Invites</a></li>
				<li><a href="{{route('admin.users')}}">Users</a></li>
				<li><a href="{{route('admin.rankings')}}">Rankings</a></li>
				<li><a href="{{route('admin.events')}}">Events</a></li>
			</ul>
			<!-- /SIDE NAV -->
		</div>

		<!-- RIGHT -->
		<div class="col-lg-10 col-md-10 col-sm-9">
		   @yield('admin_content')
		</div>

	</div>
</section>
<!-- / -->
@stop