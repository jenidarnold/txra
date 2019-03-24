@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3>Grant Applications</h3>
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
		        			<th>Title</th>
		        			<th>Proposal</th>
		        			<th>Submitter</th>
		        			<th>Submit Date</th>
		        			<th>Status</th>
		        			<th>Status Date</th>
		        		</tr>
		        	@foreach($grants as $grant)
		        		@if($grant->expired)
		        		<tr class="alert-danger">
		        		@elseif($grant->expired)
		        		<tr class="">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				<a href="{{route('grants.show', $grant->id)}}" class="btn btn-xs btn-warning">View</a>
		        				<a href="{{route('grants.edit', $grant->id)}}" class="btn btn-xs btn-info">Edit</a>
		        			</td>
		        			<td>{{$grant->title}}</td>
		        			<td>{{$grant->body}}</td>
		        			<td>{{$grant->submitter->full_name}}</td>
		        			<td>{{$grant->created_at}}</td>
		        			<td>{{$grant->status}}</td>	
		        			<td>{{$grant->status_date}}</td>	
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$grants->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			  
		</div>	
	</section>
@stop

