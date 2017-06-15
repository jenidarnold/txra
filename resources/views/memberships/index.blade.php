@extends('layouts.app')
@section('style')
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
			
			<img src="{{ asset('images/logos/usar-fast-fun-fitness_logo_1332_normal.jpg')}}">
		
		<ul>
		<li>1 year, 3 year, and lifetime memberships</li>
			<li>limited event membership</li>
			<li>collegiate and peewee</li>
			<li>and more</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?cartID=&productGroupID=45&categoryID=129&brandID=102&TID=&userLoginID=&UID=" class="btn btn-primary" target="new">SIGN UP</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>Military (MRF)</h3>
		
		<img src="{{ asset('images/logos/mrf_logo_1083_normal.jpg')}}">
		
		<ul>
			<li>Free membership!</li>
			<li>Military racquetball players only</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?cartID=&productGroupID=45&categoryID=135&brandID=102&TID=&userLoginID=&UID=" class="btn btn-primary" target="new">SIGN UP</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>LPRT</h3>
		<img src="{{ asset('images/logos/lprt_391_normal.jpg')}}">
		
		<ul class="pricetable-items">
			<li>Women's Pro Tour</li>
			<li>Limited Event</li>
			<li>1 Year Membership</li>
		</ul>
		<a href="#" class="btn btn-primary">SIGN UP</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>Outdoor (WOR)</h3>
		
		<img src="{{ asset('images/logos/wor_logo_2224_normal.jpg')}}">
		
		<ul>
			<li>$15 annually</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartProduct.asp?productGroupID=45&categoryID=130&brandID=0&modelID=746&cartID=" class="btn btn-primary" target="new">SIGN UP</a>
	</div>

	<div class="col-md-5th price-table">
		<h3>NMRA</h3>

		<img src="{{ asset('images/logos/nmralogogif_457_normal.jpg')}}">
		
		<ul>
			<li>3 year membership</li>
		</ul>
		<a href="http://www.usaracquetballevents.com/cartCategory.asp?productGroupID=45&categoryID=172&cartID=" class="btn btn-primary" target="new">SIGN UP</a>
	</div>

</div>
@stop