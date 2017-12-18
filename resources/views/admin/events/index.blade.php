@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<h3><i class="fa fa-trophy text-warning"></i> Events</h3>
			</div>
		</div>
 		<div class="row">
		        <div class="table-responsive col-sm-12">
		        	<table class="table table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>ID</th>
		        			<th>USAR</th>
		        			<th>Logo</th>		        			
		        			<th>Name</th>
		        			<th>Start</th>
		        			<th>End</th>
		        			{{-- <th>Register</th> --}}
		        			<th>Url</th>
		        			<th></th>
		        		</tr>
		        	@foreach($events as $event)
		        		@if($event->accepted)
		        		<tr class="alert-success">
		        		@elseif($event->sent)
		        		<tr class="alert-warning">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				{{-- <a href="{{route('admin.events.create', $event->id)}}" class="btn btn-xs btn-warning">Add</a> --}}
		        				<a href="{{route('admin.events.edit', $event->id)}}" class="btn btn-xs btn-info">Edit</a>
		        			</td>
		        			<td>{{$event->id}}</td>
		        			<td>{{$event->usar_id}}</td>
		        			<td><img height="30px" src='{{$event->logo}}'/></td>
		        			<td>{{$event->name}}</td>
		        			<td>{{$event->start_date}}</td>	
		        			<td>{{$event->end_date}}</td>
		        			{{-- <td>{{$event->registration_date}}</td> --}}
		        			<td><a href="{{$event->url}}" target="usar" class="text-info">Link</a></td>
		        			{{-- <td>{{$event->token}}</td> --}}
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$events->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
		<div class="row">
			<h3><i class="fa fa-gears"></i> Download Events</h3>
		</div>
		<div class="row">
											
				<ul>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'live')) }}">TX LIVE EVENTS</a></li>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'future')) }}">TX FUTURE EVENTS</a></li>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'past')) }}">TX PAST EVENTS</a></li>				
					<li><a href="{{ route('events.download',  array('location' => 'national', 'type' => 'future'))}}">NAT FUTURE EVENTS</a></li>
				</ul>
		</div>
		{{-- <div class="row">
			<div class="col-sm-12">
				@if(isset($events))
					<h5>{{$events->count() }} records downloaded</h5>
					<ul>
					@foreach ($events as $e)
						<li> {{$e}}</li>
					@endforeach
					</ul>
				@endif
			</div>
		</div> --}}
	</div>

@stop