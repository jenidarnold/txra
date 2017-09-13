@extends('layouts.emails.contact')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($to))
	@php ($to = new stdClass())
	@php ($to->full_name = "TXRA Board")
@endif

@if(!isset($from))
	@php ($from = new stdClass())
	@php ($from->full_name = "Racquetball Enthusiast")
	@php ($from->email = "member@txra.org")
	@php ($from->phone = "555-555-5555")
	@php ($subject = "Ut risus tellus, finibus non tristique a, malesuada vel metus")
	@php ($body = "Etiam viverra blandit auctor. Sed cursus ligula eu eros gravida, in elementum diam consectetur. Nulla luctus dapibus purus a ultrices. Duis sit amet sem vel justo auctor rutrum. Sed nec felis ornare, egestas dolor sit amet, placerat turpis. Quisque lobortis ipsum dui, non elementum quam auctor vel. Quisque suscipit lacus lectus, porta cursus turpis molestie facilisis. Duis rhoncus lacus sagittis hendrerit condimentum. Nam augue arcu, maximus mattis gravida non, ullamcorper non turpis. Curabitur auctor ultricies convallis. Suspendisse cursus mi at magna faucibus, in malesuada metus placerat. Nam eu volutpat mauris.")
@endif


@section('greeting')
	Hello, {{ $to->full_name}}
@stop

@section('lead')
	{{$subject}}
@stop



@section('content')
	<p>
		{{$body}}
	</p>
@stop

@section('footer')
	Sincerely,<br/>
	{{ $from->full_name}}
@stop

@section('contact')
	Email: {{$from->email}} <br/>
	Phone: {{$from->phone}}
@stop