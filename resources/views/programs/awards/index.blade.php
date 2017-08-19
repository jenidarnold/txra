@extends('layouts.app')
@section('style')
    <style type="text/css">
    
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-trophy"></i> ANNUAL AWARDS GALLERY</h1>

			<!-- breadcrumbs
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Awards</a></li>
				<li class="active">Gallery</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

<!-- -->
	<section>
		<div class="container">
			<!-- Mobile Menu Button -->
			<button class="btn btn-mobile hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".nav-filter-collapse">
				<i class="fa fa-bars"> Filter</i>
			</button>

			<div class="collapse navbar-collapse nav-filter-collapse">				
				<ul id="portfolio_filter" class="nav nav-pills margin-bottom-0">
					<li class="filter active"><a data-filter="*" href="#">All</a></li>
					<li class="filter"><a data-filter=".2017" href="#">2017</a></li>
					<li class="filter"><a data-filter=".2015" href="#">2015</a></li>
					<li class="filter"><a data-filter=".2015" href="#">2015</a></li>
					<li class="filter"><a data-filter=".2014" href="#">2014</a></li>
				</ul>
				<ul id="portfolio_filter" class="nav nav-pills nav-filter-collapse margin-bottom-60">
					<li class="filter"><a data-filter=".sportsmanship" href="#">A.G. Sportsmanship</a></li>
					<li class="filter"><a data-filter=".contributor" href="#">Outstanding Contributor</a></li>
					<li class="filter"><a data-filter=".male" href="#">Male Athlete</a></li>
					<li class="filter"><a data-filter=".female" href="#">Female Athlete</a></li>
					<li class="filter"><a data-filter=".jrmale13-18" href="#">Jr. Male Athlete (13-18)</a></li>
					<li class="filter"><a data-filter=".jrfemale13-18" href="#">Jr. Female Athlete (13-18)</a></li>
					<li class="filter"><a data-filter=".jrmaleunder13" href="#">Jr. Male Athlete (Under 13)</a></li>
					<li class="filter"><a data-filter=".jrfemaleunder13" href="#">Jr. Female Athlete (Under 13)</a></li>
				</ul>
			</div>	
		</div>
		<div class="container">

			<!--
				fullwidth - required for full width portfolio
			-->
			<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-4">
				
				<!-- 2017 -->
				<div class="portfolio-item 2017 contributor"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/bob_sullins.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/bob_sullins.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Bob Sullins</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Outstanding Contributor</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 sportsmanship"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/ross_smith.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/ross_smith.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Ross Smith</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Ann Gibbons Sportsmanship</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="portfolio-item 2017 male"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/richard_eisemann.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/richard_eisemann.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Richard (Ice) Eisemann</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Male Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 female"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/julienne_arnold.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/julienne_arnold.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Julienne Arnold</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Female Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrmale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/brady_yelverton.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/brady_yelverton.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Brady Yelverton</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Male Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrfemale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/shane_diaz.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/shane_diaz.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Shane Diaz</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Female Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrmaleunder13"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/gael_trejo.jpeg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/gael_trejo.jpeg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Gael Trejo</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Male Junior Athlete (Under 13)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2017 jrfemaleunder13"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/leah_trejo.jpeg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2017/leah_trejo.jpeg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Leah Trejo</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2017 Female Junior Athlete (Under 13)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

			<!-- /2017 -->


			<!-- 2016 -->

			<div class="portfolio-item 2016 contributor"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/johnny_boyd.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/johnny_boyd.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Johnny_Boyd</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Outstanding Contributor</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2016 sportsmanship"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2017/chase_robison.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/chase_robison.png')}}" width="300" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Chase Robison</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Ann Gibbons Sportsmanship</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="portfolio-item 2016 male"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2016/jansen_allen.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/jansen_allen.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Jansen Allen</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Male Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2016 female"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2016/brittany_click.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/brittany_click.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Brittany Click</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Female Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2016 jrmale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2016/david_marsden.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/david_marsden.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>David Marsden</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Co-Male Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->
				<div class="portfolio-item 2016 jrmale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2016/aidan_weller.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/aidan_weller.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Aidan Weller</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Co-Male Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2016 jrfemale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2016/daniela_torres.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2016/daniela_torres.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Daniela Torres</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2016 Female Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->
				<div class="portfolio-item 2016"><!-- item -->

					<div class="item-box">
						<div class="item-box-desc">							
						</div>
					</div>
				</div><!-- /item -->
			<!-- /2016 -->


			<!-- 2015 -->
			<div class="portfolio-item 2015 contributor"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/sandy_long.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/sandy_long.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Sandy Long</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Outstanding Contributor</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2015 sportsmanship"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/unknown.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/unknown.png')}}" width="300" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Unknown</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Ann Gibbons Sportsmanship</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="portfolio-item 2015 male"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/patric.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/patric.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Patric M</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Male Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2015 female"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/dragona.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/dragona.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Dragona B</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Female Athlete</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->

				<div class="portfolio-item 2015 jrmale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/caiden_akins.jpg')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/caiden_akins.jpg')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Caiden Akins</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Male Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->
				
				<div class="portfolio-item 2015 jrfemale13-18"><!-- item -->

					<div class="item-box">
						<figure>
							<span class="item-hover">
								<span class="overlay dark-5"></span>
								<span class="inner">

									<!-- lightbox -->
									<a class="ico-rounded lightbox" href="{{ asset('images/awards/2015/korina.png')}}" data-plugin-options='{"type":"image"}'>
										<span class="fa fa-plus size-20"></span>
									</a>

									<!-- details -->
									<a class="ico-rounded" href="portfolio-single-slider.html">
										<span class="glyphicon glyphicon-option-horizontal size-20"></span>
									</a>

								</span>
							</span>

							<img class="img-responsive" src="{{ asset('images/awards/2015/korina.png')}}" width="600" height="399" alt="">
						</figure>

						<div class="item-box-desc">
							<h3>Korina</h3>
							<ul class="list-inline categories nomargin">
								<li><a href="#">2015 Female Junior Athlete (13-18)</a></li>
							</ul>
						</div>

					</div>

				</div><!-- /item -->
				<div class="portfolio-item 2015"><!-- item -->

					<div class="item-box">
						<div class="item-box-desc">							
						</div>
					</div>
				</div><!-- /item -->


			<!-- /2015 -->
			</div>
		</div>		
	</section>
	<!-- / -->


@stop
@section('script')
	<script>
		
	</script>
@stop