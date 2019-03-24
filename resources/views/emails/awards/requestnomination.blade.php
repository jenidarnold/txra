@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($nomination))
	@php ($nomination = new stdClass())
	@php ($nomination->proposer_full_name = "Racquetball Enthusiast")
	@php ($nomination->proposer_email = "subscriber@email.com")
	@php ($nomination->proposer_phone = "555-555-5555")
	@php ($nomination->proposer_is_member = "1")

	@php ($nomination->nominee_first_name = "Super")
	@php ($nomination->nominee_last_name = "Star")
	@php ($nomination->nominee_full_name = "Super Star")
	@php ($nomination->award = "Female Athlete of the Year")

	@php ($nomination->comments = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	<h4><center>TXRA Annual Award Nominations</center></h4>
@stop


@section('callout')
	<p> These awards are for the period of January 1, 2018 to December 31, 2018.  Awards will be presented at the <a href="http://http://www.r2sports.com/website/event-website.asp?TID=30301">Battle at the Alamo, Regional’s Competition</a> April 26-28, 2019 in San Antonio, Texas.</p>
	<h6><center><a href="http://txra.org/forms/awards/nominate">Nominate Now!</a></center></h6>
@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:20px;">
		
		<p>Final nominations for the following awards are being requested with a <b>due date of April 6, 2019</b> which will override the deadline noted in some of the nominating instructions.</p> 
	</div>
@stop

@section('content')
	<p style="align-left">
	  <a href="http://txra.org/forms/awards/nominate"><img width="560px" src="http://txra.org/images/awards/txra_award_desc.PNG"></a>
	</p>
@stop


