@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($invite))
	@php ($invite = new stdClass())
	@php ($invite->full_name = "Racquetball Enthusiast")
	@php ($invite->token = "unk")
@endif

@php ($tournaments = App\Tournament::future()->where('name', 'not like', '%Ladder')->limit(4)->get())
@section('greeting')
	Hello, {{ $invite->full_name}}
@stop

@section('lead')
	The Texas Racquetball Association has a brand new snazzy <a href="http://txra.org">website</a>, full of current and useful information about the TXRA and our members. 
	To experience all that the <a href="http://txra.org">TXRA website</a> has to offer, activate your FREE account today!

	<table class="six columns">
	    <tbody>
	    	<tr>
		      <td>
		        <table class="button success">
		          	<tbody>
			          	<tr>
			             	<td><a href="{{ route('invite.accept', $invite->token) }}">Activate Your Account Now</a></td>
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
	<center>
		<img src="{{asset('images/landing/chase_lukas.jpg')}}">		
	</center>
@stop

@section('callout')
		
		<table class="ten columns">
		    <tbody>
		    	<tr>
			      <td>
			      	<h6>Below are a few of our upcoming events!</h6>
			        <table class="button primary eight columns">
			          	<tbody>
				          	<tr>
				             	<td>				             		
				             		<a href="{{ url('events/future') }}">View all Events</a>
				             	</td>
				          	</tr>
			        	</tbody>
			        </table>
			        </td>
			      </td>
			      <td class="expander"></td>
			    </tr>
		 	 </tbody>
	  	</table>
@stop

@section('content')
	<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-3">

		@foreach($tournaments as $t)
		<!-- item -->		
			<table class="twelve columns">
		    <tbody>
		    	<tr>
			      <td>
					<center>
						<figure>
							<a class="ico-rounded" href="{{ $t->url }}" target="tournament">
								<img class="img-responsive" style="float:none" src="{{$t->logo }}" width="100" alt="">
							</a>	
						</figure>
					</center>
					</td>
				</tr>
				<tr>
			      <td>
					<center>
						<!-- div info -->
						<h6 style="text-align:center"><a href="{{ $t->url }}" target="tournament"> {{ $t->name }}</a></h6>
								
						<span class="text-info">
							{{$t->start}} - {{$t->end}}
						</span>
						<br/>
						<span>
							@if( $t->club()->lat > 0)
								<a href="{{ 'https://www.google.com/maps?q=' . $t->club()->lat .','. $t->club()->lng }}" target="map">
									<i class="fa fa-map-marker text-danger"></i> {{$t->club()->name }}</a><br/>
									{{$t->club()->city }}, {{$t->club()->state }}		
							@else
								 {{$t->club()->name }}<br/>  
								 {{$t->club()->city }}, {{$t->club()->state }}
							@endif
						</span>
					</center>
				</td>
			</tr>
		</tbody>
		</table>
						
		<hr/>
		@endforeach
	</div>
@stop

@section('footer')
	
@stop
