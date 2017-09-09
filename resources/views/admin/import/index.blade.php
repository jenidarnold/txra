@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">		
		<div class="container">
			<h1><i class="fa fa-user-circle"></i> ADMIN <i class="fa fa-chevron-right"></i> Import</h1>			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li class="active">Import</li>
				{{-- <li><a href="{{route('download.rankings')}}">Rankings</a></li> --}}
				{{-- <li><a href="{{route('download.events')}}"> Events</a></li> --}}
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
		              <div class="col-md-4 col-sm-8">
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
		        <div class="col-md-2">
		        </div>
     		 </div>
		</div>	
	</section>
@stop