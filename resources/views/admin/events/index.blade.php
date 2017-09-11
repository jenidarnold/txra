@extends('layouts.admin')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('admin_content')		
	<div class="container">
		<div class="row">
			<h3><i class="fa fa-gears"></i> Download Events</h3>
		</div>
		<div class="row">
											
				<ul>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'live')) }}">TX LIVE EVENTS</a></li>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'future')) }}">TX FUTURE EVENTS</a></li>
					<li><a href="{{ route('events.download', array('location' => 'Texas', 'type' => 'past')) }}">TX PAST EVENTS</a></li>				
					<li><a href="{{ route('events.download',  array('location' => 'national', 'type' => 'future'))}}">NAT FUTURE EVENTS</a></li>
				</ul>
		</div>
		{{-- <div class="row">
			<div class="col-sm-12">
				@if(isset($events))
					<h5>{{$events->count() }} records downloaded</h5>
					<ul>
					@foreach ($events as $e)
						<li> {{$e}}</li>
					@endforeach
					</ul>
				@endif
			</div>
		</div> --}}
	</div>

@stop