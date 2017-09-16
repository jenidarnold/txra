@extends('layouts.emails.contact')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($subscriber))
	@php ($subscriber = new stdClass())
	@php ($subscriber->full_name = "Racquetball Enthusiast")
	@php ($subscriber->email = "subscriber@email.com")
	@php ($subscriber->phone = "555-555-5555")
	@php ($subscriber->is_member = "1")

	@php ($nominee = new stdClass())
	@php ($nominee->first_name = "Super")
	@php ($nominee->last_name = "Star")
	@php ($nominee->award = "Female Athlete of the Year")

	@php ($comments = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	Hello, TXRA Awards Committee
@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:20px;">
		I am nominating: <br/><br/>
		<h6>{{ $nominee->first_name}} {{ $nominee->last_name}}</h6> for 
		<h6>{{ $nominee->award}}</h6>
	</div>
 
@stop

@section('content')
	<p style="align-left">
		<b>Supporting Information:</b>
		<br/>
		{{$comments}}
	</p>
@stop

@section('footer')
	Sincerely,<br/>
	{{ $subscriber->full_name}}
@stop

@section('contact')
	Email: {{$subscriber->email}}<br/>
	Phone: {{$subscriber->phone}}<br/>
	<br/>
	@if ($subscriber->is_member == 1) 
		<span class="text-success">I am a current TXRA member</span><br/>
	@else
		I am not yet a TXRA member<br/>
	@endif
@stop

