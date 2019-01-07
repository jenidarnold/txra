@extends('layouts.emails.contact')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($nomination))
	@php ($nomination = new stdClass())
	@php ($nomination->chair = "John O’Neill")
	@php ($nomination->chair_email = "johnjoneill@comcast.net")
	@php ($nomination->chair2 = "JSandy Rios")
	@php ($nomination->chair2_email = "srios13@stx.rr.com")
	@php ($nomination->chair2_phone = "555-555-5555")

	@php ($nomination->position = "Board of Director")
@endif


@section('greeting')
	<h6>Hello Texas Racquetball Association Members,</h6>

@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:20px;">
		As we move into 2019, we are looking for engaged and passionate racquetball members to join the TXRA Board.  This year, we have four open board positions.  We are looking for nominations to join a board committed to expanding racquetball in Texas. 
		The election will occur starting March 15th and ending March 31st, 2019.
	</div>
 
@stop

@section('content')
	<p style="text-align:left">
		<b>Requirements to serve on the board:</b>
		<br/>
		<ul style="text-align:left">
		  	<li>Attend all TXRA Board meetings.</li>
            <li>The USOC requires that all State Board members undergo a Background check.  
      The cost is $20 and it’s no big deal – here is the link: <a href="http://www.teamusa.org/usa-racquetball/instructors/background-check">Background Check</a></li>
            <li>The USOC requires that all State Board members complete the online safe-sport training.  
      The cost is free and it’s very easy – here is the link: <a href="http://www.teamusa.org/usa-racquetball/instructors/safesport">Safe Sport Training</a></li>
		</ul>
	</p>
    <p style="text-align:left">  

		<b>Please send nominations by March 2, 2019 to:</b>
		<br/>
		<ul style="text-align:left">
		  	<li>{{$nomination->chair}} at {{$nomination->chair_email}} or {{$nomination->chair2}} at {{$nomination->chair2_email}}
		  	<li>Or fill out our online nomination form – here is the link: <a href="http://texasracquetball.org/forms/election/nominate">Election Nomination Form</a></li>
		    </li>
		</ul>
	</p>

	<p style="text-align:left">  
		For details on the TXRA Board Election Process, please visit the election procedure page of our website – here is the link: <a href="http://texasracquetball.org/election">Election Information</a>
    </p>

@stop

@section('footer')

<div style="width:300px">
<img height="100px" src="http://texasracquetball.org/images/board/2018/john_oneill.png">

<div style="float:right">
	Sincerely,<br/><br/>
	{{ $nomination->chair}}<br/>
	TXRA Elections Chairperson

</div>
</div>
@stop

@section('contact')
	{{$nomination->chair_email}}<br/>
	<a href="http://txra.org">txra.org</a>
@stop

