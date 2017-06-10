@extends('layouts.event')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('event_content')

	<!-- Portfolio Filter -->
	<div class="text-center">
		<ul class="nav nav-pills mix-filter">
			<li data-filter="all" class="filter active"><a href="#">All</a></li>
			<li data-filter="men-a" class="filter"><a href="#">Men's A</a></li>
			<li data-filter="men-b" class="filter"><a href="#">Men's B</a></li>
			<li data-filter="women-a" class="filter"><a href="#">Women's A</a></li>
			<li data-filter="women-b" class="filter"><a href="#">Women's B</a></li>
		</ul>
	</div>
	<!-- /Portfolio Filter -->
	<div id="portfolio" class="portfolio-gutter">

		<div class="row mix-grid">

			<div class="col-md-3 col-sm-4 col-xs-1 mix men-a"><!-- item -->

				<div class="item-box" >
					<figure>								
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">
							
								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>
							</span>
						</span>
						<!-- overlay title -->
						<div class="item-box-overlay-title">
							<h3><sup>#</sup>1 Kane Waselenchuk</h3>									
						</div><!-- /overlay title -->
				
						<!--Random player -->
						<img class="img-responsive" src="{{ asset('images/members/8220/profile.png')}}" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-3 col-sm-4 col-xs-1 mix development"><!-- item -->

				<div class="item-box">
					<figure>								
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">
							
								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>
							</span>
						</span>
						<!-- overlay title -->
						<div class="item-box-overlay-title">
							<h3><sup>#</sup>1 Kane Waselenchuk</h3>									
						</div><!-- /overlay title -->
				
						<!--Random player -->
						<img class="img-responsive" src="{{ asset('images/members/8220/profile.png')}}" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-3 col-sm-4 col-xs-1 mix photography"><!-- item -->

				<div class="item-box">
					<figure>								
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">
							
								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>
							</span>
						</span>
						<!-- overlay title -->
						<div class="item-box-overlay-title">
							<h3><sup>#</sup>1 Kane Waselenchuk</h3>									
						</div><!-- /overlay title -->
				
						<!--Random player -->
						<img class="img-responsive" src="{{ asset('images/members/8220/profile.png')}}" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-3 col-sm-4 col-xs-1 mix design"><!-- item -->

				<div class="item-box">
					<figure>								
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">
							
								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>
							</span>
						</span>
						<!-- overlay title -->
						<div class="item-box-overlay-title">
							<h3><sup>#</sup>1 Kane Waselenchuk</h3>									
						</div><!-- /overlay title -->
				
						<!--Random player -->
						<img class="img-responsive" src="{{ asset('images/members/8220/profile.png')}}" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-3 col-sm-4 col-xs-1 mix design"><!-- item -->

				<div class="item-box">
					<figure>								
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">
							
								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>
							</span>
						</span>
						<!-- overlay title -->
						<div class="item-box-overlay-title">
							<h3><sup>#</sup>1 Kane Waselenchuk</h3>									
						</div><!-- /overlay title -->
				
						<!--Random player -->
						<img class="img-responsive" src="{{ asset('images/members/8220/profile.png')}}" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->


		</div>


		<div class="divider divider-dotted"><!-- divider --></div>


		<div class="text-right">

			<!-- Pagination Default -->
			<ul class="pagination pagination-simple">
				<li><a href="#">prev</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">next</a></li>
			</ul>
			<!-- /Pagination Default -->
		
		</div>

	</div>

@stop