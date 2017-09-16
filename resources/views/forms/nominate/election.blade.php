@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
				<div class="container">

					<h1>TXRA BOARD OF DIRECTORS NOMINATION FORM</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Election</a></li>
						<li class="active">Nonimate</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3></h3>

							
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


							<form action="" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Nominee Full Name *</label>
												<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
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
												<label for="contact:message">Please list qualifications and reasons for the nominee’s candidacy *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>									

								</fieldset>
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="g-recaptcha" data-sitekey="6LfB4DAUAAAAAHwA_AmMxO4cdcVaJ9totprbuesE"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-4 col-sm-4">
							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->
						
						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->
@stop
