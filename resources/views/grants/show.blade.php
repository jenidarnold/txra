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
	          	<h3>Grant Proposal #{{$grant->id}}</h3>	  
	          	<h4>{{$grant->title}} </h4>
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

				  	<div class="nomargin sky-form boxed">
		       			<header>
							<img height="42px" src="{{asset('images/icons/hands.png')}}"></i> Contact Information
						</header>
						<div class="row margin-bottom-10">
							<div class="col-lg-4 col-sm-6">
								<label class="label">Submitter:</label>
								<label name="first_name" placeholder="First name"  value="{{$grant->submitter->full_name}}"></label>
							</div>
							<div class="col-lg-4 col-sm-6">
							</div>
						</div>

		       			<header>
							<img height="42px" src="{{asset('images/icons/hands.png')}}"></i> Proposal Information & Budget
						</header>
						<div class="row margin-bottom-10">	
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">Amount Requested:</label>
									<i class="ico-prepend fa fa-usd"></i>
									<label name="amount" placeholder="Amount" value="{{Input::old('amount')}}">{{$grant->amount}}</label>	
							</div>
							<div class="col-lg-4 col-sm-6">
								<label class="input margin-bottom-10">Date Needed:</label>
									<i class="ico-append fa fa-calendar"></i>
									<label type="text" name="need_date" placeholder="Date Needing Grant" >{{$grant->need_date}}</label>		
							</div>
						</div>
						<div class="row">
	            			<div class="form-group col-md-12">
								<label class="input margin-bottom-10">Proposal:</label>
								<textarea name="body" rows="4" class="form-control">
									{{$grant->body}}
								</textarea>
							</div>
						</div>
					</div>
				</div>
            </form>
        </div>
    </div>
@stop