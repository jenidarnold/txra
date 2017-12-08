@extends('layouts.emails.basic')
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
	
	@php ($nominee = new stdClass())
	@php ($nomination->nominee_first_name = "Super")
	@php ($nomination->nominee_last_name = "Star")
	@php ($nomination->nominee_full_name = "Super Star")
	@php ($nomination->award = "Female Athlete of the Year")

	@php ($subject = "Ut risus tellus, finibus non tristique a, malesuada vel metus")
	@php ($nomination->comments = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	Hello, {{$nomination->proposer_full_name}}
@stop

@section('lead')
	
	Thank you for your nonmination of:
@stop

@section('callout')
	<h6>{{ $nomination->nominee_full_name}}</h6> for 
	<h6>{{ $nomination->award}}</h6>
@stop

@section('footer')
	Sincerely,<br/>
	TXRA Awards Committee
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

