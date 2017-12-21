@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
		<div class="">
			<div class="row" style="margin-bottom:20px">
		        <div class="col-sm-12">
		       		<h3><i class="fa fa-users"></i> Users</h3>
		        </div>
		        <div class="col-sm-12">
		        	<button type="button" class="btn btn-sm btn-primary">Total <span class="badge">{{ $stats->total}}</span></button>
		        	<button type="button" class="btn btn-sm btn-success">New <span class="badge">{{ $stats->new}}</span></button>
		        	<button type="button" class="btn btn-sm btn-warning">Not Linked <span class="badge">{{ $stats->not_linked}}</span></button>
		        	<button type="button" class="btn btn-sm btn-info">Prof Comp<span class="badge">{{ $stats->profile_comp}}</span></button>
	        		<button type="button" class="btn btn-sm btn-info">Prof Avg <span class="badge">{{ round($stats->profile_avg,1 )}}</span></button>
		        </div>
		        <br/>
		    </div>		 
     		 <div class="row">
		        <div class="table-responsive col-sm-12">
		        	<table class="table table-condensed">
		        		<tr>
		        			<th></th>
		        			<th>ID</th>
		        			<th>USAR ID</th>
		        			<th>Last Name</th>
		        			<th>First Name</th>
		        			<th>Email</th>
		        			<th>Prof%</th>
		        			<th>Disabled</th>
		        			<th>Created At</th>
		        		</tr>
		        		@foreach($users as $user)

		        		@if($user->created_at >= \Carbon\Carbon::today()->subDays(7))
		        		<tr class="alert-success">
		        		@elseif($user->usar_id == 0)
						<tr class="alert-warning">
		        		@else
		        		<tr>
		        		@endif
		        			<td><a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-xs btn-info">Edit</a></td>
		        			<td>{{$user->id}}</td>
		        			<td>{{$user->usar_id}}</td>
		        			<td>{{$user->last_name}}</td>
		        			<td>{{$user->first_name}}</td>
		        			<td>{{$user->email}}</td>		        			
		        			<td>
		        			@if($user->profile() !== null)
		        				{{\App\UserProfile::find($user->profile['id'])['progress']}}
		        			@endif
		        			</td>		
		        			<td>{{$user->disabled}}</td>
		        			<td>{{$user->created_at}}</td>
		        		</tr>
		        		@endforeach
		        	</table>
		        </div>	
	        </div>	
			<div class="row text-center">
				<ul class="pagination pagination-lg pagination-simple">
				{{$users->links()}}
				<!-- Pagination Default -->				
				</ul>
				<!-- /Pagination Default -->
			</div>	
			<div class="row">
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
							<button class="btn btn-primary" type="submit">Import</button>
		          			<button class="btn btn-info">Export</button>
						</div>	
		              </div>		            
		            </form>
		          </div>
		        </div>
     		 </div>     

	</section>
@stop

