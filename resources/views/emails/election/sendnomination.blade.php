@extends('layouts.emails.contact')
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

	@php ($nomination->position = "Board of Director")

	@php ($nomination->comments = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	Hello, TXRA Elections Committee
@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:20px;">
		I am nominating: <br/><br/>
		<h6>{{ $nomination->nominee_full_name}} for {{ $nomination->position}}</h6>
	</div>
 
@stop

@section('content')
	<p style="align-left">
		<b>Supporting Information:</b>
		<br/>
		{{$nomination->comments}}
	</p>
@stop

@section('footer')
	Sincerely,<br/>
	{{ $nomination->proposer_full_name}}
@stop

@section('contact')
	Email: {{$nomination->proposer_email}}<br/>
	Phone: {{$nomination->proposer_phone}}<br/>
	<br/>
	@if ($nomination->proposer_is_member == 1) 
		<span class="text-success">I am a current TXRA member</span><br/>
	@else
		I am not yet a TXRA member<br/>
	@endif
@stop

