@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">		
		<div class="container">
			<h1>TXRA MEMBERS</h1>					
		</div>
	</section>
	<!-- /PAGE HEADER -->
	<div class="container">	    
		<ul id="portfolio_filter" class="nav nav-pills margin-top-10  margin-bottom-10">
			<li data-filter="all" class="filter active"><a href="#">All</a></li>
			<li data-filter="male" class="filter"><a href="#">Male</a></li>
			<li data-filter="female" class="filter"><a href="#">Female</a></li>
			<li data-filter="junior" class="filter"><a href="#">Juniors</a></li>
			<li data-filter="pro" class="filter"><a href="#">Pros</a></li>
			
			<div class="input-group col-md-4">
				<input type="text" placeholder="Search" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>	
		</ul>
	</div>

			<!-- -->
			<section>
				<div class="container">

				<!-- Portfolio Items -->
				<div id="portfolio" class="portfolio-nogutter">

					<div class="row mix-grid">

						<!-- item -->
						<div class="col-md-3 col-sm-3 mix male pro">

							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Jansen Allen</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/169/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Skill: PRO</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Singles Rank: </h4>
											<h4>Doubles Rank: </h4>
											<h4>Mixed Doubles Rank: </h4>
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
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
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
						<div class="col-md-3 col-sm-3 mix female junior">
							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Shane Diaz</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/6/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/6/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Hometown: </h4>
											<h4>Skill: Junior</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Texas Rank: </h4>
											<h4>National Rank: </h4>
											<h4>TX Doubles Rank: </h4>
											<h4>TX Mixed Doubles Rank: </h4>
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-3 mix male" >
							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Richard Eisemann</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/4/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/4/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Hometown: </h4>
											<h4>Skill: Open</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Texas Rank: </h4>
											<h4>National Rank: </h4>
											<h4>TX Doubles Rank: </h4>
											<h4>TX Mixed Doubles Rank: </h4>
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-3 mix female pro">

							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Adriana Riveros</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/3/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/3/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Skill: PRO</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Singles Rank: </h4>
											<h4>Doubles Rank: </h4>
											<h4>Mixed Doubles Rank: </h4>
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>

						</div>
						<!-- /item -->	

						<!-- item -->
						<div class="col-md-3 col-sm-3 mix male junior">
							<div class="item-box">
								<div class="item-box-desc">
									<h3 class="text-center">Brady Yelverton</h3>
								</div>
								<figure>
									<span class="item-hover">
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="{{ asset('images/members/5/profile.png')}}" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('members.show', 1)}}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="{{ asset('images/members/5/profile.png')}}" width="600" height="399" alt="">
										</div>
										<div style="padding-top:40px">
											<h4>Hometown: </h4>
											<h4>Skill: Junior</h4>
										</div>
										<div style="padding-top:40px">
											<h4>Texas Rank: </h4>
											<h4>National Rank: </h4>
											<h4>TX Doubles Rank: </h4>
											<h4>TX Mixed Doubles Rank: </h4>
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
