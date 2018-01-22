@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')	
	<h3>Add a Club</h3>		
    @include('includes.club_create')  
@stop

@section('script')
	<script>
		
 		var geocoder;
 		
      	function initMap() {
        
    		geocoder = new google.maps.Geocoder();
    
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
    </script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap">
	</script>
@stop