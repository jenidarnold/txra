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
	          	<h3>Editing {{$invite->full_name}}</h3>	         
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

	            <form action="{{route('admin.invites.update', $invite->id)}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">

						<div class="form-group">
							<label class="control-label">First Name</label>
							<input type="text" name="first_name" value="{{$invite->first_name}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Last Name</label>
							<input type="text" name="last_name" value="{{$invite->last_name}}" class="form-control">
						</div>	
					</div>
					<div class="row">
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" name="email" value="{{$invite->email}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Save</button>
							<a class="btn btn-warning" href="{{route('admin.invites')}}">Cancel</a>
						  	<a href="{{ route('admin.invites.delete', array('id' => $invite->id)) }}" 
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