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

			<div class="col-md-4 col-sm-4 mix men-a"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>

							</span>
						</span>

						<div class="table-responsive">
							<table class="table table-bordered">														
								<tbody>
									<tr>
										<td>
											Keith Kaui
											<br/>
											<h6>San Diego, CA</h6>
										</td>
										<td class="text-success">15</td>
										<td class="text-success">15</td>
									</tr>
									<tr>
										<td>
											Tim Mattfeldt
										    <br/>
										    <h6>Glendale, AZ</h6>
										</td>
										<td>9</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>

					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-4 col-sm-4 mix development"><!-- item -->

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
							
						<div class="table-responsive">
							<table class="table table-bordered">														
								<tbody>
									<tr>
										<td>
											Keith Kaui
											<br/>
											<h6>San Diego, CA</h6>
										</td>
										<td class="text-success">15</td>
										<td class="text-success">15</td>
									</tr>
									<tr>
										<td>
											Tim Mattfeldt
										    <br/>
										    <h6>Glendale, AZ</h6>
										</td>
										<td>9</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-4 col-sm-4 mix photography"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>

							</span>
						</span>
							
						<div class="table-responsive">
							<table class="table table-bordered">														
								<tbody>
									<tr>
										<td>
											Keith Kaui
											<br/>
											<h6>San Diego, CA</h6>
										</td>
										<td class="text-success">15</td>
										<td class="text-success">15</td>
									</tr>
									<tr>
										<td>
											Tim Mattfeldt
										    <br/>
										    <h6>Glendale, AZ</h6>
										</td>
										<td>9</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-4 col-sm-4 mix design"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>

							</span>
						</span>
							
						<div class="table-responsive">
							<table class="table table-bordered">														
								<tbody>
									<tr>
										<td>
											Keith Kaui
											<br/>
											<h6>San Diego, CA</h6>
										</td>
										<td class="text-success">15</td>
										<td class="text-success">15</td>
									</tr>
									<tr>
										<td>
											Tim Mattfeldt
										    <br/>
										    <h6>Glendale, AZ</h6>
										</td>
										<td>9</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</figure>
				</div>

			</div><!-- /item -->


			<div class="col-md-4 col-sm-4 mix design"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- lightbox -->
								<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
									<span class="fa fa-plus size-20"></span>
								</a>

								<!-- details -->
								<a class="ico-rounded" href="portfolio-single-slider.html">
									<span class="glyphicon glyphicon-option-horizontal size-20"></span>
								</a>

							</span>
						</span>
							
						<div class="table-responsive">
							<table class="table table-bordered">														
								<tbody>
									<tr>
										<td>
											Keith Kaui
											<br/>
											<h6>San Diego, CA</h6>
										</td>
										<td class="text-success">15</td>
										<td class="text-success">15</td>
									</tr>
									<tr>
										<td>
											Tim Mattfeldt
										    <br/>
										    <h6>Glendale, AZ</h6>
										</td>
										<td>9</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>
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