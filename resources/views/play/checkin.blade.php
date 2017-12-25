@extends('layouts.app')
@section('style')
    <style type="text/css">
    	 #map {
        	height: 600px;
        	width: 100%;
       	}       	
       	#legend {
		    font-family: Arial, sans-serif;
		    background: #fff;
		    padding: 10px;
		    margin: 10px;
		    border: 2px solid #000;
	  	}
		#legend .icon {
		  	width: 22px;
		}
		
		.club_detail {
		  	height: 200px;
		}
		
		#search {
			background-color: #fff;
			margin-left: 10px;
			top:10px;
			left:110px;
			font-weight: 500;
		}
		.modal-body {
			height: 500px;
			overflow-y: auto;
		}
    </style>
@stop
@section('content')		

	<section class="page-header page-header-xs hidden-xs">
		<div class="container">

			<h1>TEXAS CLUBS & FACILITIES</h1>
			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Clubs</li>
				{{-- <li><a href="{{ route('play.leagues.index')}}">Leagues</a></li> --}}
				<li><a href="{{ route('events.index', array('type' =>'future'))}}">Tournaments</a></li>

			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

	<!-- Find Google Maps coordinates - fast and easy! -->
	<!-- http://www.mapcoordinates.net/en -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 margin-bottom-20">
					<div id="test_div"></div>
				</div>
			</div>



			<div class="row">
				<div class="col-sm-12 clearfix margin-bottom-30">
					<div id="map" class="thumbnail"></div>
					<div id="search" class="searchbox">					
						<button class="btn" data-toggle="modal" data-target="#modClubs">
							<i class="fa fa-bars"></i> <span class="small">List Clubs</span>
						</button>
						
					</div>
					{{-- <div id="legend"><h4>Legend</h4></div> --}}
				</div>				
			</div>
		</div>
	</section>
	<div class="modal fade" id="modAddClub" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h3 class="modal-title text-center">Add a Racquetball Club</h3>
	      	    </div>	      	    
		        <div class="modal-body">
		         	@if( Auth::guest())		         		
		         		<center>
		         		<div class="alert alert-warning margin-top-10">
		         			Please <a href="/login">Login</a> for access to add clubs.
	         			</div>
	         			</center>
		         	@else
    					@include('includes.club_create') 
    				@endif 
		        </div>
	        </div>
        </div>
    </div>
	 <!-- Modal List Clubs-->
	<div class="modal fade" id="modClubs" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h3 class="modal-title text-center">Racquetball Clubs & Facilities Directory</h3>
		          	<h5 class="text-primary text-center">
		          		If you don't see a club or facility on our map, please help us out. 
		          		<a href="#" data-toggle="modal" data-target="#modAddClub" data-dismiss="modal" class="btn btn-xs btn-success"> Add to the map.</a>
	          		</h5>
          		</div>
	        	<div class="modal-body">
				<div class="navbar-collapse nav-filter-collapse">
						<ul class="nav nav-pills mix-filter margin-bottom-10">
							<li data-filter="all" class="filter active"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('all') }}"/> All</a></li>
							<li data-filter="support" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('support') }}"/> Supports USAR</a></li>
							<li data-filter="college" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('college')  }}"/> College</a></li>
							<li data-filter="club" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('club')  }}"/> Club</a></li>
							<li data-filter="military" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('military') }}"/> Military</a></li>
							<li data-filter="rec" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('rec') }}"/> Rec Center</a></li>
							<li data-filter="ymca" class="filter"><a href="#"><img src="{{ \App\Club::get_map_icon_legend('ymca') }}"/> YMCA</a></li>
						</ul>
						<hr/>
						<div id="portfolio" class="clearfix fullwidth portfolio-gutter">
						<div class="mix-grid">	
							@foreach($clubs as $club)
								<div class="portfolio-item col-sm-6 club_detail mix {{$club->map_icon}}">
									<div class="item-box">
										<div style="float:left; padding-right:2px">
											<a href="#" onclick="map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} ); map.setZoom(17); map.panTo({{ $club->lat }}, {{ $club->lng }} ); return false;" > 
												<img style="height:28px" src={{asset($club->ico)}} />	
											</a>
										</div>
										<div>
											<a href="#"  data-dismiss="modal" onclick="map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} )); return false" > 
												{{  $club->name }}
											</a>
											<address style="padding-left:28px">
												{{ $club->address }} <br/>
												{{ $club->city }}  {{ $club->zip}} <br/>
												<i class="fa fa-phone"></i> {{ $club->phone }} <br/>
												@if($club->url <> '')
													<a href="{{ $club->url}}" target="new" class="text-info" ><i class="fa fa-globe"></i> 
													{{ substr( explode("//", $club->url)[1], 0, 31) }}
													@if(strlen($club->url) > 31)
													...
													@endif
													</a>
												@endif
											</address>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						</div>
					</div>				 						
				</div>
				</div>
			</div>
		</div>
	</div>

@stop

@section('script')
 	<script>
 		var map;
 		var infoWindow;
 		var geocoder;
 		
      	function initMap() {
        	var mav = {lat: 32.7098963, lng: -97.1373552 };
			var clubs = {!! json_encode($clubs->toArray()) !!};
        	var mypos = {lat: 0, lng: 0 };

        	map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 15,
          		center: mav
	    	});       	

        	infoWindow = new google.maps.InfoWindow({
        		pixelOffset: new google.maps.Size(0, -30)
        	});

    		geocoder = new google.maps.Geocoder();
    
    		// Try HTML5 geolocation.
	        // https://google-developers.appspot.com/maps/documentation/javascript/geolocation
	        if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(function(position) {
	            mypos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };

	    		var ico = '../images/mapicons/sports/racquet.png';	    		
	            var marker = new google.maps.Marker({
	     	       position: mypos,
	     	      //icon: icons[feature.type].icon,
	     	       map: map,
	     	       icon: ico,
	     	       title: "You are here"
	     	    });	 
	       
	            infoWindow.setPosition(mypos);
	            infoWindow.setContent('You are here');
	            infoWindow.open(map);
	            map.setCenter(mypos);

    			// Create markers.
		    	clubs.forEach(function(club) {
		    		var c = {lat: parseFloat(club.lat), lng:  parseFloat(club.lng) };
		    		var ico = club.ico;	     	    		     	   

		    		var clubCord = new google.maps.LatLng(c.lat, c.lng);
	    			var myCord = new google.maps.LatLng(mypos.lat, mypos.lng);
		     	    club.dist = google.maps.geometry.spherical.computeDistanceBetween (clubCord, myCord) * 0.000621371; // meters to miles		
  
  					var minDist = 0.5;		
		    		club.info = "<div class='clubInfo'>"
				        + "<h6>" + club.name + "</h6>"
	                    + "<address style='margin-bottom:10px'>"
	                    + club.address + "<br/>"
	                    + club.city + ", " + club.state + " " + club.zip + "<br/>"
	                    + club.phone + "<br/>"
	                    + "Courts: " + club.courts + "<br/>"
	                    + "</address>"
	                    + "<span class='text-danger bold'>Miles Away: " + club.dist.toFixed(2) + "</span><br/>"
	                    + "<span class='text-primary bold'>Total Checkins: " + club.checkins_total + "</span><br/>"
	                    + "<span class='text-success bold'>Checkins Last Hour: " + club.checkins_recent + "<span>"
	                    ;

	                if(club.dist <= minDist) {
	                	club.info += "<form action='{{route('play.checkin')}}' method='POST'>"
	                	    + "<input type='hidden' name='_token' value='{{csrf_token()}}'>"
							+ "<input type='hidden' name='club_id' value='" + club.id + "'>"
				            + "<button type='submit' action='{{route('play.checkin')}}' method='post' class='btn btn-sm btn-success margin-top-10'>Checkin</button><br/>"
				            + "</form>";
	                }
	                club.info += "<div id='chart_" + club.id  + "' class='chart_div' style='width: 300px; height: 100px;'></div>";
	                club.info += "</div>";
	                
		    		var clubWindow = new google.maps.InfoWindow({
	      				content: club.info
	    			});

	    		    var marker = new google.maps.Marker({
		     	       position: c,
		     	      //icon: icons[feature.type].icon,
		     	       map: map,
		     	       icon: ico,
		     	       title: club.name
		     	    });	   	     	   

					//open marker if club within current location					     	    			     	   
		     	    if(club.dist <= minDist) {
		     	    	clubWindow.open(map,marker);
		     	    }	
		     		
		     	    google.maps.event.addListener(marker, 'click', function() {
	      				clubWindow.open(map,marker);
	    			});

	    			google.maps.event.addListener(clubWindow, 'domready', function() {loadHistogram('chart_' + club.id)});
		     	   
		     	});

	          }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	          });
	        } else {
	          // Browser doesn't support Geolocation
	          handleLocationError(false, infoWindow, map.getCenter());


	        }


	    	// Create Legend	
	    	
	    	var iconBase = '../images/mapicons/';
	        var icons = {
	          support: {
	            name: 'Supports USAR',
	            icon: iconBase + 'sports/racquet.png'
	          },
	          club: {
	            name: 'Club',
	            icon: iconBase + 'numbers/number_1.png'
	          },
	          college: {
	            name: 'College',
	            icon: iconBase + 'letters/letter_c.png'
	          },
	          military: {
	            name: 'Military',
	            icon: iconBase + 'letters/letter_m.png'
	          },
	          rec: {
	            name: 'Rec Center',
	            icon: iconBase + 'letters/letter_r.png'
	          },
	          ymca: {
	            name: 'YMCA',
	            icon: iconBase + 'letters/letter_y.png'
	          }
	        };


	  	    var search = document.getElementById('search');	
    		map.controls[google.maps.ControlPosition.LEFT_TOP].push(search);	       
	     			   
	    }

	    //geocode look up
    	// https://developers.google.com/maps/documentation/javascript/geocoding#GeocodingRequests
	    function codeAddress() {

		    var address = document.getElementById('address').value;
		    var city = document.getElementById('city').value;
		    var state = document.getElementById('state').value;

		    address = address + ' ' + city + ' ' + state;

		    geocoder.geocode( { 'address': address}, function(results, status) {
		      if (status == 'OK') {
		        var lat = document.getElementById('lat');
		        var lng = document.getElementById('lng');

		        console.log(results[0].geometry.location.lat());
		        lat.value = results[0].geometry.location.lat();
		        lng.value =results[0].geometry.location.lng();
		        
		      } else {
		        console.log('Geocode was not successful for the following reason: ' + status);
		      }
	      	});
	      }		

	    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	        infoWindow.setPosition(pos);
	        infoWindow.setContent(browserHasGeolocation ?
	                              'Error: The Geolocation service failed.' :
	                              'Error: Your browser doesn\'t support geolocation.');
	        infoWindow.open(map);
	      }

    </script>
    <!-- script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap"></script -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap&sensor=false&v=3&libraries=geometry">
	</script>
	<!--Charts-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>

		function loadHistogram(chart_div){
			var chart_id = document.getElementById(chart_div); 

			console.log(chart_div);

		 	google.charts.load("current", {packages:["corechart"]});
		    google.charts.setOnLoadCallback(drawChart);
	      	function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		          ['Dinosaur', 'Length'],
		          ['Acrocanthosaurus (top-spined lizard)', 12.2],
		          ['Albertosaurus (Alberta lizard)', 9.1],
		          ['Allosaurus (other lizard)', 12.2],
		          ['Apatosaurus (deceptive lizard)', 22.9],
		          ['Archaeopteryx (ancient wing)', 0.9],
		          ['Argentinosaurus (Argentina lizard)', 36.6],
		          ['Baryonyx (heavy claws)', 9.1],
		          ['Brachiosaurus (arm lizard)', 30.5],
		          ['Ceratosaurus (horned lizard)', 6.1],
		          ['Coelophysis (hollow form)', 2.7],
		          ['Compsognathus (elegant jaw)', 0.9],
		          ]
		          );

		        var options = {
		          title: 'Lengths of dinosaurs, in meters',
		          legend: { position: 'none' },
		        };

	       		var chart = new google.visualization.Histogram(chart_id);
				chart.draw(data, options);
			}
		}
	</script
@stop