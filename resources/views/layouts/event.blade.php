@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">
		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb-inverse">
			<li><a href="{{ route('events.index', array('type' => 'live'))}} ">Events</a></li>
			<li class="active">{{ $tournament->name}}</li>
			<li class="active">{{ $page->title}}</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->


<!-- -->
<section>
	<div class="container">	  

		<div class="row">

			<!-- LEFT -->
			<div class="col-md-3 col-sm-3">
				<div class="thumbnail text-center">
					<img class="img-responsive" src="{{ asset('images/tournaments/logos/'.$tournament->logo) }}"  height="80" alt="">
					<h2 class="size-18 margin-top-10 margin-bottom-0">{{ $tournament->name}}</h2>
					<h3 class="size-11 margin-top-0 margin-bottom-0">{{ $tournament->city}}</h3>
					<h3 class="size-11 margin-top-0 margin-bottom-10">{{ $tournament->start_date .'-'. $tournament->end_date}}</h3>
				</div>
				<!-- SIDE NAV -->
				<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
					<li class="list-group-item"><a href="{{ route('events.show', array('id' => $tournament->id))}} "><i class="fa fa-home"></i> BASIC INFO</a></li>	
					<li class="list-group-item"><a href="{{ route('events.participants', array('id' => $tournament->id))}} "><i class="fa fa-users"></i> PARTICIPANTS</a></li>			
					<li class="list-group-item"><a href="{{ route('events.scores', array('id' => $tournament->id))}} "><i class="fa fa-trophy"></i> RESULTS</a></li>					
					<li class="list-group-item"><a href="{{ route('events.gallery', array('id' => $tournament->id))}} "><i class="fa fa-photo"></i> GALLERY</a></li>
					<li class="list-group-item"><a href="{{ $tournament->url }}" target="new" ><img class="" style="height:20px" src="{{ asset('images/logos/r2sports.gif')}} "> OFFICIAL TOURNAMENT PAGE</a></li>
				</ul>
				<!-- /SIDE NAV -->
			</div>

			<!-- RIGHT -->
			<div class="col-md-9 col-sm-9">
				@yield('event_content')
			</div>

		</div>
	</div>
</section>
<!-- / -->
@stop