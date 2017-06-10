@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">

		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb-inverse">
			<li><a href="#">EVENTS</a></li>
			<li class="active">LIVE</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<section>
	<!-- EVENT SLIDER-->
	@include('includes.eventslider', array('event_type' => 'LIVE') )    	
	<!-- /EVENT SLIDER -->
</section>


@stop