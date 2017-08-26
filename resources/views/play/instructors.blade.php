@extends('layouts.app')
@section('style')
    <style type="text/css">
    	.social {
    		margin-top: 15px;
    	}
    </style>
@stop
@section('content')		

	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="fa  fa-certificate"></i> CERTIFIED INSTRUCTORS IN TEXAS</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="#">Play</a></li>
				<li class="active">Instructors</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			
			<p class="lead">The following Texas Racquetball Instructors are certified by the <a href="{{ route('programs.instructors')}}">USAR-IP</a>. Click on the instructor's photo for an introduction and contact information.</a> </p>
			<hr/>

			<?php $x = 0; ?>
			@foreach($instructors as $i)
                 <?php $x++ ?>
				@if($x % 4 == 0)
					<div class="row">
				@endif
					<!-- item -->
					<div class="col-md-3" style="margin-bottom:20px">

						<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
							<div class="front">
								<div class="box1 box-default">
									<div class="box-icon-title">	
									  	@if($i->logo == '')								
											<img class="img-responsive" src="{{ asset('images/instructors/profile.png')}}" style="" alt="" />
										@else
											<img class="img-responsive" src="{{ asset('images/instructors/'.$i->logo)}}" alt="" />
										@endif
										<h2>{{ $i->first_name}} {{$i->last_name }}</h2>			
										<small>{{ $i->city }}, {{ $i->state }}</small>								
									</div>
								</div>						
							</div>

							<div class="back">
								<div class="box2 box-primary">			
									<p class="text text-left small">
										<i class="fa fa-quote-left"></i>
											{{ $i->quote }}
										<i class="fa fa-quote-right"></i>
										<br/>
										</p>
							
									<a href="#" data-toggle="modal" data-target="{{'#mod'.$i->last_name}}" class="btn btn-translucid btn-lg btn-block">READ MORE</a>
									<a href="{{ 'http://www.usaracquetballevents.com/profile-player.asp?UID='. $i->usar_id }}" target="usar" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>

									<div class="social">
										{{-- <a href="{{ 'http://m.me/' . $i->facebook}}" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a> --}}
									
										<a href="{{ route('contact',array('to' => $i->first_name . ' '. $i->last_name))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
										{{-- <a href="#" class="social-icon social-icon-sm social-google">
											<i class="fa fa-phone"></i>
											<i class="fa fa-phone"></i>
										</a> --}}
									</div>
								</div>
							</div>
						</div>

						<!-- Read More Modal -->
						<div id="{{'mod'.$i->last_name}}"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="modLabel">{{ $i->first_name }} {{$i->last_name}} - Certified Instructor</h4>
									</div>

									<!-- Modal Body -->
									<div class="modal-body">
										<p>{{ $i->blurb }}</p>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<!-- /item -->
					@if($x % 4 == 0)
						</div>
					@endif
				@endforeach			
			
			</div>
		</div>
	</section>
	<!-- / -->
@stop