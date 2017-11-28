@extends('layouts.app')
@section('style')
@stop	
@section('content')
	<section class="page-header page-header-xs">
		<div class="container">
			<h1><i class="fa fa-share-alt-square text-primary"></i>  Refer-A-Friend Program: How It Works</h1>
	
			{{-- <!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Gallery</li>		
				<li><a href="/forms/awards/nominate/">Nominations</a></li>					
			</ol><!-- /breadcrum --}}
		</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		@include('includes.refer_faq')
	</section>
@stop
