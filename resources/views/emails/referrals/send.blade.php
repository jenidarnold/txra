@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">

	</style>
@stop

@if(!isset($friend_email))
	@php ($user = \Auth::user())
	@php ($profile = \App\UserProfile::find($user->id))
	@php ($friend_email = "friend@email")
	@php ($promo = \App\Promo::find(1))
	@php ($refer_link ="http://localhost:8886/register/6lmpHu7m1IravBXZ")
@endif

@section('greeting')
	Hello, 
@stop

@section('lead')
			
	<table class="twelve columns">
		    <tbody>
		    	<tr>			    			   
			      	<td>
				      	<h5>
				      		{{$user->full_name}} invites you to create an account on <a href="http://texasracquetball.org" target="new">texasracquetball.org</a>
				      	</h5>
				      	<br/>
				      	<p>You and {{$user->first_name}} have a chance to win the <a href="http://txra.org/sweepstakes">TXRA PICK-A-FREE-TOURNEY Sweepstakes</a>
				      	Click the <b>Sign Up Now</b> button below, so we know that {{$user->first_name}} sent you.
				      	</p>

		        	</td>
			      	<td class="expander"></td>
			    </tr>

			    
		 	 </tbody>
	  	</table>	  	
@stop

@section('hero')
	<table class="ten columns">
	    <tbody>
	    	<tr>
		    	<td style="padding-top:50px; padding-right:15px">
		    		<a target="member" href='{{route('members.show', $user->id)}}'>
		    		<img name="imgProfile" id="imgProfile" class="user-avatar thumbnail img-responsive" src='{{ asset('images/members/'. $user->id  .'/' .$profile->avatar)}}' alt=""  />
		    		</a>
		    	</td>	

		    	<td>
			    	<img name="imgPromo" id="imgPromo" class="user-avatar thumbnail img-responsive" src='{{ asset('images/promos/free_entry.png')}}' alt="free-entry-sweepstakes" />
			    </td>
				<td class="expander"></td>
		    </tr>
	 	 </tbody>
  	</table>	  	

@stop

@section('callout')
	
		<h4 class="text-primary">How to participate:</h4>
	 	<ul class="list-unstyled list-icons text-left">
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Create a TXRA account, and complete your profile. 
			<li class="text-primary"><i class="fa fa-star text-warning"></i>If you already have an account, just complete your profile.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>All eligible profiles will be entered in to a drawing for a chance to win a FREE ENTRY into a TXRA sanctioned tournament of your choice.
			<li class="text-primary"><i class="fa fa-star text-warning text-bold"></i>One Grand Prize Winner will receive two free divisions.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Two runner-ups will receive one free division.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Use our <a href="/refer">Refer-a-Friend</a> program to earn more chances to win.
			<li class="text-danger"><i class="fa fa-star text-warning text-bold"></i>Sweepstakes ends February 1, 2018.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Winners will be announced on February 7th, 2018 by email, on our website, and on the <a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="facebook">TXRA Facebook Page</a>.
		</ul>
		<center>
		<a href="http://txra.org/promo-terms" class="text-muted">* Read complete contest rules. Terms and conditions apply.</a>
		</center>
@stop

@section('content')
	
	<table class="button success">
      	<tbody>
          	<tr>
             	<td><a href="{{ $refer_link }}">Sign Up Now</a></td>
          	</tr>
    	</tbody>
	</table>
@stop

@section('footer')
	
@stop
