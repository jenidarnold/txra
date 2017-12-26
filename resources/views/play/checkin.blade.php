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

#sidebar {
	padding: 0px;
}
#sidebar ul.components {
    padding: 20px 0 10px;
    margin-left: 15px;
    margin-right: 15px;
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

	{{-- <section class="page-header page-header-xs hidden-xs">
		<div class="container">

			<h1>TEXAS CLUBS & FACILITIES</h1>
			
			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="active">Clubs</li>
				
				<li><a href="{{ route('events.index', array('type' =>'future'))}}">Tournaments</a></li>

			</ol><!-- /breadcrumbs -->

		</div>
	</section> --}}
	<!-- /PAGE HEADER -->

	<!-- Find Google Maps coordinates - fast and easy! -->
	<!-- http://www.mapcoordinates.net/en -->
	<section>
		<div class="container-fluid">
			
			<!-- Sidebar Holder -->
            <nav id="sidebar" class="col-xs-12 col-sm-6 col-md-5 col-lg-4" style="z-index:1000">
                <div id="dismiss" class="btn btn-default btn-xs">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div id="menu_div" class="">
                	<div class="sidebar-header">
	                    <h4 class="text-white">Clubs & Facilities</h4>
	                    <a href="#" data-toggle="modal" data-target="#modAddClub" data-dismiss="modal" class="text-white"> Add to the map</a>	                    
	                </div>

		        	@foreach($clubs as $club)
						<div class=" col-sm-12  {{$club->map_icon}}">
							<div class="itembox">
								<div style="float:left; padding-right:2px">
									<a href="#" class="h5" onclick="map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} ); map.setZoom(17); map.panTo({{ $club->lat }}, {{ $club->lng }} ); return false;" > 
										<img style="height:28px" src={{asset($club->ico)}} />	
									</a>
								</div>
								<div>
									<a href="#"  data-dismiss="modal" onclick="showClub({{$club}}); map.setCenter(new google.maps.LatLng({{ $club->lat }}, {{ $club->lng }} )); return false" > 
										{{  $club->name }}
									</a>
					
									<ul class="list-unstyled components">                   
					                    <li><div id=""><i class="fa fa-map-marker"></i> {{ $club->address }} </div></li>
							            <li><div id=""><i class="fa fa-phone"></i></i> {{ $club->phone }}</div></li>
							            <li><div id=""> 
								            	@if($club->url <> '')
													<a href="{{ $club->url}}" style="padding:0px" target="new" class="text-info" ><i class="fa fa-globe"></i>
													{{ substr( explode("//", $club->url)[1], 0, 20) }}
														@if(strlen($club->url) > 31)
														...
														@endif
													</a>
												@endif
							            	</div></li>
							            <li><div id=""><i class="fa fa-cube"></i> {{ $club->courts }} court(s)</div></li>
					                    <li><div id=""></div></li>
					                    <li><div id=""><i class="fa fa-male"></i> {{ $club->checkins_total }} check-ins total</div></li>  
					                    <li><div id=""><i class="fa fa-clock-o"></i> {{ $club->checkins_recent }} check-ins in the last hour</div></li>
				                    </ul>
								</div>
							</div>
						</div>
					@endforeach
                </div>

                <div id="club_div" class="hide">
	                <div class="sidebar-header">
	                    <div id="club_name" class="h4 text-white"></div>	                    
	                	<a href="#" onclick="listClubs(); return false;" class="text-white">Back to lists of clubs</a>
	                </div>
	                <ul class="list-unstyled components">                   
	                    <li><div id="club_addr"></div></li>
			            <li><div id="club_phone"></div></li>
			            <li><div id="club_url"></div></li>
			            <li><div id="club_courts"></div></li>
	                    <li><div id="club_dist"></div></li>
	                    <li><div id="club_checkin_total"></div></li>  
	                    <li><div id="club_checkin_recent"></div></li>
			            <li>
			            	<form action='{{route('play.checkin')}}' method='POST'>
		                	    <input type='hidden' name='_token' value='{{csrf_token()}}'>
								<input type='hidden' id="club_id" name='club_id' value="">
					            <button id="btnCheckin" type='submit' title="Check-ins are allowed when you are within 0.5 miles of a club" class='btn btn-sm btn-success margin-top-10'>Check In</button>
					        </form>
			            </li>                  
	                </ul>

	                <ul class="list-unstyled">
	                	<center>
	                		Popular Times
	                		<select id="dayofweek" class="input input-sm">
	                			<option value="0">Sunday</option>
	                			<option value="1">Monday</option>
	                			<option value="2">Tuesday</option>
	                			<option value="3">Wednesday</option>
	                			<option value="4">Thursday</option>
	                			<option value="5">Friday</option>
	                			<option value="6">Saturday</option>
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
						<button type="button" id="sidebarCollapse" class="btn btn-sm btn-danger" tooltip="Expand Menu">
		                	<i class="fa fa-bars"> Menu</i>
		            	</button>
					</div>
					{{-- <div id="legend"><h4>Legend</h4></div> --}}
					<div id="mylocation">
						<button class="btn btn-xs btn-default text-center" onclick="map.setCenter(user_pos); return false;" tooltip="Your Location">
						<i class="fa fa-crosshairs fa-lg" style="padding:0px"></i></button>
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
	<script type="text/javascript" src="{{asset('plugins/slider.swiper/dist/js/swiper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/view/demo.swiper_slider.js')}}"></script>
 	<script>
 		var map;
 		var infoWindow;
 		var geocoder;
 		var user_pos;

      	function initMap() {
        	var mav = {lat: 32.7098963, lng: -97.1373552 };
			var clubs = {!! json_encode($clubs->toArray()) !!};
        	var mypos = {lat: 0, lng: 0 };

        	map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 15,
          		center: mav,
          		mapTypeControl: false,
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

	            user_pos = mypos;

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
				        + "<span class='h6'>" + club.name + "</span>";

	                if(club.dist <= minDist) {
	                	club.info += "<form id='frmCheckin' action='{{route('play.checkin')}}' method='POST'>"
	                	    + "<input type='hidden' name='_token' value='{{csrf_token()}}'>"
							+ "<input type='hidden' name='club_id' value='" + club.id + "'>"
				            + "<button type='submit' action='{{route('play.checkin')}}' method='post' class='btn btn-block btn-success'	title='Check-ins are allowed when you are within 0.5 miles of a club'>Check In</button>"
				            + "</form>";
	                }
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
		     	    	clubWindow.open(map,marker);
		     	    	showClub(club);
		     	    }	
		     		
		     	    google.maps.event.addListener(marker, 'click', function() {
	      				clubWindow.open(map,marker);
		     	    	showClub(club);
	    			});

	    			google.maps.event.addListener(clubWindow, 'domready', function() {
	    				//loadChart(club.checkin_data);	    				
	    			});
		     	   
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
			charts.push({title: 'Sunday', 		div: chart_id_1});
			charts.push({title: 'Monday', 		div: chart_id_2});		
			charts.push({title: 'Tuesday', 		div: chart_id_3});
			charts.push({title: 'Wednesday', 	div: chart_id_4});
			charts.push({title: 'Thursday', 	div: chart_id_5});
			charts.push({title: 'Friday', 		div: chart_id_6});
			charts.push({title: 'Saturday',		div: chart_id_7});

		 	google.charts.load("current", {packages:["corechart"]});
		    google.charts.setOnLoadCallback(drawChart);


	      	function drawChart() {

		        for (var day = 1; day <= 7; day++) {	
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
				          	title: charts[day-1]['title'],
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

	       			var chart = new google.visualization.ColumnChart(charts[day-1]['div']);
					chart.draw(data, options);
				};

				//Clones
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
						console.log('  clicked prev. Current Slide ' + currSlide);
					});

					$('.flex-next').on('click', function(){
						currSlide = currSlide +1;
						if (currSlide > 6) {
							currSlide = 0;
						}
						$("#dayofweek option[value=" + currSlide +"]").attr('selected','selected');	
						console.log('  clicked next. Current Slide' + currSlide);
					});

					$("#dayofweek").on("change", function(){
						slide = $(this).val();
						console.log('  change day. Current Slide' + currSlide);
						changeSlide(slide);
					});
				}		
				
				var d = new Date();
				var currDay = d.getDay();

				changeSlide(currDay);
				console.log('Current Slide ' + currSlide);					
			}

			function changeSlide(slide){
				//Goto slide
				if(currSlide > slide){
					while (currSlide > slide ) 
					{
				    	$('.flex-prev i').trigger('click');		    	
				    	console.log('trigger prev '  + currSlide);	    	
				    }
				}else{
					while (currSlide < slide ) 
					{
				    	$('.flex-next i').trigger('click');
				    	console.log('trigger next '  + currSlide);		 
				    }
				}	
				$("#dayofweek option[value=" + currSlide +"]").attr('selected','selected');		
			}
		}

		
		function loadClubSidePanel(club){

			var name = document.getElementById('club_name');
			var addr = document.getElementById('club_addr');
			var phone = document.getElementById('club_phone');
			var url = document.getElementById('club_url');
			var courts = document.getElementById('club_courts');
			var dist = document.getElementById('club_dist');
			var tot_chk = document.getElementById('club_checkin_total');
			var rec_chk = document.getElementById('club_checkin_recent');
			
			console.log(club.id);
			$("input[id=club_id]").val(club.id);
			console.log($('#club_id').val());

			name.innerHTML = club.name;
			addr.innerHTML = '<i class="fa fa-map-marker"></i> ' + club.address + ' ' + club.city + ', ' + club.state + ' ' + club.zip;
			phone.innerHTML = '<i class="fa fa-phone"></i> ' + club.phone;
			if (club.url != ''){
				url.innerHTML = '<a href=' + club.url + ' target="new" style="padding:0px"><i class="fa fa-globe"></i> ' + club.url + '</a>';
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
			}
			else{
				$('#btnCheckin').addClass('disabled');
			}

			loadChart(club.checkin_data);
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
			$('#menu_div').toggleClass('hide');
			$('#club_div').toggleClass('hide');
		}	

		function showClub(club){
			$('#sidebar').addClass('active');
			$('#club_div').toggleClass('hide');
			$('#menu_div').toggleClass('hide');
			loadClubSidePanel(club);				
		}		
	</script>
@stop