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
			{{-- <div class="row">
				<div class="col-md-12 margin-bottom-20">
					This map consists of Racquetball Clubs and Facilities in Texas that sanction and support events with <b>USA Racquetball</b> and the <b>Texas Racquetball Association</b>. <br/>Please use this map as a guide to find and play at clubs that support racquetball in Texas. 
					<cite class="text small">[Verified by Bob Sullins, 2017]
				</div>
			</div>
 --}}


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
		          	<h3 class="modal-title text-center">Racquetball Club Directory</h3>
		          	<h5 class="text-primary text-center">
		          		Help us complete our map of clubs. 
		          		<a href="#" data-toggle="modal" data-target="#modAddClub" data-dismiss="modal" class="text-success"> Add a Club</a>
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

      	function initMap() {
        	var mav = {lat: 32.7098963, lng: -97.1373552 };
        	//var clay = {lat: 30.4971805, lng: -97.6608585 };


        	map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 6,
          		center: mav
	    	});       
        	      			             
			var clubs = {!! json_encode($clubs->toArray()) !!};

			// Create markers.
	    	clubs.forEach(function(club) {
	    		var c = {lat: parseFloat(club.lat), lng:  parseFloat(club.lng) };
	    		var ico = club.ico;
	    		var data = club.info;
	    		var infowindow = new google.maps.InfoWindow({
      				content: data
    			});
	     	    var marker = new google.maps.Marker({
	     	       position: c,
	     	      //icon: icons[feature.type].icon,
	     	       map: map,
	     	       icon: ico,
	     	       title: club.name
	     	    });	   

	     	    google.maps.event.addListener(marker, 'click', function() {
      				infowindow.open(map,marker);
    			});

	     	});


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

	  	  //   var legend = document.getElementById('legend');			

	     //    for (var key in icons) {
	     //      var type = icons[key];
	     //      var name = type.name;
	     //      var icon = type.icon;
	     //      var div = document.createElement('div');
	     //      div.innerHTML = '<img class="icon" src="' + icon + '"> ' + name;
	     //      legend.appendChild(div);
	     //      console.log(icon);
	     //    }

    		// map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);


	  	    var search = document.getElementById('search');	
    		map.controls[google.maps.ControlPosition.LEFT_TOP].push(search);
	     	
	    }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap">
	</script>


@stop