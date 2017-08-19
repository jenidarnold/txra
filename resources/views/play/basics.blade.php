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
		<h1>THE BASICS</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Basics</li>
			<li><a href="{{ route('play.rules')}}">Rules</a></li>
			<li><a href="{{ route('play.levels')}}">Skill Levels</a></li>
		</ol><!-- /breadcrumbs -->

	</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">
			<div class"row">
				<h5>Here are various links that best explain the game of Racquetball </h5>
			</div>

			<table class="table table-condensed table-borderless">
			@foreach($sites as $s)
			  	<tr>
			  		<td width="200px">						
						<a href="{{ $s['hybridGraph']['url']}}" target="new">
							<img class="img-responsive1 img-thumbnail" width="200px" src="{{ $s['hybridGraph']['image'] }}">
						</a>
					</td>
					<td>
						<h4><a href="{{ $s['hybridGraph']['url']}}" target="new">{{$s['hybridGraph']['title']}}</a></h4>				
						<p class="list-group-item-text"> {{ $s['hybridGraph']['description']}}</p>
					</td>
				</tr>	
			@endforeach	
			</table>	

		</div>
	</section>


{{-- 	<section>
		<div class="container">
			<h3>RACQUETBALL EQUIPMENT</h3>			
			<!-- 
				INFO BAR 
				inside .container
			-->
			<div class="info-bar info-bar- info-bar-bordered">
				<div class="container">
					<div class="row">					
						<div class="col-md-5th col-sm-6 col-xs-10">
							<img class="img-responsive" src="{{ asset('images/equipment/racquet_gb.jpg')}}" alt="">	
							<h3>RACQUET</h3>
							<p>Cost anywhere from $20-$200. Depends on budget, and willingness to pay for feel and technology.</p>	
						</div>

						<div class="col-md-5th col-sm-6 col-xs-10">
							<img class="img-responsive" src="{{ asset('images/equipment/eyewear.jpg')}}" alt="">	
							<h3>EYEWEAR</h3>
							<p>Recommended and important, helps reduce the risk of injury if you are hit in the eye</p>		
						</div>

						<div class="col-md-5th col-sm-6 col-xs-10">
							<img class="img-responsive" src="{{ asset('images/equipment/balls.jpg')}}" alt="">	
							<h3>BALL</h3>
							<p>Balls come in different colors such as blue, green, lavender and black. Any color will do.</p>
						</div>

						<div class="col-md-5th col-sm-6 col-xs-10">
							<img class="img-responsive" src="{{ asset('images/equipment/glove.jpg')}}" alt="">	
							<h3>GLOVE</h3>
							<p>Optional, this will help you keep a firm grip on the racquet during those fast rallies.</p>
						</div>

						<div class="col-md-5th col-sm-6 col-xs-10">
							<img class="img-responsive" src="{{ asset('images/equipment/shoes.jpg')}}" alt="">	
							<h3>SHOES</h3>
							<p>Any type of indoor court or tennis shoe, there are shoes designed specifically for racquetball</p>
						</div>					
					</div>
				</div>
			</div>
			<!-- /INFO BAR -->						
		</div>			
	</section> --}}

</section>
<!-- / -->
@stop