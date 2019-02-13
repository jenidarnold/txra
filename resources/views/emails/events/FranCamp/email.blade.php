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
	
	<table class="twelve columns">
	    <tbody>
	    	<tr>
	    		<td>
	    			 <a href="http://txra.org/FranCamp"><img src="http://txra.org/images/tournaments/fran_camp.jpg" title="Play" /></a>
	    		</td>	    	
	    	</tr>
	    	<tr>
	    		<td>
		    		<center>
		    			<h4> 
		    				<a href="http://www.r2sports.com/website/event-website.asp?TID=30465" target="_blank">Sign up for Coach Fran Davis' 3-Day Camp at the Landmark Club in Dallas, TX March 8-10</a>
		    			</h4>
		    		</center>
	    		</td>
	    	</tr>
	    	<tr>
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
		    		3-Day Camp includes 13+ hours of instruction, court time and play the pro, 
                                   physical and mental aspects of the game, videotaping and analysis, and more.                                       
                                   <li>Also, TXRA will reimburse you 100% the cost to become a USAR-IP certified instructor. The USAR-IP Level 2-3 Certification class is available March 7-8. <a href="/programs/instuctors" target="TIP" >The TIP program explains it all</a>.
                                   	      			
				
		    	</td>
	    	</tr>
	 	 </tbody>
  	</table>
@stop

@section('content')
	<center>
		 <table class="button success">
          	<tbody>
	          	<tr>
	             	<td>
	             		<a href="http://www.r2sports.com/website/event-website.asp?TID=30465">3-Day Camp Registration</a>
             		</td>
             	</tr>
             	<tr>
             		<td style="margin-top:5px">
	             		<a href="http://www.r2sports.com/website/event-website.asp?TID=30453">Instructor Certification Registration</a>
             		</td>
	          	</tr>
        	</tbody>
        </table>
	</center>
@stop

@section('footer')
	
@stop
