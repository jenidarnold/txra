
@extends('layouts.app')
@section('style')
@stop	
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="et-envelope text-warning"></i> REFER YOUR FRIENDS </h1>
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- -->
	<section>
		@include('includes.refer')
	</section>
@stop