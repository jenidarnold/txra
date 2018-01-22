@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($post))
	@php ($post = \App\Post::find(5))
	@php ( $txra = new \App\User)
    @php ($txra->email = env('MAIL_TO_EMAIL'))
    @php ($txra->full_name = env('MAIL_TO_NAME'))	
@endif


@section('greeting')
	Hello, {{$post->author->full_name}}
@stop

@section('lead')	
	<div style="margin-top:20px; margin-bottom:0px;">
		Thank you for submitting your article for publication.		
	</div> 
@stop

@section('callout')
	We will contact you within 7 days to with our decision to publish.
		{{--You can edit your article with this link: <a href=""><a target="txra_news" href='{{ env("APP_URL") . "/news/edit/$post->id/DRAFT-$post->title"}}'>EDIT MY ARTICLE</a>
		--}}
@stop

@section('content')

	<p style="align-left">
		<h5>{{$post->title}}</h5>
		<br/><br/>

		{!!html_entity_decode($post->content)!!}
	
	</p>
@stop

@section('contact')
	Sincerely,<br/>
	TXRA Communications Committee


	Name: {{$post->author->full_name}}<br/>
	Email: {{$post->author->email}}<br/>
	Phone: {{$post->author->phone}}<br/>
	<br/>
	@if ($post->author->is_member == 1) 
		<span class="text-success">I am a current TXRA member</span><br/>
	@else
		I am not yet a TXRA member<br/>
	@endif
@stop

