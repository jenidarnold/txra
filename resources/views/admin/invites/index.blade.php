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
		            <form action="{{route('import.invites')}}" method="post" enctype="multipart/form-data">
		              <div class="col-md-6 col-sm-8">
		                {{csrf_field()}}
		                <div class="sky-form nomargin">
							<label class="h4">Import</label> 
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
     		 <div class="row">
		        <div class="col-sm-12">
		        	<table class="table table-striped table-condensed">
		        		<tr>
		        			<th>Last Name</th>
		        			<th>First Name</th>
		        			<th>Email</th>
		        			<th>Token</th>
		        			<th>Accepted</th>
		        			<th>Accepted At</th>
		        			<th></th>
		        		</tr>
		        	@foreach($invites as $invite)
		        		<tr>
		        			<td>{{$invite->last_name}}</td>
		        			<td>{{$invite->first_name}}</td>
		        			<td>{{$invite->email}}</td>	
		        			<td>{{$invite->token}}</td>
		        			<td>{{$invite->accepted}}</td>
		        			<td>{{$invite->accepted_at}}</td>
		        			<td><a href="{{route('invite.send', $invite->id)}}" class='btn btn-sm btn-success'>Send</a></td>
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
		</div>	
	</section>
@stop

