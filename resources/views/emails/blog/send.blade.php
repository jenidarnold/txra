@extends('layouts.emails.contact')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($post))
	@php ($post = \App\Post::find(5))		
@endif


@section('greeting')
	Hello, TXRA Communications Committee
@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:0px;">
		I have submitted the following article for publication: <br/><br/>
	</div> 
@stop

@section('content')
	<hr/>
	<p style="align-left">
		<a target="txra_news" href='{{ env("APP_URL") . "/news/post/$post->id/DRAFT-$post->title"}}'><b>{{$post->title}}</b></a>
		<br/><br/>
	</p>
		{!!html_entity_decode($post->content)!!}
	
	<hr/>
@stop

@section('footer')
	Sincerely,<br/>	
	<a target="txra_member" href='{{env("APP_URL") . "/member/$post->author_id"}}'>{{ $post->author->full_name}}</a>
@stop

@section('contact')
	Name: <a target="txra_member" href='{{env("APP_URL") . "/member/$post->author_id"}}'>{{ $post->author->full_name}}</a><br/>
	Email: {{$post->author->email}}<br/>
	Phone: {{$post->author->phone}}<br/>
	<br/>
	@if ($post->author->is_member == 1) 
		<span class="text-success">I am a current TXRA member</span><br/>
	@else
		I am not yet a TXRA member<br/>
	@endif
@stop

