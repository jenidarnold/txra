@extends('layouts.app')
@section('style')
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
   	<link href="{{asset('plugins/slider.swiper/dist/css/swiper.min.css')}}" rel="stylesheet" type="text/css" />
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

		.wrapper {
		    display: block;
		}

		#frmCheckin {
			margin: 0px;
		}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
#sidebar {
    /*width: 250px;*/
    position: fixed;
    top: 0;
    left: -1000px;
    height: 100vh;
    z-index: 1000;
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

#sidebar .sidebar-image {
   /*height: 100px;
   overflow: hidden;
   */  
}

#sidebar {
	padding: 0px;
}

#sidebar ul.components {
    padding: 10px 0 0px;
    margin-left: 5px;
    margin-right: 5px;
    border-bottom: none !important;
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
	margin-right: 5px;
	min-width: 16px;
}

#menu_div #club_div {
	padding-left: 5px;
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

ul {
	margin-bottom: 0px;
}

ul ul a {
    font-size: 0.85em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

.club-padding {
	padding-left: 5px !important;
	padding-right: 0px !important;
}

.club-image {
	/*position: relative; 
  	top: -42px;
  	left: 0px;*/
  	width: 100%;
  	/*height: 283px;*/
}

.fa-map-marker {
	color: #F75448 !important; 
}
/*----------------------
	FLEX SLIDER STYLE
-----------------------*/
	.flex-control-nav{
		display: none !important; 
	}

	.flex-direction-nav li a {
		padding: 0px !important;
	}

	.flex-next, .flex-prev {
		font-size: 34px !important;
	}
    </style>
@stop
@section('content')		

	<!-- Find Google Maps coordinates - fast and easy! -->
	<!-- http://www.mapcoordinates.net/en -->
	<section>
		<div class="container-fluid">
			
			<!-- Sidebar Holder -->
            <nav id="sidebar" class="col-xs-12 col-sm-6 col-md-5 col-lg-4" style="z-index:1000">
                <div id="dismiss" class="btn btn-default btn-xs">
                    <i class="fa fa-chevron-left"></i>
                </div>

                <div id="menu_div" class="">
                	<div class="sidebar-header">
	                    <h4 class="text-white">Clubs & Facilities</h4>
	                    <a href="#" data-toggle="modal" data-target="#modAddClub" data-dismiss="modal" class="text-white"> Add to the map</a>	                    
	                </div>

	                @php ($i=0)
		        	@foreach($clubs as $club)
		        		@php ($i+=1)
		        		@php ($club->num = $i)
						<div class=" col-sm-12  ">
							<div class="itembox" >								
								{{-- <div style="float:left; padding-right:2px">
									<a href="#" data-dismiss="modal" onclick="showClub({{$club}}); map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} )); return false" > 
										<img style="height:28px" src={{asset($club->ico)}} />
									</a>
								</div> --}}
								<div class="row" style="margin-bottom:0px">									
									<div class="col-xs-10 col-sm-12 col-md-9 club-padding " style="margin-bottom:0px">
										<a href="#" class="text-danger" data-dismiss="modal" onclick="showClub({{$club}}); map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} )); return false" > 
											<span class='btn btn-xs btn-danger'>{{$i}}</span> {{ $club->name }}
										</a>
						
										<ul class="list-unstyled components">                   
						                    <li><div id=""><i class="fa fa-map-marker"></i> {{ $club->address }}, {{ $club->city }}</div></li>	
								            <li><div id=""><i class="fa fa-cube"></i> {{ $club->courts }} court(s)</div></li>
						                    <li><div id=""></div></li>
						                    {{-- <li><div id=""><i class="fa fa-male"></i> {{ $club->checkins_total }} check-ins total</div></li>   --}}
						                    <li><div id=""><i class="fa fa-clock-o"></i> {{ $club->checkins_recent }} check-ins in the last hour</div></li>
					                    </ul>
					                </div>
					                <div class="col-md-2  hidden-xs hidden-sm club-padding">
					                @if($club->image != '')
										<img src="{{ $club->image }}" class="img-responsive" />					                	
									@endif
									</div>
								</div>								
							</div>
							<hr/>
						</div>
					@endforeach
                </div>

                <div id="club_div" class="hide">
                	<div id="club_image" class="sidebar-image"></div>
	                <div class="sidebar-header">	               
	                    <div id="club_name" class="h4 text-white"></div>	                    
	                	<a href="#" onclick="listClubs(); return false;" class="text-white">
	                		<i class="fa fa-chevron-left text-white"></i> Back to lists of clubs
                		</a>
	                </div>
	                <ul class="list-unstyled components">  
	                    <li><div id="club_addr"></div></li>
			            <li><div id="club_phone"></div></li>
			            <li><div id="club_url"></div></li>
			            <li><div id="club_courts"></div></li>
	                    <li><div id="club_dist"></div></li>
	                    <li><div id="club_checkin_total"></div></li>  
	                    <li><div id="club_checkin_recent"></div></li>
			            <li lass="text-center">
			            	<form action='{{route('play.checkin')}}' method='POST'>
		                	    <input type='hidden' name='_token' value='{{csrf_token()}}'>
								<input type='hidden' id="club_id" name='club_id' value="">
								<input type='hidden' id="gtz_offset" name='gtz_offset' value="">
					            <button id="btnCheckin" type='submit' title="Check-ins are allowed when you are within 0.5 miles of a club" class='btn btn-sm btn-success margin-top-10'>Check In</button>
					        </form>
			            </li>                  
	                </ul>
	                <hr style="margin:0px;">
	                <ul class="list-unstyled">
	                	<center>
	                		Popular Times
	                		<select id="dayofweek" class="input input-sm">
	                			<option value="6">Sunday</option>
	                			<option value="0">Monday</option>
	                			<option value="1">Tuesday</option>
	                			<option value="2">Wednesday</option>
	                			<option value="3">Thursday</option>
	                			<option value="4">Friday</option>
	                			<option value="5">Saturday</option>
	                		</select>

	                	</center>
						<div  class="flexslider" data-slideshowSpeed="900000">
							<ul class="slides">
		                    @for($day = 1; $day <=7; $day++)
			                  	<li>
			                   		<div id="chart_sidebar_{{$day}}" class="swiper-slide"></div>
			                   	</li>
		                    @endfor
		                    </ul>
		                </div>
	                </ul>
	            </div>
            </nav>


            <!--Map -->
			<div class="row">
				<div class="col-sm-12 clearfix margin-bottom-30">
					{{-- <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" tooltip="Expand side panel">
		                <i class="fa fa-chevron-right"></i>
		            </button> --}}
					<div id="map" class="thumbnail"></div>
					<div id="search" class="searchbox">					
						{{-- <button class="btn" data-toggle="modal" data-target="#modClubs">
							<i class="fa fa-bars"></i> <span class="small">List Menu</span>
						</button> --}}
						<button type="button" id="sidebarCollapse" class="btn btn-md btn-danger" tooltip="Expand Menu">
		                	<i class="fa fa-bars"> Menu</i>
		            	</button>
					</div>
					{{-- <div id="legend"><h4>Legend</h4></div> --}}
					<div id="mylocation">
						<button class="btn btn-sm btn-danger text-center" onclick="getCurrPos(); map.setCenter(user_pos); return false;" title="Re-center map to your Location">
						<i class="fa fa-crosshairs fa-wx" style="padding:0px"></i></button>
					</div>
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
	
@stop

@section('script')
	<script type="text/javascript" src="{{asset('plugins/slider.swiper/dist/js/swiper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/view/demo.swiper_slider.js')}}"></script>

	<!-- Firebase --> 
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
	<script>

 		var map;
 		var infoWindow;
 		var geocoder;
 		var user_pos;
 		var club_num =1;
		/**
	    * Data object to be written to Firebase.
	    */
      	var data = {
	        sender: null,
	        timestamp: null,
	        lat: null,
	        lng: null
      	};

 		// Read the current hash
		var mapId = location.hash.replace(/^#/, '');

		// If not set generate a new one
		if (!mapId) {
		  mapId = 'tx'; //(Math.random() + 1).toString(36).substring(2, 12);
		  location.hash = mapId;
		}

		// Get current UUID
		var myUuid = localStorage.getItem('myUuid');

		// Create a new one for newcomers
		if (!myUuid) {
		  myUuid = guid();
		  localStorage.setItem('myUuid', myUuid);
		}

		console.log('mapId:' + mapId);
		console.log('localStorage:' + myUuid);

		//Utility functions
		function guid() {
			return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
				var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
				return v.toString(16);
			});
		}
		/*
		* Reference to Firebase database.
	    * @const
	    */

		  // Initialize Firebase
		  var config = {
		    apiKey: "AIzaSyBYR5pSYCjxwrZFqySEGKl8iHpuKtbXh4I",
		    authDomain: "txra-171117.firebaseapp.com",
		    databaseURL: "https://txra-171117.firebaseio.com",
		    projectId: "txra-171117",
		    storageBucket: "txra-171117.appspot.com",
		    messagingSenderId: "431463891872"
		  };
		  
		  firebase.initializeApp(config);
		  //var markersRef  = firebase.database().ref();
		  // Get a reference to the database service
		var database = firebase.database();

		var markersRef = firebase.database().ref('maps/' + mapId);
		var markers = {};

		// // Current position is stored under `myUuid` node
		// navigator.geolocation.watchPosition(function(position) {
		//   markersRef.child(myUuid).set({
		//     coords: {
		//       latitude: position.coords.latitude,
		//       longitude: position.coords.longitude,
		//     },
		//     timestamp: Math.floor(Date.now() / 1000)
		//   })
		// })

		function addPoint(uuid, position) {

		  var pos = {lat: position.coords.latitude, lng: position.coords.longitude};
		  var myico = '../images/mapicons/sports/racquet.png';	
		  var ico = '../images/mapicons/letters/letter_r.png';	

		  if(uuid == myUuid){
		  	ico = myico;
		  }

		  var marker = new google.maps.Marker({
	     	       position: pos,
	     	      //icon: icons[feature.type].icon,
	     	       map: map,
	     	       icon: ico,
	     	       title: "You are here"
	     	    });	 

		  markers[uuid] = marker;

		}

		function removePoint(uuid) {
		  	markers[uuid].setMap(null);		  
		}

		function updatePoint(uuid, position) {
		  var marker = markers[uuid];

			console.log('updatePoint');
			console.log(position);

		  var pos = {lat: position.coords.latitude, lng: position.coords.longitude};
		  marker.setPosition(pos);
		}

		function putPoint(uuid, position) {
		  if (markers[uuid])
		    updatePoint(uuid, position)
		  else
		    addPoint(uuid, position)
		}		

    /*
    * Map Stuff 
    */

 		
      	function initMap() {
        	var mav = {lat: 32.7098963, lng: -97.1373552 };
			var clubs = {!! json_encode($clubs->toArray()) !!};
        	var mypos = {lat: 0, lng: 0 };

        	map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 15,
          		center: mav,
          		mapTypeControl: false,
	    	});       	

         	var watchPositionId;

			// Remove old markers
			setInterval(function() {
			  // markersRef.limitToFirst(100).once('value', function(snap) {
			  //   var now = Math.floor(Date.now() / 1000)

			  //   snap.forEach(function(childSnapshot) {
			  //     var uuid = childSnapshot.key()
			  //     if (childSnapshot.val().timestamp < now - 60 * 30) {
			  //       markersRef.child(uuid).set(null)
			  //       //markers[uuid] = null
			  //     }
			  //   })
			  // })
			}, 5000);

			/* Google Map Stuff */
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

	      	user_pos = mypos;

    		// var ico = '../images/mapicons/sports/racquet.png';	    		
	      	//       var marker = new google.maps.Marker({
	     	//        position: mypos,
	     	//       //icon: icons[feature.type].icon,
	     	//        map: map,
	     	//        icon: ico,
	     	//        title: "You are here"
	     	//     });	 
	       
	            // infoWindow.setPosition(mypos);
	            // infoWindow.setContent('You are here');
	            // infoWindow.open(map);
	            // map.setCenter(mypos);

	            var club_num = 0;     	  

    			// Create markers.
		    	clubs.forEach(function(club) {
		    		 	   
	    		    club_num +=1;

		    		var c = {lat: parseFloat(club.lat), lng:  parseFloat(club.lng) };
		    		
		    		var clubCord = new google.maps.LatLng(c.lat, c.lng);
	    			var myCord = new google.maps.LatLng(mypos.lat, mypos.lng);
		     	    club.dist = google.maps.geometry.spherical.computeDistanceBetween (clubCord, myCord) * 0.000621371; // meters to miles		
  
  					var minDist = 0.5;		
		    		club.info = "<div class='clubInfo'>"
				        + "<span class='h6'>" + club.name + "</span>";

	                if(club.dist <= minDist) {

	                	var d = new Date();
						var gtz_offset= d.getTimezoneOffset();

	                	club.info += "<form id='frmCheckin' action='{{route('play.checkin')}}' method='POST'>"
	                	    + "<input type='hidden' name='_token' value='{{csrf_token()}}'>"
							+ "<input type='hidden' name='club_id' value='" + club.id + "'>"							
							+ "<input type='hidden' name='gtz_offset' value='" + gtz_offset + "'>"
				            + "<button type='submit' action='{{route('play.checkin')}}' method='post' class='btn btn-block btn-success'	title='Check-ins are allowed when you are within 0.5 miles of a club'>Check In</button>"
				            + "</form>";
	                }
	                club.info += "</div>";
	                
		    		var clubWindow = new google.maps.InfoWindow({
	      				content: club.info
	    			});

		    		club.label = club_num.toString();
		    		
	    		    var marker = new google.maps.Marker({
		     	       position: c,
		     	       animation: google.maps.Animation.DROP,
		     	       map: map,
		     	       label: club.label,
		     	       title: club.name
		     	    });	   	      

					//open marker if club within current location					     	    			     	   
		     	    if(club.dist <= minDist) {
		     	    	clubWindow.open(map,marker);
		     	    	showClub(club);
		     	    }	
		     		
		     	    google.maps.event.addListener(marker, 'click', function() {
	      				clubWindow.open(map,marker);
		     	    	showClub(club);
	    			});
		     	}); /* end forecah club */


				google.maps.event.addListener(map, 'domready', function() {

	    		});

				function successCoords(position) {
				    if (!position.coords) return

				    database.ref('maps/'+ mapId + '/'+ myUuid).set({
				      coords: {
				        latitude: position.coords.latitude,
				        longitude: position.coords.longitude,
				      },
				      timestamp: Math.floor(Date.now() / 1000)
				    })

				  }

				  function errorCoords() {
				    console.log('Unable to get current position')
				  }

				  //Need to clearthe watch position id so it starts up again tracking. probably set clear on Checkin.
				  
				  navigator.geolocation.clearWatch(1);
				  watchPositionId = navigator.geolocation.watchPosition(successCoords);
				 
				  markersRef.on('child_added', function(childSnapshot) {
				    var uuid = childSnapshot.key;
				    var position = childSnapshot.val();

				    console.log( 'markersRef.on( child_added:' + uuid);
				    addPoint(uuid, position);
				  })

				  markersRef.on('child_changed', function(childSnapshot) {
				    var uuid = childSnapshot.key;
				    var position = childSnapshot.val();

				    console.log( 'markersRef.on( child_changed:' + uuid);
				    putPoint(uuid, position);
				  })

				  markersRef.on('child_removed', function(oldChildSnapshot) {
				    var uuid = oldChildSnapshot.key;

				    removePoint(uuid);
				  })  	

	          }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	          });
	        } else {
	          // Browser doesn't support Geolocation
	          handleLocationError(false, infoWindow, map.getCenter());
	        }

	  	    var search = document.getElementById('search');	
	  	    var mylocation = document.getElementById('mylocation');	
    		map.controls[google.maps.ControlPosition.LEFT_TOP].push(search);
    		map.controls[google.maps.ControlPosition.TOP_CENTER].push(mylocation);	       
	     			   
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

		function loadChart(checkin_data){
			var chart_id_1 = document.getElementById('chart_sidebar_1'); 
			var chart_id_2 = document.getElementById('chart_sidebar_2'); 
			var chart_id_3 = document.getElementById('chart_sidebar_3'); 
			var chart_id_4 = document.getElementById('chart_sidebar_4'); 
			var chart_id_5 = document.getElementById('chart_sidebar_5'); 
			var chart_id_6 = document.getElementById('chart_sidebar_6');  
			var chart_id_7 = document.getElementById('chart_sidebar_7');  

			var charts = [];
			charts.push({title: 'Monday', 		div: chart_id_1});		
			charts.push({title: 'Tuesday', 		div: chart_id_2});
			charts.push({title: 'Wednesday', 	div: chart_id_3});
			charts.push({title: 'Thursday', 	div: chart_id_4});
			charts.push({title: 'Friday', 		div: chart_id_5});
			charts.push({title: 'Saturday',		div: chart_id_6});
			charts.push({title: 'Sunday', 		div: chart_id_7});

		 	google.charts.load("current", {packages:["corechart"]});
		    google.charts.setOnLoadCallback(drawChart);


	      	function drawChart() {

		        for (var day = 0; day <= 6; day++) {	
			        var data = new google.visualization.DataTable();
				      data.addColumn('timeofday', 'Time of Day');
				      data.addColumn('number', '# players');
				      //data.addColumn('number', 'Energy Level');

				      data.addRows([
				      	[{v: [6, 0, 0], f: '6 am'}, checkin_data[day][6] ],
				      	[{v: [7, 0, 0], f: '7 am'}, checkin_data[day][7] ],
				        [{v: [8, 0, 0], f: '8 am'}, checkin_data[day][8]  ],
				        [{v: [9, 0, 0], f: '9 am'}, checkin_data[day][9]  ],
				        [{v: [10, 0, 0], f:'10 am'}, checkin_data[day][10] ],
				        [{v: [11, 0, 0], f: '11 am'}, checkin_data[day][11] ],
				        [{v: [12, 0, 0], f: '12 pm'}, checkin_data[day][12] ],
				        [{v: [13, 0, 0], f: '1 pm'}, checkin_data[day][13] ],
				        [{v: [14, 0, 0], f: '2 pm'}, checkin_data[day][14] ],
				        [{v: [15, 0, 0], f: '3 pm'}, checkin_data[day][15] ],
				        [{v: [16, 0, 0], f: '4 pm'}, checkin_data[day][16] ],
				        [{v: [17, 0, 0], f: '5 pm'}, checkin_data[day][17] ],
				        [{v: [18, 0, 0], f: '6 pm'}, checkin_data[day][18] ],
				        [{v: [19, 0, 0], f: '7 pm'}, checkin_data[day][19] ],
				        [{v: [20, 0, 0], f: '8 pm'}, checkin_data[day][20] ],
				        [{v: [21, 0, 0], f: '9 pm'}, checkin_data[day][21] ],
				        [{v: [22, 0, 0], f: '10 pm'}, checkin_data[day][22] ],
				      ]);

			        var options = {
			          	title: '',
			          	legend: { position: 'none' },
			            hAxis: {
				          	title: charts[day]['title'],
				          	format: 'h a',
				          	viewWindow: {
				            	min: [5, 00, 0],
				            	max: [23, 00, 0]
				        	}
			          	},
						vAxis: {
				          	title: '',
				          	format: '0',
				          	viewWindow: {
				            	min: [0],
				        	}
				        }				   
			        };

	       			var chart = new google.visualization.ColumnChart(charts[day]['div']);
					chart.draw(data, options);
				};

				//Cloned Divs for wrapping chart slider
				var chart_id_1c = document.getElementById('chart_sidebar_1_clone'); 
				var chart_id_7c = document.getElementById('chart_sidebar_7_clone'); 

				chart_id_1c.innerHTML = chart_id_1.innerHTML;
				chart_id_7c.innerHTML = chart_id_7.innerHTML;


				//Initialize events next, prev and dropdown of chart
				//Needs to be inside of this loadChart function because of the CallBack
				if(initSlide == false){
					initSlide = true;
					$('.flex-prev').on('click', function(){
						currSlide = currSlide -1;
						if (currSlide< 0) {
							currSlide = 6;
						}
						$("#dayofweek option[value=" + currSlide +"]").attr('selected','selected');	
						//console.log('  clicked prev. Current Slide ' + currSlide);
					});

					$('.flex-next').on('click', function(){
						currSlide = currSlide +1;
						if (currSlide > 6) {
							currSlide = 0;
						}
						$("#dayofweek option[value=" + currSlide +"]").attr('selected','selected');	
						//console.log('  clicked next. Current Slide' + currSlide);
					});

					$("#dayofweek").on("change", function(){
						slide = $(this).val();
						//console.log('  change day. Current Slide' + currSlide);
						changeSlide(slide);
					});
				}		
				
				//set chart to current day
				var d = new Date();
				var currDay = d.getDay() - 1;
				changeSlide(currDay);					
			}

			function changeSlide(slide){
				//Goto slide
				if(currSlide > slide){
					while (currSlide > slide ) 
					{
				    	$('.flex-prev i').trigger('click');		    	
				    	//console.log('trigger prev '  + currSlide);	    	
				    }
				}else{
					while (currSlide < slide ) 
					{
				    	$('.flex-next i').trigger('click');
				    	//console.log('trigger next '  + currSlide);		 
				    }
				}	
				$("#dayofweek option[value=" + currSlide +"]").attr('selected','selected');		
			}
		}

		
		function loadClubSidePanel(club){

			var image = document.getElementById('club_image');
			var name = document.getElementById('club_name');
			var addr = document.getElementById('club_addr');
			var phone = document.getElementById('club_phone');
			var url = document.getElementById('club_url');
			var courts = document.getElementById('club_courts');
			var dist = document.getElementById('club_dist');
			var tot_chk = document.getElementById('club_checkin_total');
			var rec_chk = document.getElementById('club_checkin_recent');
			
			var d = new Date();
			var gtz_offset = d.getTimezoneOffset();
			
			$("input[id=club_id]").val(club.id);
			$("input[id=gtz_offset]").val(gtz_offset);
			
			//club.image = need ajax call Club::get_og_image
			if(club.image != undefined){
				if (club.image !=''){
					image.innerHTML = '<img class="club-image" src="' + club.image + '" />';
				}
			}
			name.innerHTML = '<span class="btn btn-xs btn-danger">' + club.num + '</span> ' + club.name ;
			addr.innerHTML = '<i class="fa fa-map-marker"></i> ' + club.address + ' ' + club.city + ', ' + club.state + ' ' + club.zip;
			phone.innerHTML = '<i class="fa fa-phone"></i> ' + club.phone;

			if (club.url != ''){

				var u = club.url.split("//")[1];

				if(u.length > 30){
					u = u.substring(0,29) + "...";
				}

				url.innerHTML = '<a href=' + club.url + ' target="new" style="padding:0px"><i class="fa fa-globe"></i> ' + u + '</a>';
			}
			courts.innerHTML = '<i class="fa fa-cube"></i> ' + club.courts + ' court(s)';
			tot_chk.innerHTML = '<i class="fa fa-male"></i> ' + club.checkins_total + ' check-ins total';
			rec_chk.innerHTML = '<i class="fa fa-clock-o"></i> ' + club.checkins_recent + ' check-ins in the last hour';

			if (club.dist == undefined) {
				var c = {lat: parseFloat(club.lat), lng:  parseFloat(club.lng) };
	    		var clubCord = new google.maps.LatLng(c.lat, c.lng);
    			var myCord = new google.maps.LatLng(user_pos.lat, user_pos.lng);
	     	    club.dist = google.maps.geometry.spherical.computeDistanceBetween (clubCord, myCord) * 0.000621371; // meters to miles			
			}
			
			dist.innerHTML = '<i class="fa fa-car"></i> ' + club.dist.toFixed(2) + ' mi away';			

			if (club.dist <= .5) {
				$('#btnCheckin').removeClass('disabled');
				$('#btnCheckin').prop('disabled');
			}
			else{
				$('#btnCheckin').addClass('disabled');
				$('#btnCheckin').prop('disabled');
			}

			loadChart(club.checkin_data);
		}

		function getCurrPos(){
		 	if (navigator.geolocation) {
	          	navigator.geolocation.getCurrentPosition(function(position) {
		            mypos = {
		              lat: position.coords.latitude,
		              lng: position.coords.longitude
		            };

            	user_pos = mypos;
				});
			}
			
			return user_pos;
		}

	</script>
	<!-- Scrollbar Custom CSS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 
	<script type="text/javascript">

		currSlide = 0;
		var initSlide = false;

		$(document).ready(function () {
		  $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

		    // when opening the sidebar
		    $('#sidebarCollapse').on('click', function () {
		        // open sidebar
		        //$('#sidebar').addClass('active');		  
				listClubs();
		    });
		   
		    // if dismiss was clicked
		    $('#dismiss').on('click', function () {
		    	// hide the sidebar
		      	$('#sidebar').removeClass('active');		
		    });			   
						
	    });

    	function listClubs(){
			$('#sidebar').addClass('active');
			$('#menu_div').removeClass('hide');
			$('#club_div').addClass('hide');
		}	

		function showClub(club){
			$('#sidebar').addClass('active');
			$('#club_div').removeClass('hide');
			$('#menu_div').addClass('hide');
			loadClubSidePanel(club);				
		}		


	</script>
@stop