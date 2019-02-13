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
	<h4><center>
		<a href="http://www.r2sports.com/website/event-website.asp?TID=30465" target="_blank">Coach Fran Davis 3-Day Camp at the Landmark Club in Dallas, TX March 8-10</a></center>
    </h4>
	
	 <div style="padding:56.25% 0 0 0;position:relative;">
	        <iframe src="https://player.vimeo.com/video/316331857?autoplay=1&loop=1&title=0&byline=0&portrait=0" allow="autoplay" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
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
	             		<a href="http://www.r2sports.com/website/event-website.asp?TID=30453">Instructor Cerfification Registration</a>
             		</td>
	          	</tr>
        	</tbody>
        </table>
	</center>
@stop

@section('footer')
	
@stop
