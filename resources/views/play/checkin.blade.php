@extends('layouts.app')
@section('style')
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
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

		//.wrapper {
		    display: block;
		}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: #fff;
    color: #000;
    transition: all 0.3s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
}

#sidebar.active {
    left: 0;
}

#dismiss {

    /*width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;*/
    /*background: #7386D5;*/
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
#dismiss:hover {
    background: #fff;
    color: #7386D5;
}

.overlay {
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    display: none;
}

#sidebar .sidebar-header {
   padding: 10px;
   background: #4285F4;
   color: #fff;
}

#sidebar ul.components {
    padding: 20px 0 10px;
    margin-left: 10px;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
    z-index: 99999 !important;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 0.85em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

#sidebar .fa {
	color: #4285F4;
}

a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.85em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
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
			 
			<!-- Sidebar Holder -->
            <nav id="sidebar" style="z-index:99999">
                <div id="dismiss" class="btn btn-default btn-sm">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    club.name
                </div>

                <ul class="list-unstyled components">                   
                    <li>
                    	<span><i class="fa fa-map"></i> club.address club.city, club.state  club.zip</span>

                    </li>
		            <li><span><i class="fa fa-phone"></i>club.phone</span></li>
		            <li><span><i class="fa fa-globe"></i>club.web</span></li>
		            <li><span><i class="fa fa-map"></i>Courts:   club.courts</span></li>
                    <li><span><i class="fa fa-car"></i>Miles Away:   club.dist.toFixed(2)</span></li>
                    <li>Total Checkins:   club.checkins_total  
		            <li>Checkins Last Hour:   club.checkins_recent</li>
		            <li>
		            	<form action='{{route('play.checkin')}}' method='POST'>
	                	    <input type='hidden' name='_token' value='{{csrf_token()}}'>
							<input type='hidden' name='club_id' value=' + club.id + '>
				            <button type='submit' action='{{route('play.checkin')}}' method='post' class='btn btn-sm btn-success margin-top-10'>Checkin</button>
				        </form>
		            </li>                  
                </ul>

                <ul class="list-unstyled components">
                	Popular Times
                   <div id="chart_sidebar">

                   </div>
                </ul>
            </nav>


            <!--Map -->
			<div class="row">
				<div class="col-sm-12 clearfix margin-bottom-30">
					<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" tooltip="Expand side panel">
		                <i class="fa fa-chevron-right"></i>
		            </button>
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

	<!-- Modal add Clubs -->
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
	                //club.info += "<div id='chart_" + club.id  + "' class='chart_div' style='width: 300px; height: 100px;'></div>";
	                club.info += "</div>";
	                
		    		var clubWindow = new google.maps.InfoWindow({
	      				content: club.info
	    			});

	    		    var marker = new google.maps.Marker({
		     	       position: c,
		     	       map: map,
		     	       icon: ico,
		     	       title: club.name
		     	    });	   	     	   


					//open marker if club within current location					     	    			     	   
		     	    if(club.dist <= minDist) {
		     	    	var m
		     	    	clubWindow.open(map,marker);
		     	    }	
		     		
		     	    google.maps.event.addListener(marker, 'click', function() {
	      				clubWindow.open(map,marker);
	    			});

	    			//google.maps.event.addListener(clubWindow, 'domready', function() {loadHistogram('chart_' + club.id)});
	    			google.maps.event.addListener(clubWindow, 'domready', function() {loadHistogram('chart_sidebar')});
	    			google.maps.event.addListener(clubWindow, 'domready', function() {loadClubInfo('chart_sidebar')});
		     	   
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
		          title: '',
		          legend: { position: 'none' },
		        };

	       		var chart = new google.visualization.Histogram(chart_id);
				chart.draw(data, options);
			}
		}
	</script>
<!-- Scrollbar Custom CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 
	<script type="text/javascript">
		$(document).ready(function () {
		  $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

		    // when opening the sidebar
		    $('#sidebarCollapse').on('click', function () {
		        // open sidebar
		        $('#sidebar').addClass('active');
		        // fade in the overlay
		        $('.collapse.in').toggleClass('in');
		        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
		    });

		   
		    // if dismiss or overlay was clicked
		    $('#dismiss, .overlay').on('click', function () {
		      // hide the sidebar
		      $('#sidebar').removeClass('active');
		
		    });
	    });
	</script>
@stop