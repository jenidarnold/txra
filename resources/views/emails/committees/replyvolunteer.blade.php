@extends('layouts.emails.basic')
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
	@php ($subject = "Ut risus tellus, finibus non tristique a, malesuada vel metus")
	@php ($committees = ['Awards', 'Finance'])
	@php ($comments = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	Hello, {{$subscriber->full_name}}
@stop

@section('lead')
	
	Thank you for volunteering to work on the committee(s) you selected below.
	The TXRA Board will be in touch with you soon.
@stop

@section('callout')
	<ul>
	@foreach ($committees as $c)
		<li> {{$c}}</li>
	@endforeach
	</ul> 
@stop

@section('footer')
	Sincerely,<br/>
	TXRA Board of Directors
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

