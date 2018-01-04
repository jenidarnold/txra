@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')	
		<div class="">		
			<form class="form">	
				<div class="row">
					<label class="control-label" for="subject">Subject:</label>
					<div class="col-sm-12">
						<input type="text" name="subject"/>
					</div>
				</div>
				<div class="row">
					<label class="control-label" for="view">View:</label>
					<div class="col-sm-12">
						<input type="text" name="view" class="input"/>
					</div>
				</div>
				<div class="row">
					<label class="control-label" for="view">Emails:</label>
					<div class="col-sm-12">
						<input type="text" name="emails" class="input"/>
					</div>
				</div>
	     		 <div class="row">
			        <div class="table-responsive col-sm-12">
			        	<table class="table table-condensed">
			        		<tr>
			        			<th><input type="checkbox" name="chkAll"/></th>
			        			<th>ID</th>
			        			<th>Last Name</th>
			        			<th>First Name</th>
			        			<th>Email</th>
			        		</tr>
			        		@foreach($users as $user)
			        		<tr>
			        			<td><input type="checkbox" name="chkEmail"/></td>
			        			<td>{{$user->id}}</td>
			        			<td>{{$user->last_name}}</td>
			        			<td>{{$user->first_name}}</td>
			        			<td>{{$user->email}}</td>		        					        			
			        		</tr>
			        		@endforeach
			        	</table>
			        </div>	
		        </div>	
		    </form>
			<div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$users->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	

@stop