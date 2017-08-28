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
			<h5>These awards are for the period of January 1, @php echo date("Y"); @endphp to December 31, @php echo date("Y"); @endphp Awards will be presented at Regional’s Competition in San Antonio, Texas. (April, @php echo date("Y", strtotime('+1 year')); @endphp)</h5>
			<div class="row">

				<!-- LEFT COLUMNS -->
				<div class="col-md-6">

					<!-- TOGGLES -->
					<div class="toggle toggle-transparent toggle-bordered-simple">

						<div class="toggle mix design"><!-- toggle -->
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

						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
						<div class="toggle mix design"><!-- toggle -->
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
	</section>

	<section>
		<div class="container">
			<div class="row">
				<!-- FORM -->
				<div class="col-md-8 col-sm-8">
					
					<h3>Nomination Form</h3>					
					<!--
						MESSAGES
						
							How it works?
							The form data is posted to php/contact.php where the fields are verified!
							php.contact.php will redirect back here and will add a hash to the end of the URL:
								#alert_success 		= email sent
								#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
								#alert_mandatory	= email not sent - required fields empty
								Hashes are handled by assets/js/contact.js

							Form data: required to be an array. Example:
								contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
								Also, add `required` to input fields if is a mandatory field. 
								Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

							PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
										 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

							WARNING! Do not change the `email` and `name`!
										contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
										contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
					-->

					<!-- Alert Success -->
					<div id="alert_success" class="alert alert-success margin-bottom-30">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Thank You!</strong> Your message successfully sent!
					</div><!-- /Alert Success -->


					<!-- Alert Failed -->
					<div id="alert_failed" class="alert alert-danger margin-bottom-30">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>[SMTP] Error!</strong> Internal server error!
					</div><!-- /Alert Failed -->


					<!-- Alert Mandatory -->
					<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
					</div><!-- /Alert Mandatory -->


					<form action="php/contact.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<input type="hidden" name="action" value="contact_send" />
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<label for="contact:name">Nominee Full Name *</label>
										<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
									</div>	
									<div class="col-md-8">
										<label for="contact_department">Specify Award *</label>
										<select class="form-control pointer" name="contact[department]">
											<option value="">--- Select ---</option>
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
									<div class="col-md-4">
										<label for="contact:name">Your Full Name *</label>
										<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
									</div>
									<div class="col-md-4">
										<label for="contact:email">Your E-mail Address *</label>
										<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
									</div>
									<div class="col-md-4">
										<label for="contact:phone">Your Phone</label>
										<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
									</div>
								</div>
							</div>														
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="contact:message">Supporting Information * </label>
										<small>Please list achievements, verification source and contact name/information of Tournament & League Directors, parents, coaches, etc. </small>
										<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
									</div>
								</div>
							</div>									

						</fieldset>

						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary"><i class="fa fa-trophy"></i> SEND</button>
							</div>
						</div>
					</form>

				</div>
				<!-- /FORM -->


				<!-- INFO -->
				<div class="col-md-4 col-sm-4">
					<!-- -->

					<div class="panel panel-info">
						<div class="panel-heading panel-heading-transparent!">
							<h2 class="panel-title"><i class="fa fa-info-circle"></i> Eligibility Criteria</h2>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check"></i> Candidates must be current TXRA/USRA  members in good standing and must have participated in sanctioned events for a minimum of two years</li>
								<li><i class="fa fa-check"></i> Candidates must currently reside in Texas for the past two years</li>
								<li><i class="fa fa-check"></i> Candidates must have participated in a minimum of four sanctioned tournaments during the past calendar year and one of those to include State Singles, State Doubles and/or Regional Competition</li>
								<li><i class="fa fa-check"></i> Candidates may also include TXRA Board, Committee and At large members who exhibit extraordinary selfless service beyond that of his or her current position and /or meets the performance criteria </li>
								<li>Any current TXRA member in good standing may nominate a candidate or themselves</li>
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
