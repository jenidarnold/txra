@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
	<div class="container">
		<div class="row">
	        <div class="col-md-8">
	          <div class="row">
	          	<h3>Edit Referee</h3>	         
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

	            <form action="{{route('admin.referees.update', $referee->id)}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">
            			<div class="form-group col-md-2">
							<label class="control-label">USAR ID</label>
							<input type="text" name="usar_id" value="{{$referee->usar_id}}" class="form-control">
						</div>
						<div class="form-group col-md-5">
							<label class="control-label">First Name</label>
							<input type="text" name="first_name" value="{{ $referee->first_name}}" class="form-control">
						</div>
						<div class="form-group col-md-5">
							<label class="control-label">Last Name</label>
							<input type="text" name="last_name" value="{{$referee->last_name}}" class="form-control">
						</div>	
					</div>

					<div class="row">
						<div class="form-group col-md-2">
							<label class="control-label">Level</label>
							<input type="text" name="level" value="{{$referee->level}}" class="form-control">
						</div>
						<div class="form-group col-md-5">
							<label class="control-label">Certified</label>
							<input type="text" name="date_certified" value="{{$referee->date_certified}}" class="form-control">
						</div>
						<div class="form-group col-md-5">
							<label class="control-label">Expires</label>
							<input type="text" name="valid_until" value="{{$referee->valid_until}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label class="control-label">Email</label>
							<input type="text" name="email" value="{{$referee->email}}" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">Facebook</label>
							<input type="text" name="facebook" value="{{$referee->facebook}}" class="form-control">
						</div>
					</div>
					<div class="row">
            			<div class="form-group col-md-3">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" value="{{$referee->phone}}" class="form-control">
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">City</label>
							<input type="text" name="city" value="{{ $referee->city}}" class="form-control">
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">State</label>
							<input type="text" name="state" value="Texas" class="form-control">
						</div>	
					</div>
					<div class="row">
            			<div class="form-group col-md-12">
							<label class="control-label">Avatar</label>
							<input type="text" name="logo" value="{{$referee->logo}}" class="form-control">
						</div>
					</div>
					<div class="row">
            			<div class="form-group col-md-12">
							<label class="control-label">Quote</label>
							<input type="text" name="quote" value="{{$referee->quote}}" class="form-control">
						</div>
					</div>
					<div class="row">
            			<div class="form-group col-md-12">
							<label class="control-label">Blurb</label>
							<textarea name="blurb" rows="4" class="form-control">
								{{$referee->blurb}}
							</textarea>
						</div>
					</div>
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success">Save</button>
						<a class="btn btn-warning" href="{{route('admin.referees')}}">Cancel</a>
					</div>
				</div>
            </form>
        </div>
    </div>
@stop