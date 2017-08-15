@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">
		<h3><span>{{ $type }}</span> Events</h3>
		<!--p class="font-lato size-14">Lorem ipsum dolor sit amet.</p-->
	</div>
</section>
<!-- /PAGE HEADER -->

<section>
	<div class="container">
		

{{-- 						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="development" class="filter"><a href="#">Development</a></li>
							<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
							<li data-filter="design" class="filter"><a href="#">Design</a></li>
						</ul> --}}


				<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-4">

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
										<h4>{{ $t->name }}</h4>
										<h6>{{$t->start_date}} - {{$t->end_date}}</li></h6>
										<h6>{{$t->location}}</h6>
										{{-- <h6><a href="{{ $t->url}}" target="tournament"><img height="18px" src="{{asset('images/logos/r2sports.gif')}}"> Official Touranment Site</a></h6> --}}
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