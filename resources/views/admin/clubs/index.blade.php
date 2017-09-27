@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<h3><i class="fa fa-home text-warning"></i> Clubs</h3>
			</div>
		</div>
 		<div class="row">
		        <div class="col-sm-12">
		        	<table class="table table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>ID</th>
		        			<th>Name</th>
		        			<th>Address</th>		        					        			
		        			<th>Phone</th>
		        			<th>Lat/Lng</th>
		        			<th>Type</th>
		        			<th>Courts</th>
		        			<th>Url</th>
		        		</tr>
		        	@foreach($clubs as $club)
		        		@if($club->accepted)
		        		<tr class="alert-success">
		        		@elseif($club->sent)
		        		<tr class="alert-warning">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				<a href="{{route('admin.clubs.create', $club->id)}}" class="btn btn-xs btn-warning">Add</a>
		        				<a href="{{route('admin.clubs.edit', $club->id)}}" class="btn btn-xs btn-info">Edit</a>
		        			</td>
		        			<td>{{$club->id}}</td>
		        			<td>{{$club->name}}</td>
		        			<td>{{$club->address}}<br/>
		        				{{$club->city}},	
		        				{{$club->state}}
		        				{{$club->zip}}</td>
		        			<td>{{$club->phone}}</td>
		        			<td>{{$club->lat}}<br/>
		        				{{$club->lng}}</td>
		        			<td>{{$club->type}}</td>
		        			<td>{{$club->courts}}</td>
		        			<td><a href="{{$club->url}}" target="map" class="text-info">Link</a></td>
		        			{{-- <td>{{$club->token}}</td> --}}
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$clubs->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>			
	</div>

@stop