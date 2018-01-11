@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3>Invites</h3>
		        </div>
		        <div class="col-sm-12">
		        	<button type="button" class="btn btn-sm btn-primary">Total <span class="badge">{{ $stats->total}}</span></button>
		        	<button type="button" class="btn btn-sm btn-info">Sent <span class="badge">{{ $stats->sent}}</span></button>
		        	<button type="button" class="btn btn-sm btn-default">Unsent <span class="badge">{{ $stats->unsent}}</span></button>
		        	<button type="button" class="btn btn-sm btn-success">Accepted <span class="badge">{{ $stats->accepted}}</span></button>
		        	<button type="button" class="btn btn-sm btn-danger">Pending <span class="badge">{{ $stats->pending}}</span></button>
		        </div>
		        <br/>
		    </div>
     		<div class="row">
		        <div class="table-responsive col-sm-12">
		        	<table class="table table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>Last</th>
		        			<th>First</th>
		        			<th>Email</th>
		        			<th>Sent</th>
		        			<th>Accepted</th>
		        			<th>Updated</th>
		        			{{-- <th>Token</th> --}}
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
		        			<td title="{{$invite->token}}">{{$invite->email}}</td>	
		        			<td>{{$invite->sent_at}}</td>
		        			<td>{{$invite->accepted_at}}</td>
		        			<td>{{$invite->updated_at}}</td>
		        			{{-- <td>{{$invite->token}}</td> --}}
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
									<input id="file" type="file" name="imported-file" id="imported-file"  /> Browse
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

