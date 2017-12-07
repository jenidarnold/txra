@extends('layouts.profile')
@section('style')
@stop	
@section('profile_header')
	<h1><i class="fa fa-share-alt-square text-primary"></i>  My Referrals</h1>
@stop
@section('profile_content')
	<!-- RIGHT -->
	@include('includes.promos.refer')
@stop