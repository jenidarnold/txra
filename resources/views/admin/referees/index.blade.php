@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3>Referees</h3>
    				<a href="{{route('admin.referees.create')}}" class="btn btn-sm btn-warning">Add</a>
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
		        	@foreach($referees as $referee)
		        		@if($referee->expired)
		        		<tr class="alert-danger">
		        		@elseif($referee->expired)
		        		<tr class="">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				<a href="{{route('admin.referees.edit', $referee->id)}}" class="btn btn-xs btn-info">Edit</a>
		        			</td>
		        			<td>{{$referee->last_name}}</td>
		        			<td>{{$referee->first_name}}</td>
		        			<td>{{$referee->email}}</td>	
		        			<td>{{$referee->level}}</td>	
		        			<td>{{$referee->date_certified}}</td>	
		        			<td>{{$referee->valid_until}}</td>	
		        			<td>{{$referee->facebook}}</td>
		        			<td>{{substr($referee->quote, 0,10)}}</td>
		        			<td>{{substr($referee->blurb, 0, 10)}}</td>
		        			{{-- <td>{{$referee->token}}</td> --}}
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$referees->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			  
		</div>	
	</section>
@stop

