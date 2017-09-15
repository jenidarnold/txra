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
	          	<h3>Editing {{$user->full_name}}</h3>	         
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

	            <form action="{{route('admin.users.update', $user->id)}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">

						<div class="form-group">
							<label class="control-label">First Name</label>
							<input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Middle Name</label>
							<input type="text" name="middle_name" value="{{$user->middle_name}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Last Name</label>
							<input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
						</div>					
						<div class="form-group">
							<label class="control-label">Suffix</label>
							<input type="text" name="suffix" value="{{$user->suffix}}" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" name="email" value="{{$user->email}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">USAR ID</label>
							<input type="text" name="usar_id" value="{{$user->usar_id}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success">Save</button>
							<a class="btn btn-warning" href="{{route('admin.users')}}">Cancel</a>
							<button type="button" class="btn btn-info">Disable</button>
						  	<a href="{{ route('admin.users.delete', array('id' => $user->id)) }}" 
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