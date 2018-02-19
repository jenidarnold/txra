@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop

@section('head')
	<meta property="og:title" content="TXRA Board of Directors Nomination Form"/>
	<meta property="og:description" content="Use this form to nominate a member or yourself for a board position" />
   	<meta property="og:url" content="https://texasracquetball.org/election/nominate"/>
  	{{-- <meta property="og:image:type" content=""/>
   	<meta property="og:image:width" content=""/>
  	<meta property="og:image:height" content=""/> --}}
   	<meta property="og:type" content="website"/>
@stop
@section('content')		
	<section class="page-header page-header-xs">
				<div class="container">

					<h1>BOARD OF DIRECTORS NOMINATION FORM</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Election  Process</a></li>
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
				<div class="row">
					<div class="col-sm-8 margin-bottom-0">
						<a name="form"></a>
						<hr/>
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
					</div>	
				</div>
				<div class="col-md-8 col-sm-8">											
					<form action="{{route('election.nominate')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<fieldset>
							<input type="hidden" name="action" value="contact_send" />
							<div class="row">
															
								<div class="form-group">
									<h4 class="col-sm-12 text-warning">Tell Us About Your Nominee!</h4>	
									<div class="col-sm-6">	
										<input required type="text" value="{{ Input::old('nominee_first_name') }}" placeholder="First Name" class="form-control alert-warning" name="nominee_first_name">
									</div>
									<div class="col-sm-6">
										<input required type="text" placeholder="Last Name" class="form-control alert-warning" name="nominee_last_name"  value="{{ Input::old('nominee_last_name') }}">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<textarea required maxlength="10000" rows="8" class="form-control  alert-warning" name="comments" id="comments" placeholder="Please list qualifications and reasons for the nominee’s candidacy">{{ Input::old('comments') }}</textarea>
									</div>
								</div>
							</div>		
							<div class="row">								
								<div class="form-group">
									<h4 class="col-sm-12 text-primary">Tell Us About You!</h4>
									<div class="col-sm-6">
										<input required type="text" placeholder="First Name" class="form-control  alert-info" value="{{ Input::old('from_first_name') }}" name="from_first_name" id="from:name">
									</div>
									<div class="col-sm-6">
										<input required type="text" placeholder="Last Name" class="form-control alert-info"  value="{{ Input::old('from_last_name') }}" name="from_last_name" id="from:name">
									</div>
								</div>
							</div>
							<div class="row">								
								<div class="form-group">	
									<div class="col-sm-6">
										<input required type="email" placeholder="Email Address" class="form-control alert-info" name="from_email"  value="{{ Input::old('from_email') }}" id="from:email">
									</div>
									<div class="col-sm-6">
										<input type="text" placeholder="Phone (optional)" class="form-control alert-info" name="from_phone"  value="{{ Input::old('from_phone') }}" id="from:phone">
									</div>
								</div>
							</div>														
							<div class="row">		
								<div class="form-group">
									<div class="col-sm-12">		
										<select name="is_member" required type="text" class="form-control pointer alert-info"  value="{{ Input::old('is_member') }}">
											<option value="0" selected>Are you a current TXRA member?</option>
											<option value="1">Yes - I am a current TXRA member</option>
											<option value="2">No - I am not yet a TXRA member</option>
										</select>
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
							<div class="col-sm-12">
								<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check-square"></i> NOMINATE</button>
							</div>
						</div>
					</form>

				</div>
				<!-- /FORM -->
				</div>
			</section>
			<!-- / -->
@stop
