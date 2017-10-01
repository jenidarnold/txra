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
	          	<h3 class="text-info" >Editing {{$club->full_name}}</h3>	         
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

	            <form action="{{route('admin.clubs.update', $club->id)}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">

						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" value="{{$club->name}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Address</label>
							<input type="text" name="address" value="{{$club->address}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">City</label>
							<input type="text" name="city" value="{{$club->city}}" class="form-control">
						</div>					
						<div class="form-group">
							<label class="control-label">State</label>
							<input type="text" name="state" value="{{$club->state}}" class="form-control">
						</div>				
						<div class="form-group">
							<label class="control-label">Zip</label>
							<input type="text" name="zip" value="{{$club->zip}}" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" value="{{$club->phone}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Lat</label>
							<input type="text" name="lat" value="{{$club->lat}}" class="form-control">
						</div>
							<div class="form-group">
							<label class="control-label">Lng</label>
							<input type="text" name="lng" value="{{$club->lng}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Type</label>
							<input type="text" name="type" value="{{$club->type}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Courts</label>
							<input type="text" name="courts" value="{{$club->courts}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Info</label>
							<input type="text" name="info" value="{{$club->info}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Url</label>
							<input type="text" name="url" value="{{$club->url}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Map Icon</label>
							{{ Form::select('map_icon', 
								['support' => 'Supports TXRA', 
								 'military' => 'Military', 
								 'rec' => 'Rec Center', 
								 'ymca' =>'YMCA',
								 'club' => 'Club', 
								 'college' => 'College/Univ'], 
								$club->map_icon, 
								['class' => '']) 
							}}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2">
							<button type="submit" class="btn btn-success">Save</button>
						</div>	
						<div class="col-sm-2">
							<a class="btn btn-warning" href="{{route('admin.clubs')}}">Cancel</a>
						</div>	
						<div class="col-sm-2">
							<button type="button" class="btn btn-info">Disable</button>
						</div>	
						<div class="col-sm-2">
						  	<a href="{{ route('admin.clubs.delete', array('id' => $club->id)) }}" 
						  		data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"	class="btn btn-danger">
		                        Delete
		                    </a>
						</div>
					</div>
	            </form>
            </div>
        </div>
    </div>
@stop