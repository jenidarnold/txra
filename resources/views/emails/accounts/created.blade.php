@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($user))
	@php ($user = new stdClass())
	@php ($user->full_name = "Racquetball Enthusiast")
	@php ($user->id = 1)
@endif

@php ($tournaments = App\Tournament::future()->where('name', 'not like', '%Ladder')->limit(4)->get())
@section('greeting')
	Hello, {{ $user->full_name}}
@stop

@section('lead')
	
	Congratulations. You're online account with the <a href="http://txra.org">Texas Racquetball Association</a> has been successfully created.  
	

	<table class="eight columns">
	    <tbody>
	    	<tr>
	    		<td>
					<img 1height="200px" src="{{asset('images/clipart/man-and-racquet.png')}}">	
	    		</td>
	    		<td style="vertical-align:middle">
	    			Please, fill out your online profile to share a little about yourself and your Racquetball life with other TXRA</a> members.
	    		</td>
    		</tr>
	    	<tr>
		      <td colspan="2">
		        <table class="button success">
		          	<tbody>
			          	<tr>
			             	<td><a href="{{ url('/login') }}">Log In Now</a></td>
			          	</tr>
		        	</tbody>
		        </table>
		      </td>
		      <td class="expander">
		      	
		      </td>
		    </tr>
		    <tr>
		      <td colspan="2">
		      	<p><span style="font-size:small">If you think you're receiving this email in error, please <a href="{{ url('/contact') }}">contact us</a> immediately.</span>
		      </td>
	      	</tr>
	 	 </tbody>
  	</table>

@stop

@section('hero')
	<center>
		{{-- <img src="{{asset('images/landing/tournament_players.jpg')}}">	 --}}	
	</center>
@stop

@section('callout')
		
		<table class="eight columns">
		    <tbody>
		    	<tr>
			      <td>
			      	<h6>Below are a few of our upcoming events!</h6>
			        <table class="button primary six columns">
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
			<div class="portfolio-item">
				<div class="item-box">
					<figure>
						<a class="ico-rounded" href="{{ $t->url }}" target="tournament">
							<img class="img-responsive" src="{{$t->logo }}" width="100" alt="">
						</a>	
					</figure>

					<!-- div info -->
						<div class="item-box-desc">
							<h4 class="text-center"><a href="{{ $t->url }}" target="tournament"> {{ $t->name }}</a></h4>
							<div class="text text-center">
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
							</div>
						</div>
				</div>		
			</div><!-- /item -->
		<hr/>
		@endforeach
	</div>
@stop

@section('footer')
	
@stop
