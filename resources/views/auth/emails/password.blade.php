@extends('layouts.emails.basic')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($user))
	@php ($user = new stdClass())
	@php ($user->full_name = "Racquetball Enthusiast")
	@php ($token = "unk")
	@php ($email = "john.doh@email.com")
@else
	@php ($email = $user->getEmailForPasswordReset())
@endif

@php ($tournaments = App\Tournament::future()->where('name', 'not like', '%Ladder')->limit(4)->get())
@section('greeting')
	Hello, {{ $user->full_name}}
@stop

@section('lead')
	We received a request to reset your password for your <a href="http://txra.org">TXRA</a> account:<br/>
	Simply click on the button to set a new password:<br/>

	<table class="six columns">
	    <tbody>
	    	<tr>
		      <td>
		        <table class="button success">
		          	<tbody>
			          	<tr>
			             	<td><a href="{{ $link = url('password/reset', $token).'?email='.urlencode($email) }}">Set a New Password</a></td>
			          	</tr>
		        	</tbody>
		        </table>
		      </td>
		      <td class="expander"></td>
		    </tr>
	 	 </tbody>
  	</table>
@stop

@section('hero')

@stop

@section('callout')
	<p>If you didn't ask to change your password, don't worry! Your password is still safe and you can delete this email.
	</p>
@stop

@section('content')

@stop

@section('footer')
	
@stop