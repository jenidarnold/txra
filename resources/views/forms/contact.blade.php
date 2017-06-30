@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop	
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="fa fa-envelope"></i> CONTACT THE TXRA BOARD</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="#">ABOUT</a></li>
				<li class="active">CONTACT US</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-12">

							<h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>

							
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
												<label for="contact:name">Your Full Name (required)</label>
												<input required type="text" value="{{$from->first_name.' '.$from->last_name}}" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">Your E-mail Address (required)</label>
												<input required type="email" value="{{$from->email}}" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Your Phone (optional)</label>
												<input type="text" value="{{$from->phone}}" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:toname">To (optional) </label>
												<input type="text" value="{{$toname}}" class="form-control" name="contact[toname][]" id="contact:toname">
											</div>
											<div class="col-md-4">
												<label for="contact:committee">Committee (optional)</label>
												<select class="form-control pointer" name="contact[committee]">
													<option value="">--- Select ---</option>
													<option value="1">Awards</option>
													<option value="2">Communications</option>
													<option value="3">Finance</option>
													<option value="4">Governance</option>
													<option value="5">Strategic Planning</option>
													<option value="6">Youth and Collegiate</option>
												</select>
											</div>
											<div class="col-md-12">
												<label for="contact:subject">Subject (required)</label>
												<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message (required)</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:attachment">File Attachment</label>

												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


					</div>

				</div>
			</section>
			<!-- / -->
@stop