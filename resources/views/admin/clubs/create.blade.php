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
	          	<h3>Create Club</h3>	         
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

	            <form action="{{route('admin.clubs.store')}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">						
						<div class="col-sm-12">
							<label class="control-label">Club Name</label>
							<input type="text" name="name" value="{{ Input::old('name')}}" class="form-control">
						</div>
						<div class="col-sm-12">
							<label class="control-label">Address</label>
							<input type="text" name="address" value="{{Input::old('address')}}" class="form-control">
						</div>	
					</div>
					<div class="row">							
						<div class="col-sm-6">
							<label class="control-label">City</label>							
							<input type="text" name="city" value="{{Input::old('city')}}" class="form-control">
						</div>
					
						<div class="col-sm-3">
							<label class="control-label">State</label>
							<input type="text" name="state" value="{{Input::old('state')}}" class="form-control">
						</div>
					
						<div class="col-sm-3">
							<label class="control-label">Zip</label>
							<input type="text" name="zip" value="{{Input::old('zip')}}" class="form-control">
						</div>
					</div>
					<div class="row">							
						<div class="col-sm-3">
							<label class="control-label">Phone</label>							
							<input type="text" name="phone" value="{{Input::old('phone')}}" class="form-control">
						</div>
						<div class="col-sm-3">
							<label class="control-label">Type</label>							
							<input type="text" name="type" value="{{Input::old('type')}}" class="form-control">
						</div>
					
						<div class="col-sm-3">
							<label class="control-label"># Courts</label>							
							<input type="text" name="courts" value="{{Input::old('courts')}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label class="control-label">Lat</label>							
							<input type="text" name="lat" value="{{Input::old('lat')}}" class="form-control">
						</div>
					
						<div class="col-sm-3">
							<label class="control-label">Lng</label>							
							<input type="text" name="lng" value="{{Input::old('lng')}}" class="form-control">
						</div>
					</div>			
					<div class="row">
						<div class="col-sm-12">
							<label class="control-label">Url</label>							
							<input type="text" name="url" value="{{Input::old('url')}}" class="form-control">
						</div>
					</div>
					<div class="row">							
						<div class="col-sm-12">
							<label class="control-label">Info</label>							
							<input type="text" name="info" value="{{Input::old('info')}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Save</button>
							<a class="btn btn-warning" href="{{route('admin.invites')}}">Cancel</a>
						</div>
					</div>
	            </form>
            </div>
        </div>
    </div>
@stop