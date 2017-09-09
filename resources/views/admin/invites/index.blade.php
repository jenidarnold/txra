@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">		
		<div class="container">
			<h1><i class="fa fa-user-circle"></i> ADMIN <i class="fa fa-chevron-right"></i> Invites</h1>			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li class="active">Invites</li>
				<li><a href="{{route('admin.users')}}">Users</a></li>
			</ol><!-- /breadcrumbs -->		
		</div>
	</section>
	<!-- /PAGE HEADER -->
	<!-- -->
	<section>
		<div class="container">
			<div class="row">
		        <div class="col-md-8">
		          <div class="row">
		            <form action="{{route('import.users')}}" method="post" enctype="multipart/form-data">
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
		        		</tr>
		        	@foreach($invites as $invite)
		        		<tr>
		        			<td>{{$invite->last_name}}</td>
		        			<td>{{$invite->first_name}}</td>
		        			<td>{{$invite->email}}</td>	
		        			<td>{{$invite->token}}</td>
		        			<td>{{$invite->accepted}}</td>
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
		</div>	
	</section>
@stop

