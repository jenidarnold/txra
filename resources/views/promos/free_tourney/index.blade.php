@extends('layouts.app')
@section('style')
@stop	
@section('content')
	<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="et-trophy text-warning"></i> PICK-A-FREE-TOURNEY SWEEPSTAKES</h1>
				<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li class="active">Sweepstakes</li>
				<li><a href="/contest-rules">Contest Rules</a></li>
			</ol><!-- /breadcrumbs -->
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">	
			@include('includes.promos.sweeptakes') 
		</div>  
	</section>
@stop
