@extends('layouts.app')
@section('style')
    <style type="text/css">
    button.on {
	  color: white;
	  background-color: #ccc;
	}
	button {
	  height: 36px;
	  width: 40px;
	  margin-left: 4px;
	  font-size: 24px;
	  color: orange;
	  text-align: center;
	  line-height: 1.4;
	  border-radius: 4px;
	  border: none;
	  outline: none;
	  background-color: white;
	  box-shadow: 0px 1px 2px #bbb;
	}
	button:hover {
	  cursor: pointer;
	  box-shadow: 0px 0px 3px #666;
	}
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
				<!-- View Options -->
				<div class="hidden-xs text-left">
					{{-- <a href="#grid"><i id="gridview" class="fa fa-th fa-lg text-success text-default" onclick="toggleGridView(this)"></i></a> 
					<a href="#list"><i id="listview" class="fa fa-list fa-lg text-default" onclick="toggleListView(this)"></i></a> --}}
					<div class="buttons">
					  <button class="grid-view on"><i class="fa fa-th"></i></button>
					  <button class="list-view"><i class="fa fa-bars"></i></button>
					</div>
				</div>	
				<!--- /View Options-->


				<!-- Pager TOP -->
				<div class="text-center">
					{{$tournaments->links()}}
				</div>
				<!-- /Pager TOP -->

				<!-- Grid View -->
				<div id="portfolio_grid">
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
				</div>
				<!-- /Grid View -->

				<!-- List View -->
				<div class="container">
					<div id="portfolio_list" class="hide">						
						<div class="mix-grid">
							@foreach($tournaments as $t)

							<div class="row"><!-- item -->
								<div class="col-xs-3 col-sm-2"><!-- image -->
									<div class="item-box">
										<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">
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
										<img class="img-responsive" src="{{$t->logo }}" width="100" alt="">
										
									</figure>
									</div>
								</div><!-- /image -->
								<div class="col-xs-3 col-sm-10"><!-- description -->
									<!-- div info -->
										<div class="item-box-desc">
											<h4 class="text-left"><a href="{{ $t->url }}" target="tournament"> {{ $t->name }}</a></h4>
											<div class="text text-left">
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
							</div>
							<hr/>
							@endforeach
						</div>
					</div>
				</div>	
				<!-- /List View -->

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

@section('script')
	<script>

		// function toggleGridView(x) {
		//     x.classList.toggle("text-success");
		//     $('#portfolio_grid').toggleClass("hide");

		//     $('#portfolio_list').toggleClass("hide");
		//     $('#portfolio_list').toggleClass("text-success");    
		// }

		// function toggleListView(x) {
		//     x.classList.toggle("text-success");
		//     $('#portfolio_list').toggleClass("hide");

		//     $('#portfolio_grid').toggleClass("hide");
		//     $('#portfolio_grid').toggleClass("text-success");
		// }
		// 
		
		listButton = $('button.list-view');
		gridButton = $('button.grid-view');

		listButton.on('click',function(){
		  gridButton.removeClass('on');
		  listButton.addClass('on');
		  $('#portfolio_grid').addClass('hide');
		  $('#portfolio_list').removeClass('hide');
		  
		});

		gridButton.on('click',function(){
		  listButton.removeClass('on');
		  gridButton.addClass('on');
		  $('#portfolio_grid').removeClass('hide');
		  $('#portfolio_list').addClass('hide');
		  
		});

	</script>
@stop