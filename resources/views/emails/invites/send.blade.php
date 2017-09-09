@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop


@php ($invite = new stdClass())
@php ($invite->full_name = "Julienne Arnold")
@php ($invite->token = "test")

@section('greeting')
	Hello, {{ $invite->full_name}}
@stop

@section('lead')
	The Texas Racquetball Association has a brand new snazzy website, full of current and useful information about the TXRA and our members. To get the most of our website, activate your FREE account today! 

	<table class="four columns">
	    <tbody>
	    	<tr>
		      <td>
		        <table class="button success">
		          	<tbody>
			          	<tr>
			             	<td><a href="{{ route('invite.accept', $invite->token) }}">Activate Now</a></td>
			          	</tr>
		        	</tbody>
		        </table>
		      </td>
		      <td class="expander"></td>
		    </tr>
	 	 </tbody>
  	</table>
@stop

@section('hero')
	<img width="580" height="300" src="{{asset('images/landing/chase_lukas.jpg')}}">		
@stop


@section('footer')
	
@stop
