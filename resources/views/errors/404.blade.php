@extends('layouts.app')
@section('style')
    <style type="text/css">
		.h1 { color:#fff !important;
	}

    </style>
@stop
@section('content')

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<div class="" class="smoothscroll enable-animation" style="height:600px; 
		background-image: url('{{asset('images/court/empty.jpg')}} '); background-repeat: no-repeat; ">
		<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>
		<div class="display-table">
			<div class="display-table-cell vertical-align-middle">
				<div class="container text-center">
					<div class="row ">
						<h1 class="bold font-raleway wow fadeInUp" style="color:#fff" data-wow-delay="0.4s">PAGE NOT FOUND</h1>
						<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" style="color:#fff" data-wow-delay=".6s">Sorry, the page you requested can not be found!</p>				
					</div>
		
				</div>
			</div>
		</div>
	</div>
@stop

