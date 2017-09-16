@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			 		 
     		 <div class="row">
		        <div class="col-sm-12">
		        	<table class="table table-stripedX table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>Last Name</th>
		        			<th>First Name</th>
		        			<th>Email</th>
		        			<th>Sent</th>
		        			<th>Accepted</th>
		        			<th></th>
		        		</tr>
		        	@foreach($invites as $invite)
		        		@if($invite->accepted)
		        		<tr class="alert-success">
		        		@elseif($invite->sent)
		        		<tr class="alert-warning">
		        		@else
		        		<tr>
		        		@endif
		        			<td>		        				
		        				<a href="{{route('admin.invites.create', $invite->id)}}" class="btn btn-xs btn-warning">Add</a>
		        				<a href="{{route('admin.invites.edit', $invite->id)}}" class="btn btn-xs btn-info">Edit</a>
								<a href="{{route('invite.send', $invite->id)}}" class='btn btn-xs btn-success'>Send</a>
		        			</td>
		        			<td>{{$invite->last_name}}</td>
		        			<td>{{$invite->first_name}}</td>
		        			<td>{{$invite->email}}</td>	
		        			<td>{{$invite->sent_at}}</td>
		        			<td>{{$invite->accepted_at}}</td>
		        		</tr>
		        	@endforeach
		        	</table>
		        </div>	
	        </div>	
	        <div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$invites->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			<div class="row">
		        <div class="col-md-8">
		          <div class="row">
		            <form action="{{route('import.invites')}}" method="post" enctype="multipart/form-data">
		              <div class="col-md-12 col-sm-8">
		                {{csrf_field()}}
		                <div class="sky-form nomargin">
							<label class="h4">Import Invites</label> 
							<label for="file" class="input input-file">
								<div class="button">
									<input id="file" type="file" name="imported-file" id="mported-file"  /> Browse
								</div><input type="text" readonly>
							</label>
							<button class="btn btn-primary" type="submit">Import</button>
		          			<button class="btn btn-info">Export</button>
						</div>	
		              </div>		            
		            </form>
		          </div>
		        </div>
     		 </div>    
		</div>	
	</section>
@stop

