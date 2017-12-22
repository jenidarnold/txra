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
	          	<h3 class="text-info" >Editing {{$tournament->name}}</h3>	         
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

	            <form action="{{route('admin.events.update', $tournament->id)}}" method="post" enctype="multipart/form-data">
	            	{{ csrf_field() }}		

	            	<div class="row">

						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" value="{{$tournament->name}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">USAR ID</label>
							<input type="text" name="usar_id" value="{{$tournament->usar_id}}" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label class="control-label">Logo</label>
							<input type="text" name="logo" value="{{$tournament->logo}}" class="form-control">
						</div>					
						<div class="form-group">
							<label class="control-label">URL</label>
							<input type="text" name="url" value="{{$tournament->url}}" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label class="control-label">Start</label>
							<input type="text" name="start_date" value="{{$tournament->start_date}}" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">End</label>
							<input type="text" name="end_date" value="{{$tournament->end_date}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2">
							<button type="submit" class="btn btn-success">Save</button>
						</div>	
						<div class="col-sm-2">
							<a class="btn btn-warning" href="{{route('admin.events')}}">Cancel</a>
						</div>	
						<div class="col-sm-2">
							<button type="button" class="btn btn-info">Disable</button>
						</div>	
						<div class="col-sm-2">
						  	<a href="{{ route('admin.events.delete', array('id' => $tournament->id)) }}" 
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