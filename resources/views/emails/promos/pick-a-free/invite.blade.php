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

@php ($tournaments = App\Tournament::future()->where('name', 'not like', '%Ladder')->limit(6)->get())
@section('greeting')
	Hello, {{ $invite->full_name}}
@stop

@section('lead')
	<h5>You can be our Grand Prize Winner in: <br>
		<center><a href="http://txra.org/sweepstakes">TXRA PICK-A-FREE-TOURNEY Sweepstakes!</a></center>
	</h5>
	<br/>
	Your name will be entered into a drawing for a chance to win a free entry into a TXRA sanctioned tournament of your choice.
	<br/>
	<br/>
	All you have to do to qualify is activate your FREE TXRA.org account and complete a simple user profile. 
	<br/>
	<table class="twelve columns">
	    <tbody>
	    	<tr>
	    		<td><a href="http://txra.org/sweepstakes"><img src="http://txra.org/images/promos/free_entry_600.png"></a></td>	    	
	    	</tr>
	    	<tr>
		      	<td>
			        <table class="button success">
			          	<tbody>
				          	<tr>
				             	<td>
				             		<a href="{{ route('invite.accept', $invite->token) }}">Click here to ACTIVATE your account NOW</a>
			             		</td>
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
	
@stop

@section('callout')
		
		<table class="ten columns">
		    <tbody>
		    	<tr>		    		
			    	<td>
			    		<ul style="text-align:left">
							<li class="text-primary"><i class="fa fa-star text-warning text-bold"></i>The Grand Prize Winner will receive two free divisions.
							<li class="text-primary"><i class="fa fa-star text-warning"></i>Two Runners-up will receive one free division.
							<li class="text-primary"><i class="fa fa-star text-warning"></i>Use our <a href="/refer">Refer-a-Friend</a> program to earn more chances to win.
							<li class="text-danger"><i class="fa fa-star text-warning text-bold"></i>Sweepstakes ends February 1, 2018.
							<li class="text-primary"><i class="fa fa-star text-warning"></i>Winners will be announced on February 7th, 2018 by email, on our website, and on the <a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="facebook">TXRA Facebook Page</a>.
						</ul>			      			
						<center>
							<a href="http://txra.org/contest-rules" class="text-muted">* Read complete contest rules. Terms and conditions apply.</a>
						</center>
			    	</td>
		    	</tr>
		 	 </tbody>
	  	</table>
@stop

@section('content')
	<h5>Upcoming Events!</h5>
	<div id="portfolio" class="clearfix fullwidth portfolio-nogutter portfolio-isotope portfolio-isotope-3">

		@foreach($tournaments as $t)
		<!-- item -->		
			<table class="twelve columns">
		    <tbody>
		    	<tr>
			      <td>
					<center>
						<figure>
							<a class="ico-rounded" href="http://texasracquetball.org/events/future" target="tournament">
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
						<h5 style="text-align:center"><a href="http://texasracquetball.org/events/future" target="tournament"> {{ $t->name }}</a></h5>
								
						<span class="text-info">
							{{$t->start}} - {{$t->end}}
						</span>
						<br/>
						<span>
							@if( $t->club()->lat > 0)
								<a href="{{ 'http://www.google.com/maps?q=' . $t->club()->lat .','. $t->club()->lng }}" target="map">
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
