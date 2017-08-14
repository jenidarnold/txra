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
			<li><a href="#">EVENTS</a></li>
			<li class="active">LIVE</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<section>
	<div class="container">
		<div class="heading-title heading-border">
			<h3><span>{{ $type }}</span> Events</h3>
			<!--p class="font-lato size-14">Lorem ipsum dolor sit amet.</p-->
		</div>
					<div id="portfolio" class="portfolio-gutter">

{{-- 						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="development" class="filter"><a href="#">Development</a></li>
							<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
							<li data-filter="design" class="filter"><a href="#">Design</a></li>
						</ul> --}}


						<div class="row mix-grid">
							@foreach($tournaments as $t)
							<!-- item -->								
							<div class="col-md-3 col-sm-4 mix design">
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
												<a class="ico-rounded" href="{{ route('events.show', array('id' => $t->id)) }}">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>

										<img class="img-responsive" src={{"http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/$t->logo" }} width="200" alt="">

										{{-- <!-- carousel -->
										<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/8-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
											</div>
										</div>
										<!-- /carousel --> --}}

									</figure>

									<!-- div info -->
									<div class="item-box-desc">
										<h3>{{ $t->name }}</h3>
										<ul class="nomargin" style="list-style: none;">
											<li>{{$t->start_date}} - {{$t->end_date}}</li>
											<li>{{$t->location}}</li>
											<li>
												<a href="{{ $t->url}}" target="tournament">Official Tournament Site</a>
											</li>
										</ul>
									</div>
								</div>

							</div><!-- /item -->
							@endforeach
						</div>

</section>
{{-- <section>
	<!-- EVENT SLIDER-->
	@include('includes.eventslider', array('event_type' => $type) )    	
	<!-- /EVENT SLIDER -->
</section>
 --}}

@stop