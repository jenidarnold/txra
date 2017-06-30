@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1>COMMITTEES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/about/board">Board</a></li>
				<li class="active">Committees</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

			<p class="lead">TXRA functions because of participation by its members.
			<br/>Members like you!  Server on a standing committee. <a href="#signup">Sign up today</a>.</p>
			
			<div class="divider divider-center divider-color"><!-- divider -->
				<i class="fa fa-chevron-down"></i>
			</div>

			<!-- FEATURED BOXES 3 -->
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-trophy"></i>
						<h4>Awards Committee</h4>
						<p class="font-lato size-10">Develops and implements annual awards to inspire TXRA members to be better players, show sportsmanship and voluntarily help grow racquetball in Texas </p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-comments"></i>
						<h4>Communications Committee</h4>
						<p class="font-lato size-10">Develops and maintains on-line and off-line communication with Texas racquetball players, enthusiasts and supporters</p>
					</div>
				</div>	
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-usd"></i>
						<h4>Finance Committee</h4>
						<p class="font-lato size-10">Develops, implements, and maintains all finiancial records and reporting to TXRA membership and board.</p>
					</div>
				</div>	
			</div>

			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-book"></i>
						<h4>Governance Committee</h4>
						<p class="font-lato size-10">Develops and improves governance for TXRA Board and general membership </p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-line-chart"></i>
						<h4>Strategic Planning</h4>
						<p class="font-lato size-10">Develop and implement TXRA programs to further develop players, tournaments, and facilities in Texas</p>
					</div>
				</div>	

				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-child"></i>
						<h4>Youth and Collegiate Committee</h4>
						<p class="font-lato size-10">Develop and implement plans to grow and support youth and collegiate racquetball in Texas</p>
					</div>
				</div>
					
			</div>
					
				

			<!-- /FEATURED BOXES 3 -->

		</div>

		<div class="container">
				<div class="divider divider-center divider-color"><!-- divider -->
					<i class="fa fa-chevron-down"></i>
				</div>
				<a name="signup"></a>
				<div class="row">

					<!-- LOGIN -->
					<div class="col-md-12">
						
						<!-- register form -->
						<form class="nomargin sky-form boxed" action="#" method="post">
							<header>
								<i class="fa fa-users"></i> Sign Up to join the committee(s) you are interested in
							</header>

							<fieldset class="nomargin">	
								<div class="row margin-bottom-10">
									<div class="col-md-6">
										<label class="input">
											<input type="text" placeholder="First name">
										</label>
									</div>
									<div class="col col-md-6">
										<label class="input">
											<input type="text" placeholder="Last name">
										</label>
									</div>
								</div>

								<div class="row margin-bottom-10">
									<div class="col-md-6">
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-envelope"></i>
											<input type="text" placeholder="Email address">
											<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
										</label>								
									</div>
									<div class="col col-md-6">
										<label class="select margin-bottom-10">
											<select>
												<option value="0" selected disabled>Are you a current TXRA member?</option>
												<option value="1">Yes - I am a current TXRA member </option>
												<option value="2">No - I am not yet a TXRA member</option>
											</select>
											<i></i>
										</label>
									</div>
								</div>
								<div class="margin-top-10 control-group col-md-4">
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Awards</label>	
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Communications</label>
								</div>
								<div class="margin-top-10 control-group col-md-4">
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Finance</label>			
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Governance</label>
								</div>
								<div class="margin-top-10 control-group col-md-4">
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Strategic Planning</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Youth and Collegiate</label>					
								</div>
								
							</fieldset>

							<div class="row margin-bottom-20">
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
								</div>
							</div>

						</form>
						<!-- /register form -->

					</div>
					<!-- /LOGIN -->

				
				</div>

				
			</div>
		</section>
		<!-- / -->

@stop