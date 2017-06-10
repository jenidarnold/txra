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
				<li><a href="#">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li class="active">Committees</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

			<p class="lead">TXRA functions because of participation by its members. Members like you! Interested in serving on a standing committee? <a href="#signup">Sign up today</a>.</p>
			
			<div class="divider divider-center divider-color"><!-- divider -->
				<i class="fa fa-chevron-down"></i>
			</div>

			<!-- FEATURED BOXES 3 -->
			<div class="row">			
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-id-badge"></i>
						<h4>Membership Committee</h4>
						<p class="font-lato size-20">The committee develops new ideas to increase the number of TXRA members and to encourage enthusiastic participation </p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-child"></i>
						<h4>Juniors' Committee</h4>
						<p class="font-lato size-20"> Represents the younger section of the association’s membership.</p>
					</div>
				</div>

				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-female"></i>
						<h4>Women's Committee</h4>
						<p class="font-lato size-20">Represents the female section of the association’s membership. Its goal is to build a strong community of female members.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-line-chart"></i>
						<h4>Marketing Committee</h4>
						<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
					</div>
				</div>				
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-usd"></i>
						<h4>Fundraising Committee</h4>
						<p class="font-lato size-20">Oversee the organization's overall fundraising</p>
					</div>
				</div>	
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-book"></i>
						<h4>Referees Committee</h4>
						<p class="font-lato size-20">Develops referees and oversees the Referee Certification Program</p>
					</div>
				</div>		
			</div>
			<div class="row">		
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-trophy"></i>
						<h4>Awards Committee</h4>
						<p class="font-lato size-20">Recognize performance, sportsmanship, and commitment to the sport of racquetball</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-calendar-check-o "></i>
						<h4>Special Events Committee</h4>
						<p class="font-lato size-20">Creates memorable events to bring members together, celebrate successes of our members, and thank members for all they do</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-check-square-o"></i>
						<h4>Elections Committee</h4>
						<p class="font-lato size-20">Establish a slate of officers and conduct a fair and impartial election </p>
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
					<div class="col-md-8 col-sm-8">
						
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
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Membership Committee</label>							
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Juniors Committee</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Women's Committee</label>
								</div>
								<div class="margin-top-10 control-group col-md-4">
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Fundraising Committee</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Marketing Committee</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Rules/Referee Committee</label>					
								</div>
								<div class="margin-top-10 control-group col-md-4">
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Awards Committee</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Events Committee</label>
									<label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Elections Committee</label>
								</div>
								
							</fieldset>

							<div class="row margin-bottom-20">
								<div class="col-md-12">
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