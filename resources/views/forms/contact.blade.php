@extends('layouts.app')
@section('style')
    <style type="text/css">
    	.row {
    		margin-bottom: 10px;
    	}
    </style>
@stop	
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="fa fa-envelope"></i> CONTACT US</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/about/board">Board</a></li>
				<li class="active">Contact Us</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p class="lead">
								Do you have a question, comment, or news to pass along to the TXRA? 	Please use this form to send us your message and we'll get back with you very soon.
							</p>
						</div>
					</div>
					<div class="divider divider-center divider-color"  style="margin-top:10px;margin-bottom:20px"><!-- divider -->
						<i class="fa fa-chevron-down"></i>
					</div>
					<div class="row">

						<!-- FORM -->
						<div class="col-sm-10 col-sm-offset-1">						

							<!-- Flash Message -->
							<div class="flash-message">
							    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
							      @if(Session::has('alert-' . $msg))

							      <div class="alert alert-{{ $msg }}">
							      	{{ Session::get('alert-' . $msg) }} 	      	
							      	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							      	@if($errors->has())
							      		<ul>
									   	@foreach ($errors->all() as $error)
									      	<li>{{ $error }}</li>
									  	@endforeach
									  	</ul>
									@endif
							      </div>
							      @endif
							    @endforeach
						  	</div> <!-- end .flash-message -->


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


							<!--form action="php/contact.php" method="post" enctype="multipart/form-data"-->
							<form action="{{route('contact')}}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<label>From:</label>
											<div class="col-sm-6">

												<input required type="text" placeholder="First Name" value="{{$from->first_name}}" class="form-control" name="from_first_name" id="contact:first_name">
											</div>

											<div class="col-sm-6">
												<input required type="text" placeholder="Last Name" value="{{$from->last_name}}" class="form-control" name="from_last_name" id="contact:last_name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-sm-6">
												<input required type="email" placeholder="Email" value="{{$from->email}}" class="form-control" name="from_email" id="contact:email">
											</div>
											<div class="col-sm-6">
												<input type="text" value="{{$from->phone}}"  placeholder="Phone (optional)" class="form-control" name="from_phone" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label>To:</label>
											<div class="col-sm-12">
												<input type="text" value="{{trim($to->full_name)}}"
												placeholder="Attention To: Full Name (optional)" class="form-control" name="to_full_name" id="toname">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<select class="form-control pointer" name="committee">
													<option value="">--- Select a Committee (optional)---</option>
													<option value="1">Awards</option>
													<option value="2">Communications</option>
													<option value="3">Finance</option>
													<option value="4">Governance</option>
													<option value="5">Strategic Planning</option>
													<option value="6">Youth and Collegiate</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<label>Subject:</label>
										<div class="form-group">
											<div class="col-md-12">
												<input required type="text" value="" placeholder="" class="form-control" name="subject" id="subject">
											</div>
										</div>
									</div>
									<div class="row">
										<label>Message:</label>									
										<div class="form-group">
											<div class="col-md-12">

												<textarea required maxlength="10000" placeholder="" rows="6" class="form-control" name="message" id="message"></textarea>
											</div>
										</div>
									</div>
									{{-- <div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:attachment">File Attachment</label>

												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

											</div>
										</div>
									</div> --}}

								</fieldset>

								<div class="row">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>SEND</button>
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