@extends('layouts.app')
@section('style')
@stop	
@section('content')
	<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="et-trophy text-warning"></i> PICK-A-FREE-TOURNEY SWEEPSTAKES</h1>
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">	
			@include('includes.promos.sweeptakes') 
		</div>  
	</section>
@stop
