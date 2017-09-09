
@extends('layouts.app')
@section('style')
@stop	
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="et-envelope text-warning"></i> INVITE </h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>			
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		<div class="container">

			<!-- make use of the named route so that if the URL ever changes, 
			 the form will not break #winning -->			 
			<form action="{{ route('invite') }}" method="post">
			    {{ csrf_field() }}
			    <input type="email" name="email" />
			    <input type="text" name="first_name" />
			    <input type="text" name="last_name" />
			    <button type="submit">Send invite</button>
			</form>
		</div>
	</section>
@stop