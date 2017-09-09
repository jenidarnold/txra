@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">		
		<div class="container">
			<h1><i class="fa fa-user-circle"></i> ADMIN</h1>			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li class="active">Index</li>
				<li><a href="{{route('admin.invites')}}">Invites</a></li>
				<li><a href="{{route('admin.invites')}}">Users</a></li>
				<li><a href="{{route('admin.invites')}}">Rankings</a></li>
				<li><a href="{{route('admin.invites')}}">Events</a></li>
			</ol><!-- /breadcrumbs -->		
		</div>
	</section>
	<!-- /PAGE HEADER -->
	<!-- -->
	<section>
		<div class="container">
			<div class="row">
				<ul>
					<li><a href="{{route('admin.invites')}}">Invites</a></li>
					<li><a href="{{route('admin.invites')}}">Users</a></li>
					<li><a href="{{route('admin.invites')}}">Rankings</a></li>
					<li><a href="{{route('admin.invites')}}">Events</a></li>
				</ul>

			</div>	
		</div>
	</section>
@stop