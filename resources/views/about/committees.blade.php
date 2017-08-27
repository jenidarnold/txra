@extends('layouts.app')
@section('style')
    <style type="text/css">
    	textarea {
    		border-color: #e5e5e5;
    		-webkit-transition: border-color .3s;
    		    display: block;
		    box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    width: 100%;
		    padding: 8px 10px;
		    outline: 0;
		    border-width: 2px;
		    border-style: solid;
		    border-radius: 0;
		    background: #fff;
		    font: 15px/19px 'Open Sans',Helvetica,Arial,sans-serif;
		    color: #404040;
		    appearance: normal;
		    -moz-appearance: none;
		    -webkit-appearance: none;
    	}
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><img src="{{asset('images/board/board.png')}}" height="40px"> COMMITTEES</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/about/board">Directors</a></li>
				<li class="active">Committees</li>
				<li><a href="/about/election/process">Elections</a></li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

			<p class="lead">The Texas Racquetball Association functions because of the participation of its dedicated and passionate members. <a href="#join">Join a Committee!</a></p>
			
			<div class="divider divider-center divider-color"><!-- divider -->
				<i class="fa fa-chevron-down"></i>
			</div>

			<!-- FEATURED BOXES 3 -->
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-trophy"></i>
						<h4>Awards Committee</h4>
						<p class="font-lato size-10">Develops and implements annual awards to inspire TXRA members to be better players, show sportsmanship and voluntarily help grow racquetball in Texas </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-comments"></i>
						<h4>Communications Committee</h4>
						<p class="font-lato size-10">Develops and maintains on-line and off-line communication with Texas racquetball players, enthusiasts and supporters</p>
					</div>
				</div>	
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-usd"></i>
						<h4>Finance Committee</h4>
						<p class="font-lato size-10">Develops, implements, and maintains all finiancial records and reporting to TXRA membership and board.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-book"></i>
						<h4>Governance Committee</h4>
						<p class="font-lato size-10">Develops and improves governance for TXRA Board and general membership </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="text-center">
						<i class="ico-color ico-lg ico-rounded ico-hover fa fa-line-chart"></i>
						<h4>Strategic Planning</h4>
						<p class="font-lato size-10">Develop and implement TXRA programs to further develop players, tournaments, and facilities in Texas</p>
					</div>
				</div>	
				<div class="col-md-4 col-sm-6 col-xs-12">
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
				<a name="join"></a>
				<div class="row">

					<!-- LOGIN -->
					<div class="col-md-12">
						
						<!-- register form -->
						<form class="nomargin sky-form boxed" action="{{ route('committees.join')}}" method="post">
							{{ csrf_field() }}
							<header>
								<img height="42px" src="{{asset('images/icons/hands.png')}}"></i> Tell us what committees you are interested in joining
							</header>

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

							<fieldset class="nomargin">	
								<div class="row margin-bottom-10">
									<div class="col-md-4 col-sm-6">
										<label class="input">
											<input type="text" name="first_name" placeholder="First name">
										</label>
									</div>
									<div class="col-md-4 col-sm-6">
										<label class="input">
											<input type="text" name="last_name" placeholder="Last name">
										</label>
									</div>
								</div>

								<div class="row margin-bottom-10">
									<div class="col-md-4 col-sm-6">
										<label class="input margin-bottom-10">
											<i class="ico-append fa fa-envelope"></i>
											<input type="text" name="email" placeholder="Email address">
										</label>								
									</div>
									<div class="col col-md-4 col-sm-6">
										<label class="select margin-bottom-10">
											<select name="is_member">
												<option value="0" selected disabled>Are you a current TXRA member?</option>
												<option value="1">Yes - I am a current TXRA member</option>
												<option value="2">No - I am not yet a TXRA member</option>
											</select>
										</label>
									</div>
								</div>

								<!-- Committees -->
								<div class="margin-top-10 margin-bottom-20">
									<div class="margin-top-10 margin-bottom-10 control-group col-md-3 col-sm-4">
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Awards"><i></i>Awards</label>	
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Communications"><i></i>Communications</label>
									</div>
									<div class="margin-top-10 margin-bottom-10 control-group col-md-3 col-sm-4">
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Finance"><i></i>Finance</label>			
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Governance"><i></i>Governance</label>
									</div>
									<div class="margin-top-10 margin-bottom-10 control-group col-md-3 col-sm-4">
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Strategic Planning"><i></i>Strategic Planning</label>
										<label class="checkbox nomargin"><input type="checkbox" name="committees[]" value="Youth and Collegiate"><i></i>Youth and Collegiate</label>					
									</div>
								</div>
								<!-- /Committees -->

								<!-- Comments -->
								<div class="row">
									<div class="col-sm-12 margin-top-20 margin-bottom-10">
										<textarea class="input" rows="5" maxlength="1000" name="comments" placeholder="Comments"></textarea>
									</div>
								</div>
								<!-- /Comments -->

							</fieldset>

							<div class="row margin-bottom-20">
								<div class="col-md-12 text-center">
									<button type="submit" class="btn btn-primary"></i>Submit</button>
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