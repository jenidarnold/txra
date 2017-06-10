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
			<li><a href="{{ route('members.listing')}} ">Members</a></li>
			<li class="active">Julienne Arnold</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->


<!-- -->
<section>
	<div class="container">	    
		<ul id="portfolio_filter" class="nav nav-pills margin-bottom-60">
			<li class="filter active"><a data-filter="*" href="#">Public</a></li>
			<li class="filter"><a data-filter=".development" href="#">My Gallery</a></li>
			<li class="filter"><a data-filter=".photography" href="#">Just Me</a></li>
		<!-- input name, return images of those members tagged; search button 
		   image items contain member name for filter
		   not sure how images stored. member uploads to their gallery
		  -->
		<div class="input-group col-md-4">
			<input type="text" placeholder="Search" class="form-control">
			<span class="input-group-btn">
				<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
			</span>
		</div>
		<div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-6">

			<div class="portfolio-item julienne arnold"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>

							</span>
						</span>
						<img class="img-responsive" src="assets/images/demo/720x400/20-min.jpg" width="600" height="399" alt="">
					</figure>
				</div>

			</div><!-- /item -->

		</div>
		
	</div>
</section>
<!-- / -->

@stop