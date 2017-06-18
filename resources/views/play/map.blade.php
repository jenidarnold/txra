@extends('layouts.app')
@section('style')
    <style type="text/css">
    	 #map {
        	height: 600px;
        	width: 100%;
       	}       	
    </style>
@stop
@section('content')		

	<section class="page-header page-header-xs">
		<div class="container">

			<h1>TEXAS CLUBS & FACILITIES</h1>
			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="#">Play</a></li>
				<li class="active">Map</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<section>
		<div class="container">
			<div class="row">
			<p>This is a list of racquetball clubs and facilities in Texas that sanction and support events with USA Racquetball and the Texas Racquetball Association. Please use this map as a guide to find and play at clubs that support racquetball in Texas.</p>
			</div>

			<div class="row">
				<div class="col-md-8 col-sm-12 clearfix margin-bottom-60">
					<div id="map"></div>
				</div>
				<div id="legend" class="col-md-4 col-sm-12">
					<h4 class="text-center">Legend</h4>
					<ul style="list-style: none;">					
					@foreach($clubs as $club)
						<li>
							<a href="#" onclick="map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} )); return false" > {{  $club->name }}</a>
							<address>
								{{ $club->address }}, {{ $club->city }}  {{ $club->zip}} <br/>
								<i class="fa fa-phone"></i> {{ $club->phone }} <a href="{{ $club->url}}" target="new"><i class="fa fa-globe"></i> Website</a> 
							</address>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>

@stop

@section('script')
 	<script>
 		var map;

      	function initMap() {
        	var mav = {lat: 32.7098963, lng: -97.1373552 };
        	//var clay = {lat: 30.4971805, lng: -97.6608585 };


        	map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 6,
          		center: mav
	    	});       
        
	      			             
	        // TODO: Get from Datatabase
			var clubs = {!! json_encode($clubs->toArray()) !!};

			// Create markers.
	    	clubs.forEach(function(club) {
	    		var c = {lat: parseFloat(club.lat), lng:  parseFloat(club.lng) };
	    		var ico = club.ico;
	     	    var marker = new google.maps.Marker({
	     	       position: c,
	     	      //icon: icons[feature.type].icon,
	     	       map: map,
	     	       icon: ico
	     	    });
	     	});
	    }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap">
	</script>


@stop