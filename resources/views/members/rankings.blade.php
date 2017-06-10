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
	<section class="dark">
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
					<!-- Singles -->
					<div class="col-md-3 col-sm-3 mix TX singles men"><!-- item -->	
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Men's Singles</h2>									
						</div><!-- /title -->	
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
					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" >
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->								
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national singles men"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Men's Singles</h2>									
						</div><!-- /title -->		
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

					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix TX singles women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Women's Singles</h2>									
						</div><!-- /title -->	
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

							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national singles women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Women's Singles</h2>									
						</div><!-- /title -->	
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
				
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->
					<!-- /Singles>

					<!-- Doubles -->
					<div class="col-md-3 col-sm-3 mix TX doubles men"><!-- item -->	
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Men's Doubles</h2>									
						</div><!-- /title -->	
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
					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national doubles men"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Men's Doubles</h2>									
						</div><!-- /title -->		
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

					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix TX doubles women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Women's Doubles</h2>									
						</div><!-- /title -->	
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

							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national doubles women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Women's Doubles</h2>									
						</div><!-- /title -->	
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
				
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->

					<!-- /Doubles -->

					<!-- Mixed -->
					<div class="col-md-3 col-sm-3 mix TX mixed men"><!-- item -->	
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Men's Mixed Doubles</h2>									
						</div><!-- /title -->	
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
					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national mixed men"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Men's Mixed Doubles</h2>									
						</div><!-- /title -->		
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

					
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix TX mixed women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">TX Women's Mixed Doubles</h2>									
						</div><!-- /title -->	
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

							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>
						</div>
					</div><!-- /item -->

					<div class="col-md-3 col-sm-3 mix national mixed women"><!-- item -->
						<!-- title -->
						<div class="">
							<h2 class="text-center margin-bottom-10">Nat. Women's Mixed Doubles</h2>									
						</div><!-- /title -->	
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
				
							<div class="item-box-desc">
								<div class="height-250 " data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4">
										
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/8220/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>1 <smaller>Kane Waselenchuk</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/12298/profile.png')}}" width="60" height="60" alt="" />
										<h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>2 Alejandro Landa</a></h4>
										<span class="size-11 text-muted">El Paso, TX</span>
									</div><!-- /post item -->
									<div class="clearfix margin-bottom-10"><!-- post item -->
										<img class="thumbnail pull-left" src="{{ asset('images/members/169/profile.png')}}" data-plugin-options='{"type":"image"}' width="60" height="60" alt="" />
										<h3 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html"><sup>#</sup>3 <smaller>Jansen Allen</smaller></a></h3>
										<span class="size-11 text-muted">Austin, TX</span>
									</div><!-- /post item -->
								</div>

							</div>

						</div>
					</div><!-- /item -->
					<!-- /Mixed -->
				</div>
			</div>
		</div>
	</section>
	
@stop

@section('script')
<script>
</script>

@stop