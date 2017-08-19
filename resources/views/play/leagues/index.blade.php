@extends('layouts.app')
@section('style')
    <style type="text/css">
    .info-bar p {
    	text-align: left;
    	color: #666;
    }
    .info-bar h3 {
    	text-align: center;
    }
    .table-borderless td,
	.table-borderless th {
		    border: 0 !important;
		}
    </style>
@stop
@section('content')
<section class="page-header page-header-sm header-md parallax parallax-3" style="background-image:url({{ asset('images/court/ymca_bandw_crop9.jpg') }}) ">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<h1>LEAGUES</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="{{ route('play.map')}}">Clubs</a></li>
			<li class="active">Leagues</li>
			<li><a href="{{ route('events.index', array('type' =>'future'))}}">Tournaments</a></li>
		</ol><!-- /breadcrumbs -->

	</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">
				TODO: List leagues in Texas

				have a create form. for league runners to enter their info.
				grab code from rballhub
		</div>
	</section>
@stop