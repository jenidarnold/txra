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


@section('lead')
	<h4>
		<a href="http://www.r2sports.com/website/event-website.asp?TID=30330" target="_blank">2019 Texas State Singles Racquetball Championships (TSSRC), March 22-24</a>
    </h4>
	
	 <div style="padding:56.25% 0 0 0;position:relative;">
	        <iframe src="https://player.vimeo.com/video/313409692?autoplay=1&loop=1&title=0&byline=0&portrait=0" allow="autoplay" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
@stop

@section('hero')
	
@stop

@section('callout')
		
		<table class="ten columns">
		    <tbody>
		    	<tr>		    		
			    	<td>
			    		The premiere singles tournament for racquetball, hosted at Texas A&M in College Station, Texas.  The deadline for this event will be Monday, March 18th @10pm.		      			
						<center>
							 <table class="button success">
					          	<tbody>
						          	<tr>
						             	<td>
						             		<a href="http://www.r2sports.com/website/event-website.asp?TID=30330">Tournament Details</a>
					             		</td>
						          	</tr>
					        	</tbody>
					        </table>
						</center>
			    	</td>
		    	</tr>
		 	 </tbody>
	  	</table>
@stop

@section('content')
	<h5><center>Upcoming Events!</center></h5>
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
						<h5 style="text-align:center"><a href="https://texasracquetball.org/events/future" target="tournament"> {{ $t->name }}</a></h5>
								
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
