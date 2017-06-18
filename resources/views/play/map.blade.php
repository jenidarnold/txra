@extends('layouts.app')
@section('style')
    <style type="text/css">
    	 #map {
        	height: 400px;
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
			<div>
			<p>This is a list of racquetball clubs and facilities in Texas that sanction and support events with USA Racquetball and the Texas Racquetball Association. Please use this map as a guide to find and play at clubs that support racquetball in Texas.</p>
			</div>

			<div class="clearfix margin-bottom-60">
				<div id="map"></div>
			</div>
		</div>
	</section>

@stop

@section('script')
 	<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap">
	</script>

 	<script>
      function initMap() {
        var mav = {lat: 32.7098963, lng: -97.1373552 };
        var clay = {lat: 30.4971805, lng: -97.6608585 };


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: mav
        });       

        //Hardcoded markers
         var marker = new google.maps.Marker({
          position: mav,
          map: map
        });
        
		var marker = new google.maps.Marker({
          position: clay,
          map: map
        });
        

        // TODO: Get from Datatabase
		// var clubs ={! ! json_encode($clubs->toArray()) !!};
		// Create markers.
    	//clubs.forEach(function(club) {
    	//	console.log('club:' + club.position);
     	//    var marker = new google.maps.Marker({
     	//       position: club.position,
     	//      //icon: icons[feature.type].icon,
     	//       map: map
     	//    });
     	//});
      }

    </script>

@stop