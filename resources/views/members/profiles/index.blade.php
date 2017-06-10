@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
		<section class="page-header page-header-xs">
				<div class="container">

					<h1>TXRA MEMBERS</h1>

					<!-- breadcrumbs -->
					<!--ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Profiles</a></li>
						<li class="active">Full Container Layout</li>
					</ol><!-- /breadcrumbs -->

					<!-- page tabs -->
					<ul class="page-header-tabs list-inline mix-filter">
						<li data-filter="all" class="filter active"><a href="#">All Players</a></li>
						<li data-filter="maile" class="filter"><a href="#">Male Players</a></li>
						<li data-filter="female" class="filter"><a href="#">Female Players</a></li>
						<li data-filter="instructors" class="filter"><a href="#">Instructors</a></li>
					</ul><!-- /page tabs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">

				<!-- Portfolio Items -->
				<div id="portfolio" class="portfolio-nogutter">

					<div class="row mix-grid">
						<!-- item -->
						<div class="col-md-3 col-sm-3 mix female">
							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Julienne Arnold</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/192412/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 192412)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/192412/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Hometown: Carrollton, TX</h4>
											<h4>Skill: Elite</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Texas Rank: #3</h4>
											<h4>National Rank: #79</h4>
											<h4>TX Doubles Rank: #25</h4>
											<h4>TX Mixed Doubles Rank: #15</h4>
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>

						</div>
						<!-- /item -->
											<!-- item -->
						<div class="col-md-3 col-sm-3 mix female">

							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Jane Doe</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/1/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/1/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Hometown: Carrollton, TX</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Singles Rank: #3</h4>
											<h4>Doubles Rank: #25</h4>
											<h4>Mixed Doubles Rank: #15</h4>
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>

						</div>
						<!-- /item -->						
					</div>


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

					<!-- Pagination Default -->
					<ul class="pagination pagination-lg pagination-simple">
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
			</section>
			<!-- /PAGE HEADER -->

@stop
