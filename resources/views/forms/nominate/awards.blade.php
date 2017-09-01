@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop	
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-trophy"></i> ANNUAL AWARDS NOMINATION</h1>


			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li> <a href="/programs/awards">Gallery</a></li>		
				<li class="active">Nominations</li>					
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

	        <h3>@php echo date("Y"); @endphp Annual Awards (presented in @php echo date("Y", strtotime('+1 year')); @endphp)</h3>
			<p class="lead">These awards are for the period of January 1, @php echo date("Y"); @endphp to December 31, @php echo date("Y"); @endphp <br/>Awards will be presented at Regional’s Competition in San Antonio, Texas. (April, @php echo date("Y", strtotime('+1 year')); @endphp) <a href="#form">Nominate Now!</a></p> 
			

			<div class="divider divider-center divider-color"><!-- divider -->
				<i class="fa fa-chevron-down"></i>
			</div>

			<div class="row">

				<!-- LEFT COLUMNS -->
				<div class="col-md-6">

					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">

						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Ann Gibbons Memorial Sportsmanship</label>
							<div class="toggle-content">
								<p class="clearfix">
									Presented to a person who has demonstrated honesty, integrity and fairness during racquetball play, tournaments and all other aspects related to the sport.
								</p>

							</div>
						</div><!-- /toggle -->					
					</div>
				</div>
				<div class="col-md-6">

					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">

						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Outstanding Racquetball Contributor</label>
							<div class="toggle-content">
								<p class="clearfix">
									Presented to a male or female that has demonstrated commitment to the sport and has volunteered time above and beyond to enhance the sport of racquetball in Texas.
								</p>

							</div>
						</div><!-- /toggle -->					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Male Athlete of the Year</label>
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to a male player that has demonstrated significant improvement in performance and demonstrated good sportsmanship on and off the court, in the sport of racquetball.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Female Athlete of the Year</label>
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to a female player that has demonstrated significant improvement in performance and demonstrated good sportsmanship on and off the court, in the sport of racquetball.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Junior Male Athlete of the Year - Under 13</label>
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to the male player that is under 13 years old that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Junior Male Athlete of the Year - Age 13-18</label>
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to the male player that is 13 or over and under 18 that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i>  Junior Female Athlete of the Year - Under 13</label>
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to the female player that is under 13 years old that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
				<div class="col-md-6">
					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">
						<div class="toggle mix design alert-warning"><!-- toggle -->
							<label><i class="ico-color ico-rounded1 ico-hover ico-xs et-trophy" style="background-color:goldenrod"></i> Junior Female Athlete of the Year - Age 13-18</label> 
							<div class="toggle-content">
								<p class="clearfix">
									Awarded to the female player that is 13 or over and under 18 that has demonstrated significant improvement in his performance. Demonstrated good sportsmanship on and off the court.
								</p>

							</div>
						</div><!-- /toggle -->
					</div>
				</div>
			</div>
	</div>
	
	<div class="divider divider-center divider-color"><!-- divider -->
		<i class="fa fa-chevron-down"></i>
	</div>

		<div class="container">
			<div class="row">
				<!-- FORM -->
				<div class="row">
					<div class="col-sm-8">
						<a name="form"></a>
						<h3 class="text-center text-primary">Nomination Form</h3>	
						<hr/>
					</div>	
				</div>
				<div class="col-md-8 col-sm-8">											
						<form action="{{route('awards.nominate')}}" method="post" enctype="multipart/form-data">
						<fieldset>
							<input type="hidden" name="action" value="contact_send" />
							<div class="row">
															
								<div class="form-group">
									<h4 class="col-sm-12 text-primary">Tell Us About Your Nominee!</h4>	
									<div class="col-sm-6">	
										<input required type="text" placeholder="First Name" class="form-control" name="nominee['first_name']">
									</div>
									<div class="col-sm-6">
										<input required type="text" placeholder="Last Name" class="form-control" name="nominee['last_name]">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">	
									<div class="col-sm-12">
										<select class="form-control pointer" name="award">
											<option value="" class="text-danger">---Select Award---</option>
											<option value="1">Ann Gibbons Memorial Sportsmanship</option>
											<option value="2">Male Athlete of the Year</option>
											<option value="3">Female Athlete of the Year</option>
											<option value="4">Junior Male Athlete of the Year – Under 13</option>
											<option value="5">Junior Male Athlete of the Year – Age 13-18</option>
											<option value="6">Junior Female Athlete of the Year – Under 13</option>
											<option value="7">Junior Female Athlete of the Year – Age 13-18</option>
											<option value="8">Outstanding Racquetball Contributor</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<textarea required maxlength="10000" rows="8" class="form-control" name="comments" id="comments" placeholder="Please list achievements, verification source and contact name/information of Tournament & League Directors, coaches, parents, etc"></textarea>
									</div>
								</div>
							</div>		
							<div class="row">								
								<div class="form-group">
									<h4 class="col-sm-12 text-primary">Tell Us About You!</h4>
									<div class="col-sm-6">
										<input required type="text" placeholder="First Name" class="form-control" name="from['first_name']" id="from:name">
									</div>
									<div class="col-sm-6">
										<input required type="text" placeholder="Last Name" class="form-control" name="from['last_name']" id="from:name">
									</div>
								</div>
							</div>
							<div class="row">								
								<div class="form-group">	
									<div class="col-sm-6">
										<input required type="email" placeholder="Email Address" class="form-control" name="from['email']" id="from:email">
									</div>
									<div class="col-sm-6">
										<input type="text" placeholder="Phone (optional)" class="form-control" name="from['phone']" id="from:phone">
									</div>
								</div>
							</div>														
														

						</fieldset>

						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-trophy"></i> NOMINATE</button>
							</div>
						</div>
					</form>

				</div>
				<!-- /FORM -->


				<!-- INFO -->
				<div class="col-md-4 col-sm-4">
					<!-- -->

					<div class="panel panel-warning">
						<div class="panel-heading panel-heading-transparent!">
							<h2 class="panel-title"><i class="fa fa-info-circle"></i> Eligibility Criteria</h2>
						</div>
						<div class="panel-body small alert-warning">
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check"></i> Candidates must be current TXRA/USRA  members in good standing and must have participated in sanctioned events for a minimum of two years</li>
								<li><i class="fa fa-check"></i> Candidates must currently reside in Texas for the past two years</li>
								<li><i class="fa fa-check"></i> Candidates must have participated in a minimum of four sanctioned tournaments during the past calendar year and one of those to include State Singles, State Doubles and/or Regional Competition</li>
								<li><i class="fa fa-check"></i> Candidates may also include TXRA Board, Committee and At large members who exhibit extraordinary selfless service beyond that of his or her current position and /or meets the performance criteria </li>
								<li><i class="fa fa-check"></i> Any current TXRA member in good standing may nominate a candidate or themselves</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /INFO -->
			</div>
		</div>
	</section>
	<!-- / -->
@stop
