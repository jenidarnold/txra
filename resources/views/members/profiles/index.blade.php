@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">		
		<div class="container">
			<h1><i class="fa fa-user-circle"></i> MEMBERS</h1>			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a class="active">Profiles</a></li>
				<li><a href="{{route('members.rankings')}}" >Rankings</a></li>
				<li><a href="{{route('members.membership')}}">Memberships</a></li>
			</ol><!-- /breadcrumbs -->		
		</div>
	</section>
	<!-- /PAGE HEADER -->
	<!-- -->
	<section>
		<div class="container">
			<p class="text-primary col-xs-12">Members listed below have an account with <b>TXRA.org</b>. Don't have an account? <a href="/register">Register here</a>
			</p>
			<button class="btn btn-mobile hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".nav-filter-collapse">
				<i class="fa fa-bars"></i> Filter
			</button>

			<div class="collapse navbar-collapse nav-filter-collapse">
				<ul id="portfolio_filterX" class="nav nav-pills margin-bottom-20">
					<li class="{{ $active['all']}}"><a href="{{route('members.listing')}}">All</a></li>
					<li class="{{ $active['female']}}"><a href="{{route('members.search', ['gender' => 'female'])}}">Female</a></li>
					<li class="{{ $active['male']}}"><a href="{{route('members.search', ['gender' => 'male'])}}">Male</a></li>
					<li class="{{ $active['pro']}}"><a href="{{route('members.search', ['skill' => 'pro'])}}">Pro</a></li>
					<li class="{{ $active['open']}}"><a href="{{route('members.search', ['skill' => 'open'])}}">Open</a></li>
					<li class="{{ $active['elite']}}"><a href="{{route('members.search', ['skill' => 'elite'])}}">Elite</a></li>
					<li class="{{ $active['a']}}"><a href="{{route('members.search', ['skill' => 'a'])}}">A</a></li>
					<li class="{{ $active['b']}}"><a href="{{route('members.search', ['skill' => 'b'])}}">B</a></li>
					<li class="{{ $active['c']}}"><a href="{{route('members.search', ['skill' => 'c'])}}">C</a></li>
					<li class="{{ $active['d']}}"><a href="{{route('members.search', ['skill' => 'd'])}}">D</a></li>
					<li class="{{ $active['junior']}}"><a href="{{route('members.search', ['skill' => 'junior'])}}">Junior</a></li>
					<li class="{{ $active['novice']}}"><a href="{{route('members.search', ['skill' => 'novice'])}}">Novice</a></li>
				</ul>
			</div>


			{{-- <div class="collapse navbar-collapse nav-filter-collapse">
				<ul id="portfolio_filter" class="nav nav-pills margin-bottom-20">
					<li class="filter active"><a data-filter="*" href="#">All</a></li>
					<li class="filter1"><a href="{{route('members.search', ['gender' => 'female'])}}">Female</a></li>
					<li class="filter"><a data-filter=".male" href="#">Male</a></li>
					<li class="filter"><a data-filter=".pro" href="#">Pro</a></li>
					<li class="filter"><a data-filter=".open" href="#">Open</a></li>
					<li class="filter"><a data-filter=".elite" href="#">Elite</a></li>
					<li class="filter"><a data-filter=".a" href="#">A</a></li>
					<li class="filter"><a data-filter=".b" href="#">B</a></li>
					<li class="filter"><a data-filter=".c" href="#">C</a></li>
					<li class="filter"><a data-filter=".d" href="#">D</a></li>
					<li class="filter"><a data-filter=".junior" href="#">Junior</a></li>
					<li class="filter"><a data-filter=".novice" href="#">Novice</a></li>
				</ul>
			</div> --}}

			<form method="GET" action="{{route('members.search')}}">	
				<div class="row">
					<div class="col-md-4 col-sm-6">		
						<div class="input-group">
							<input type="text" name="name" value="{{$name}}" placeholder="Search by Name" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">		
						<div class="input-group ">
							<input type="text" name="city" value="{{$city}}" placeholder="Search by Hometown" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
					<div class="col-md-1 col-sm-1 col-xs-2">	
					<a  href="{{route('members.listing')}}" class="btn btn-default" type="button">Reset</a>
					</div>
				</div>
			</form>
		
			@if(isset($search_results))
				<h4>{{ $search_results}}</h4>
			@endif
		<!-- Portfolio Items -->
			<div id="portfolio" class="clearfix fullwidth portfolio-gutter portfolio-isotope portfolio-isotope-5">
		{{-- 	<div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-4"> --}}

				@foreach($members as $m)
				<!-- item -->					
				<div class="portfolio-item has-title  {{$m->profile['gender']}} {{$m->profile['skill']}} ">

					<div class="item-box">
						<div class="item-box-desc">							
						</div>
						<figure>
							<span class="item-hover">

								<span class="overlay dark-5"></span>
								<span class="inner">
									<!-- lightbox -->

									<a class="ico-rounded lightbox" href="{{ asset('images/members/'.$m->id.'/profile.png')  }}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="{{ route('members.show', $m->id)}}">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>
								</span>
							
							</span>

							<!-- overlay title -->
							<div class="item-box-overlay-title">
								<h3 class="text-center">{{$m->full_name}}</h3>
								 {{$m->profile['city']}}<br/>								
							</div>
							<!-- /overlay title -->

							<img class="img-responsive" src="{{ asset('images/members/'.$m->id.'/profile.png')}}" width="600" height="399" alt="">
						</figure>
					</div>

				</div>
				<!-- /item -->	
			@endforeach
			</div>
	<!-- /Portfolio Items -->

		</div>
	</section>
	<!-- / -->
	<!-- 
			PAGE FOOTER - THE SAME AS PAGE HEADER 
			
			CLASSES:
				.page-header-xs	= 20px margins
				.page-header-md	= 50px margins
				.page-header-lg	= 80px margins
				.page-header-xlg= 130px margins
				.dark			= dark page header

				.shadow-before-1 	= shadow 1 header top
				.shadow-after-1 	= shadow 1 header bottom
				.shadow-before-2 	= shadow 2 header top
				.shadow-after-2 	= shadow 2 header bottom
				.shadow-before-3 	= shadow 3 header top
				.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header page-header-xs">
				<div class="container text-center">
					<ul class="pagination pagination-lg pagination-simple">
					{{$members->links()}}
					<!-- Pagination Default -->				
					</ul>
					<!-- /Pagination Default -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

@stop
