@extends('layouts.app')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="glyphicon glyphicon-gift text-danger"></i> TXRA REWARDS PROGRAM</h1>
	
			{{-- <!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Gallery</li>		
				<li><a href="/forms/awards/nominate/">Nominations</a></li>					
			</ol><!-- /breadcrum --}}
		</div>
	</section>
	<!-- /PAGE HEADER -->

<!-- -->
	<section>
		<div class="container">
	
			<div class="row">
				<div class="col-md-12 text-center">
					<h4>We want to thank you for participating in various TXRA activities with our Rewards Program </h4>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 text-center">
					<iframe frameborder="0" width="560" height="315" src="https://biteable.com/watch/embed/rewards-coming-soon-1645148/707a4488e4911fe46e8df24b7393a9c28f4328bb?autoplay=1" allowfullscreen="true"></iframe><p><a href="https://biteable.com/watch/rewards-coming-soon-1645148/707a4488e4911fe46e8df24b7393a9c28f4328bb"></a></p>
				</div>

				<div class="col-md-4 tet-left alert alert-info">
					<h4>Earn Reward Points when you <a href="{{route('refer.index')}}" target="_blank">Refer-A-Friend</a>.</h4>
					@if( Auth::guest())
						<div class="text-left"><!-- left text -->
							<h5>Login and go to your Profile Page. Then click <b>My Referrals</b> to get started.</h5>
						</div>

						<div class="text-left"><!-- right btn -->
							<a href="/login" rel="nofollow" class="btn btn-info btn-lg">LOGIN NOW</a>
						</div><!-- /right btn -->
					@else
						<div class="text-left"><!-- left text -->
							<h5>Go to your Profile Page. Then click <b>My Referrals</b> to get started.</h5>
						</div><!-- /left text -->
						<div class="text-left"><!-- right btn -->
							<a href="{{route('refer.show', Auth::user()->id )}}"
							<button type="button" class="btn btn-success">Refer a Friend Now!</button></a>
						</div>
					@endif		
				</div>
			</div>
		

		</div>	
	</section>
@stop