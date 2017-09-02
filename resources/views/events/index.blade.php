@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">
		<h3><span>{{ $type }}</span> Events</h3>

		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="{{ route('events.index', array('type' => 'live'))}} ">Live</a></li>
			<li><a href="{{ route('events.index', array('type' => 'future'))}} ">Future</a></li>
			<li><a href="{{ route('events.index', array('type' => 'recent'))}} ">Recent</a></li>
			<li><a href="{{ route('events.index', array('type' => 'past'))}} ">Past</a></li>
		</ol><!-- /breadcrumbs -->
	</div>
</section>
<!-- /PAGE HEADER -->

<section>
	<div class="container">		
		@if($tournaments->count() == 0)
			<h5 class="text-muted text-center">There currently are no {{$type}} Events</h5>
		@endif
				<!-- Pager TOP -->
				<div class="text-center">
					{{$tournaments->links()}}
				</div>
				<!-- /Pager TOP -->
				<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-3">

							@foreach($tournaments as $t)
							<!-- item -->								
							<div class="portfolio-item">
								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">
												
												<!-- lightbox -->
												{{-- <a class="ico-rounded lightbox" href={{ asset("images/tournaments/logos/$t->logo") }} data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a> --}}
												{{-- <a class="ico-rounded lightbox" 
												href="{{route('events.show', array('id' => $t->id))}}" data-plugin-options='{"type":"html"}'>
													<span class="fa fa-plus size-20"></span>
												</a> --}}

												<!-- details -->
												<a class="ico-rounded" href="{{ $t->url }}" target="tournament">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>
												<!-- TODO Custom tournament Page 
												<a class="ico-rounded" href="{{ route('events.show', array('id' => $t->id)) }}">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>
												-->

											</span>
										</span>

										{{-- <img class="img-responsive" src={{"http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/$t->logo" }} width="200" alt=""> --}}
										<img class="img-responsive" src="{{$t->logo }}" width="200" alt="">
										
									</figure>

									<!-- div info -->
									<div class="item-box-desc">
										<h4 class="text-center"><a href="{{ $t->url }}" target="tournament"> {{ $t->name }}</a></h4>
										<div class="text text-center">
											<span class="text-info">
												{{$t->start}} - {{$t->end}}
											</span>
											<br/>
											<span>
												@if( $t->club()->lat > 0)
													<a href="{{ 'https://www.google.com/maps?q=' . $t->club()->lat .','. $t->club()->lng }}" target="map">
														<i class="fa fa-map-marker text-danger"></i> {{$t->club()->name }}</a><br/>
														{{$t->club()->city }}, {{$t->club()->state }}		
												@else
													 {{$t->club()->name }}<br/>  
													 {{$t->club()->city }}, {{$t->club()->state }}
												@endif
											</span>
										</div>
									</div>
								</div>

							</div><!-- /item -->
							@endforeach
						</div>

</section>
<section class="page-header page-header-xs">
	<div class="container text-center">
		<ul class="pagination pagination-lg pagination-simple">
		{{$tournaments->links()}}
		<!-- Pagination Default -->				
		</ul>
		<!-- /Pagination Default -->

	</div>
</section>
@stop