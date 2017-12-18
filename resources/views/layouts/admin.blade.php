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
					<li><a href="/">Home</a></li>
					<li><a href="/admin">Index</a></li>
					{{-- <li><a href="{{route('admin.clubs')}}">Clubs</a></li>
					<li><a href="{{route('admin.events')}}">Events</a></li>
					<li><a href="{{route('admin.instructors')}}">Instructors</a></li>
					<li><a href="{{route('admin.invites')}}">Invites</a></li>
					<li><a href="{{route('admin.rankings')}}">Rankings</a></li>
					<li><a href="{{route('admin.referees')}}">Referees</a></li>
					<li><a href="{{route('admin.users')}}">Users</a></li> --}}
				</ol>		
			</div>
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- LAYOUT-->
	<section>
		<div class="container">
			<button class="btn btn-mobile hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".nav-filter-collapse">
				<i class="fa fa-bars"></i>
			</button>

			<div class="col-lg-2 col-md-2 col-sm-3">								
				<div class="collapse navbar-collapse nav-filter-collapse">
					<!-- SIDE NAV -->
					<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">			
						<li><a href="/admin">Index</a></li>
						<li><a href="{{route('admin.clubs')}}">Clubs</a></li>
						<li><a href="{{route('admin.events')}}">Events</a></li>
						<li><a href="{{route('admin.instructors')}}">Instructors</a></li>
						<li><a href="{{route('admin.invites')}}">Invites</a></li>
						<li><a href="{{route('admin.nominations')}}">Nominations</a></li>
						<li><a href="{{route('admin.rankings')}}">Rankings</a></li>
						<li><a href="{{route('admin.referees')}}">Referees</a></li>
						<li><a href="{{route('admin.users')}}">Users</a></li>
					</ul>
					<!-- /SIDE NAV -->
				</div>	
			</div>

			<!-- RIGHT -->
			<div class="col-lg-10 col-md-10 col-sm-9">
			   @yield('admin_content')
			</div>
		</div>
	</section>
<!-- / -->
@stop