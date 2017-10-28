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

			<h1><img src="{{asset('images/icons/whistle.png')}}" height="40px"></i> CERTIFIED REFEREES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Referees</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">
			
			<p class="lead">The following TXRA members have completed <a href="{{ route('referee.index')}}">LEVEL 1 & 2 REFEREE CERTIFICATION</a>. 
			{{-- Click on the referees's photo for an introduction and contact information.</a> </p> --}}
			<hr/>

			<?php $x = 0; ?>
			@foreach($referees as $i)
                 <?php $x++ ?>
				@if($x % 3 == 0)
					<div class="row">
				@endif
					<!-- item -->
					<div class="col-md-4" style="margin-bottom:20px">

						<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
							<div class="front">
								<div class="box1 box-default">
									<div class="box-icon-title">	
									  	@if($i->logo == '')								
											<img class="img-responsiveX" src="{{ asset('images/referees/profile.png')}}" style="height:200px" alt="" />
										@else
											<img class="img-responsiveX" src="{{ asset('images/referees/'.$i->logo)}}" style="height:200px" alt="" />
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
										<h4 class="modal-title" id="modLabel">{{ $i->first_name }} {{$i->last_name}} - {{$i->level}} Certified</h4>
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
					@if($x % 3 == 0)
						</div>
					@endif
				@endforeach			
			
			</div>
		</div>
	</section>
	<!-- / -->
@stop