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
		<div class="container text-center">

			<div class="row">
				<iframe frameborder="0" width="560" height="315" src="https://biteable.com/watch/embed/rewards-coming-soon-1645148/707a4488e4911fe46e8df24b7393a9c28f4328bb?autoplay=1" allowfullscreen="true"></iframe><p><a href="https://biteable.com/watch/rewards-coming-soon-1645148/707a4488e4911fe46e8df24b7393a9c28f4328bb"></a></p>
			</div>			

			<div class="callout alert alert-info margin-top-60 margin-bottom-60">

				<div class="row">

					@if( Auth::guest())

						<div class="col-md-8 col-sm-8 text-left"><!-- left text -->
							<h3>Login and go to your Profile Page. Then click <b>My Referrals</b> to get started Sharing and Earning</h3>
						</div><!-- /left text -->

						<div class="col-md-4 col-sm-4 text-left"><!-- right btn -->
							<a href="/login" rel="nofollow" class="btn btn-info btn-lg">LOGIN NOW</a>
						</div><!-- /right btn -->
					@else
						<a href="{{route('refer.show', Auth::user()->id )}}"
							<button type="button" class="btn btn-success btn-block">Refer a Friend Now!</button></a>
					@endif
					
				</div>

			</div>
			
		</div>	
	</section>
@stop