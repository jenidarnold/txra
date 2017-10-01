@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')	
	<h3>Add a Club</h3>		
    @include('includes.club_create')  
@stop

@section('scripts')
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6YuE9N29YCCwalloHjU9SgpH3vUZFSBk&callback=initMap">
	</script>
@stop