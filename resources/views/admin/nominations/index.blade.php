@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3><i class="fa fa-users"></i> Nominations</h3>
		        </div>
		        <div class="col-sm-12">
		        	<button type="button" class="btn btn-sm btn-primary">Total <span class="badge">{{ $stats->total}}</span></button>
		        	<button type="button" class="btn btn-sm btn-success">New <span class="badge">{{ $stats->new}}</span></button>		        	
		        </div>
		        <br/>
		    </div>		 
     		 <div class="row">
		        <div class="table-responsive col-sm-12">
		        	<table class="table table-condensed">
		        		<tr>
		        			<th>ID</th>
		        			<th>Category</th>
		        			<th>Nominee</th>
		        			<th>Comments</th>
		        			<th>Proposer</th>
		        			<th>Email</th>
		        			<th>Phone</th>
		        			<th>Created At</th>
		        		</tr>
		        		@foreach($nominations as $nomination)

		        		@if($nomination->created_at >= \Carbon\Carbon::today()->subDays(7))
		        		<tr class="alert-success">
		        		@else
		        		<tr>
		        		@endif
		        			{{-- <td><a href="{{route('admin.nominations.edit', $user->id)}}" class="btn btn-xs btn-info">Edit</a></td> --}}
		        			<td>{{$nomination->id}}</td>
		        			<td>{{$nomination->category}}</td>
		        			<td>{{$nomination->nominee_full_name}}</td>      			
		        			<td>{{$nomination->comments}}</td>
		        			<td>{{$nomination->proposer_full_name}}</td>   
		        			<td>{{$nomination->proposer_email}}</td>		        			
		        			<td>{{$nomination->proposer_phone}}</td>
		        			<td>{{$nomination->created_at}}</td>
		        		</tr>
		        		@endforeach
		        	</table>
		        </div>	
	        </div>	
			<div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$nominations->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			{{-- <div class="row">
		        <div class="col-md-8">
		          <div class="row">
		            <form action="{{route('import.users')}}" method="post" enctype="multipart/form-data">
		              <div class="col-md-6 col-sm-8">
		                {{csrf_field()}}
		                <div class="sky-form nomargin">
							<label class="h4">Import Users</label> 
							<label for="file" class="input input-file">
								<div class="button">
									<input id="file" type="file" name="imported-file" id="mported-file"  /> Browse
								</div><input type="text" readonly>
							</label>
		          			<button class="btn btn-info">Export</button>
						</div>	
		              </div>		            
		            </form>
		          </div>
		        </div>
     		 </div>      --}}

	</section>
@stop

