@extends('layouts.app')
@section('style')
	<style>
		.mem_logo {
			background-color: white;
			min-height: 125px;
			display: inline-block;
		}	

		.mem_logo img {
			vertical-align: middle;			
		}

	</style>
@stop
@section('content')		

	<section class="page-header page-header-xs">
		<div class="container">

			<h1><i class="fa fa-credit-card"></i> Memberships</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="{{route('members.listing')}}">Members</a></li>
				<li class="active">Memberships</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

<div class="row pricetable-container">

	<div class="col-md-5th price-table">
		<h3>Indoor (USAR)</h3>
			<div class="mem_logo">
				<img src="{{ asset('images/logos/usar-fast-fun-fitness_logo_1332_normal.jpg')}}">
			</div>
		<ul>
			<li>1 yr, 3 yr, & lifetime</li>
			<li>Limited Event</li>
			<li>Collegiate and Junior</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?cartID=&productGroupID=45&categoryID=129&brandID=102&TID=&userLoginID=&UID=" class="btn btn-primary" target="new">LEARN MORE</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>Military (MRF)</h3>
			<div class="mem_logo">
				<img src="{{ asset('images/logos/mrf_logo_1083_normal.jpg')}}">
			</div>
		<ul>
			<li>Free membership!</li>
			<li>Military players only</li>
			<li>&nbsp;</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?cartID=&productGroupID=45&categoryID=135&brandID=102&TID=&userLoginID=&UID=" class="btn btn-primary" target="new">LEARN MORE</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>LPRT</h3>
		<div class="mem_logo">
			<img src="{{ asset('images/logos/lprt_391_normal.jpg')}}">
		</div>
		<ul class="pricetable-items">
			<li>Women's Pro Tour</li>
			<li>1 Year Membership</li>
			<li>Limited Event</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?productGroupID=45&categoryID=184&cartID=" class="btn btn-primary" target="new">LEARN MORE</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>Outdoor (WOR)</h3>
		<div class="mem_logo" style="background-color:black">
			<img src="{{ asset('images/logos/wor_logo_2224_normal.jpg')}}">
		</div>
		<ul>
			<li>$15 annually</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartProduct.asp?productGroupID=45&categoryID=130&brandID=0&modelID=746&cartID=" class="btn btn-primary" target="new">LEARN MORE</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>NMRA</h3>
		<div class="mem_logo">
			<img src="{{ asset('images/logos/nmralogogif_457_normal.jpg')}}">
		</div>
		<ul>
			<li>3 year membership</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>			
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?productGroupID=45&categoryID=172&cartID=" class="btn btn-primary" target="new">LEARN MORE</a>
	</div>

</div>
@stop