@extends('layouts.app')
@section('style')
@stop
@section('content')		

	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-bullhorn"></i> RANKINGS</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Members</a></li>
				<li class="active">Rankings</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section class="dark1">
		<div class="container">
			<div id="portfolio" class="portfolio-gutter">
				<ul class="nav nav-pills mix-filter margin-bottom-10">
					<li data-filter="all" class="filter"><a href="#">All</a></li>
					<li data-filter="singles" class="filter"><a href="#">Singles</a></li>
					<li data-filter="doubles" class="filter"><a href="#">Doubles</a></li>
					<li data-filter="mixed" class="filter"><a href="#">Mixed Doubles</a></li>
					<li data-filter="TX" class="filter"><a href="#">TX</a></li>
					<li data-filter="national" class="filter"><a href="#">National</a></li>
					<li data-filter="men" class="filter"><a href="#">Men</a></li>
					<li data-filter="women" class="filter"><a href="#">Women</a></li>
				</ul>

				<div class="row mix-grid">


					@foreach($ranks as $rank)
					<div class="col-md-3 col-sm-3 mix {{$rank->filter}}"><!-- item -->	
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">{{$rank->title}}</h2>									
						</div><!-- /title -->	
						<!--Random player -->
						<div class="item-box" >
							<figure>								
								<span class="item-hover">
									<span class="overlay dark-5"></span>
									<span class="inner">
										<!-- lightbox -->
										{{-- <a class="ico-rounded lightbox" href="{{'http://www.r2sports.com/tourney/imageGallery/gallery/player/'.$rank->featured->avatar}}" data-plugin-options='{"type":"image"}'>
											<span class="fa fa-plus size-20"></span>
										</a> --}}

										<!-- details -->

										@if ($rank->featured->user_id == 0)
											<a class="ico-rounded" href="{{ 'http://www.usaracquetballevents.com/profile-player.asp?UID='. $rank->featured->usar_id }}" target="usar_profile">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>
										@else
											<a class="ico-rounded" href="{{ route('members.show', $rank->featured->user_id) }}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>
										@endif
									</span>
								</span>
								<!-- overlay title -->
								 <div class="item-box-overlay-title">
									<h3><sup>#</sup>{{$rank->featured->rank}} {{$rank->featured->first_name}} {{$rank->featured->last_name}}</h3>									
								</div><!-- /overlay title -->
						
								@if($rank->featured->avatar!=0)
									<img class="img-responsive" src="{{'http://www.r2sports.com/tourney/imageGallery/gallery/player/'.$rank->featured->avatar}}" width="600" height="399" alt="">
								@else
									<img class="thumbnail pull-left" style="margin-right:5px" src="{{ asset('images/avatar2.jpg')}}" width="600" height="399" alt=""/>
								@endif
							</figure>
							<!-- /Random player -->

							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" >
									
									<h4 class="text-primary text-center">Top 10 
										<smaller class="h6"><a href="{{$rank->url}}" target="rankings" title="View All Ranks"><i class="fa fa-eye"></i></a></smaller>
									</h4>
									<hr/> 

									@foreach($rank as $r)
									<!-- post item -->
									<div class="clearfix margin-bottom-10">
									    @if($r->usar()->first()->avatar !=0)
											<img class="thumbnail pull-left" style="margin-right:5px" src="{{ 'http://www.r2sports.com/tourney/imageGallery/gallery/player/'.$r->usar()->first()->avatar}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										@else
											<img class="thumbnail pull-left" style="margin-right:5px" src="{{ asset('images/avatar2.jpg')}}" width="60" height="60" alt=""/>
										@endif
										<h3 class="size-13 nomargin noborder nopadding">

										@if ($r->user()->count() == 0 )
											<a href="{{ 'http://www.usaracquetballevents.com/profile-player.asp?UID='. $r->usar_id }}" target="usar_profile">
										@else
											<a href="{{ route('members.show',1)}}">
										@endif
										<sup>#</sup>{{$r->rank}} <smaller>{{$r->usar()->first()->full_name}}</smaller>										
										</a>


										</h3>
										<span class="size-11 text-muted">{{$r->usar()->first()->city}}, {{$r->usar()->first()->state }}</span>
									</div>
									<!-- /post item -->
									@endforeach

								</div>

							</div>
						</div>
					</div><!-- /item -->

					@endforeach	
				</div>
			</div>
		</div>
	</section>
	
@stop

@section('script')
<script>
</script>

@stop