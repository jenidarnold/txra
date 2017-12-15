@extends('layouts.app')

@section('head')
  <!-- Put opengraph meta tags here later -->
@stop
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')
	<center>
	{{-- <iframe border=0 src="https://www.surveymonkey.com/r/FC96JJY" width="100%" height="600">		
	</iframe> --}}

	<div class="well">
		<h3>We're Sorry!</h3>
		<h1><i class="fa fa-frown-o text-warning"></i>
		<h3>The 2017 Member's Feedback Survey has end.</h3>
		<h4>But we would still like to hear from you.</h4>
		<a href="/contact"><button type="button" class="btn btn-info">Contact Us</button></a>
	</div>
	</center>

@stop