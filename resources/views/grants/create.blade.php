@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<div class="container">
		<div class="row">
	        <div class="col-md-8">
	          <div class="row">
	          	<h3>Grant Application</h3>	   
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

	            <form class="nomargin sky-form boxed" action="{{route('grants.store')}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	       			<header>
						<img height="42px" src="{{asset('images/icons/hands.png')}}"></i> Contact Information
					</header>

					<fieldset class="nomargin">	
						<div class="row margin-bottom-10">
							<div class="col-lg-4 col-sm-6">
								<label class="input">
									<input type="text" name="first_name" placeholder="First name">
								</label>
							</div>
							<div class="col-lg-4 col-sm-6">
								<label class="input">
									<input type="text" name="last_name" placeholder="Last name">
								</label>
							</div>
						</div>

						<div class="row margin-bottom-10">
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">
									<i class="ico-append fa fa-envelope"></i>
									<input type="text" name="email" placeholder="Email address">
								</label>								
							</div>
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">
									<i class="ico-append fa fa-phone"></i>
									<input type="text" name="phone" placeholder="Phone Number">
								</label>								
							</div>
						</div>
						<div class="row">	
							<div class="col col-lg-4 col-sm-6">
								<label class="select margin-bottom-10">
									<select name="is_member">
										<option value="0" selected disabled>Are you a current TXRA member?</option>
										<option value="1">Yes - I am a current TXRA member</option>
										<option value="2">No - I am not yet a TXRA member</option>
									</select>
								</label>
							</div>
						</div>


		       			<header>
							<img height="42px" src="{{asset('images/icons/hands.png')}}"></i> Proposal Information & Budget
						</header>
						<div class="row margin-bottom-10">
							<div class="col-lg-4 col-sm-12">
								<label class="input margin-bottom-10">
									<input type="text" name="email" placeholder="Proposal Title">
								</label>								
							</div>
						</div>
						<div class="row margin-bottom-10">	
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">
									<i class="ico-prepend fa fa-usd"></i>
									<input type="text" name="amount" placeholder="Amount">
								</label>								
							</div>
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">
									<i class="ico-append fa fa-calendar"></i>
									<input type="text" name="need_date" placeholder="Date Needing Grant">
								</label>								
							</div>
						</div>
						<div class="row">
	            			<div class="form-group col-md-12">
								<label class="input margin-bottom-10">Please give a 2-3 paragraph summary of request plus purpose of request. Also provide your experience at this type of event:</label>
								<textarea name="body" rows="4" class="form-control">
									{{Input::old('body')}}
								</textarea>
							</div>
						</div>


						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Save</button>
							<a class="btn btn-warning" href="{{route('grants.index')}}">Cancel</a>
						</div>

					</fieldset>	
				</div>
            </form>
        </div>
    </div>
@stop