@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3>Instructors</h3>
		        </div>
		        {{-- <div class="col-sm-12">
		        	<button type="button" class="btn btn-sm btn-primary">Total <span class="badge">{{ $stats->total}}</span></button>
		        	<button type="button" class="btn btn-sm btn-info">Sent <span class="badge">{{ $stats->sent}}</span></button>
		        	<button type="button" class="btn btn-sm btn-default">Unsent <span class="badge">{{ $stats->unsent}}</span></button>
		        	<button type="button" class="btn btn-sm btn-success">Accepted <span class="badge">{{ $stats->accepted}}</span></button>
		        	<button type="button" class="btn btn-sm btn-danger">Pending <span class="badge">{{ $stats->pending}}</span></button>
		        </div>
		        <br/> --}}
		    </div>
     		<div class="row">
		        <div class="table-responsive col-sm-12">
		        	<table class="table table-stripedX table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>Last</th>
		        			<th>First</th>
		        			<th>Email</th>
		        			<th>Level</th>
		        			<th>Cert</th>
		        			<th>Expires</th>
		        			<th>FB</th>
		        			<th>Quote</th>
		        			<th>Blurb</th>
		        			<th></th>
		        		</tr>
		        	@foreach($instructors as $instructor)
		        		@if($instructor->expired)
		        		<tr class="alert-danger">
		        		@elseif($instructor->expired)
		        		<tr class="">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				<a href="{{route('admin.instructors.create', $instructor->id)}}" class="btn btn-xs btn-warning">Add</a>
		        				<a href="{{route('admin.instructors.edit', $instructor->id)}}" class="btn btn-xs btn-info">Edit</a>
		        			</td>
		        			<td>{{$instructor->last_name}}</td>
		        			<td>{{$instructor->first_name}}</td>
		        			<td>{{$instructor->email}}</td>	
		        			<td>{{$instructor->level}}</td>	
		        			<td>{{$instructor->date_certified}}</td>	
		        			<td>{{$instructor->valid_until}}</td>	
		        			<td>{{$instructor->facebook}}</td>
		        			<td>{{substr($instructor->quote, 0,10)}}</td>
		        			<td>{{substr($instructor->blurb, 0, 10)}}</td>
		        			{{-- <td>{{$instructor->token}}</td> --}}
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$instructors->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			  
		</div>	
	</section>
@stop

