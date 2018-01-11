@extends('layouts.emails.hero')
@section('style')
	<style type="text/css">
	
	</style>
@stop

@if(!isset($user))
	@php ($user = \App\User::find(1))
	@php ($profile = \App\UserProfile::find($user->profile->id))
	@php ($promo = \App\Promo::find(1))	
@endif

@php($progress = $user->profile->progress)

@section('greeting')
	Hello, {{$user->full_name}}
@stop

@section('lead')
	
	<table class="twelve columns">
	    <tbody>
	    	<tr>			    			   
		      	<td>
		      		@if($progress == 100)
		      			<h6>Congratulations! You have been entered into the: <br/>
		      				<center><a href="http://txra.org/sweepstakes">TXRA PICK-A-FREE-TOURNEY Sweepstakes!</a></center>
		      			</h6>
		      			<br/>
		      			<h6>
		      				You are eligible because you completed 100% of your profile on <a href="http://texasracquetball.org" target="new">txra.org</a>.<br/>
		      				We want to thank you for being a part of our online racquetball community. Your name will be entered into a drawing for a chance to win a free entry into a TXRA sanctioned tournament of your choice.
		      				<a href="/refer">Refer-a-Friend</a> to earn more chances to win.
		      			</h6>
		      		@else
		      			<h6>You can be our Grand Prize Winner in the: <br>
		      				<center><a href="http://txra.org/sweepstakes">TXRA PICK-A-FREE-TOURNEY Sweepstakes!</a></center>
		      			</h6>
						<br/>
						<h6>
							Your name will be entered into a drawing for a chance to win a free entry into a TXRA sanctioned tournament of your choice.<br/>
							<br/>
		      				All you have to do to qualify is complete {{$user->profile->missing}} item(s) on your profile. Login to your <a href="http://texasracquetball.org" target="new">txra.org</a> account, and click on the link "My Settings" to update your profile.
		      				<span style="color:darkgreen">Your profile is {{$progress}}% complete!</span>
		      			</h6>
		      							      		
		      		@endif
		      		<br/>
		      		<h6>Here's a look at your profile:</h6>
	        	</td>
		      	<td class="expander"></td>
		    </tr>
		    
	 	 </tbody>
  	</table>	  	
@stop

@section('hero')
	  	

@stop

@section('callout')

	<table class="tweleve columns">
	    <tbody>
	    	<tr>	    		
		    	<td style="padding-top:5px; padding-right:15px;text-align:center; font-weight:bold">
		    		<a target="member" href='{{route('members.show', $user->id)}}'>
		    		<img name="imgProfile" id="imgProfile" style="height:229px" class="user-avatar thumbnail img-responsive" src='{{ asset('images/members/'. $user->id  .'/' .$user->profile->avatar)}}' alt=""  />
		    		</a>
		    		@if(!$user->profile->is_avatar_unique)
		    			<br/>
		    			<span style="color:red">Missing Profile Picture</span>
		    		@endif
		    	</td>	
	    	</tr>
		    <tr> 
		    	<td>
			    	{{-- <img name="imgPromo" id="imgPromo" class="user-avatar thumbnail img-responsive" src='{{ asset('images/promos/free_entry.png')}}' alt="free-entry-sweepstakes" /> --}}		   	
			    	<table class="info" width="100%">
			    		<tr>
			    			<th style="padding-right:5px;width:40%"><b>Hometown:</b></th>
			    			<td style="padding-right:5px;">
			    			@if($user->profile->city == '')
			    				<span style="color:red">Missing Info</span>
			    			@else
			    				{{$user->profile->city}}&nbsp;
			    			@endif
			    			</td>
			    		</tr>
			    		<tr>
			    			<th style="padding-right:5px;"><b>Gender:</b></th>
			    			<td style="padding-right:5px;">
			    			@if (($user->profile->gender == '') || ($user->profile->gender == 'none'))
			    				<span style="color:red">Missing Info</span>
			    			@else
			    				{{$user->profile->gender}}&nbsp;
			    			@endif
		    				</td>
			    		</tr>
			    		<tr>
			    			<th style="padding-right:5px;"><b>Hand:</b></th>
			    			<td style="padding-right:5px;">
			    			@if(($user->profile->dominant_hand == '') || ($user->profile->dominant_hand == 'none'))
			    				<span style="color:red">Missing Info</span>
			    			@else
			    				{{$user->profile->dominant_hand}}&nbsp;
			    			@endif
			    			</td>
			    		</tr>
			    		<tr>
			    			<th style="padding-right:5px;"><b>Skill:</b></th>
			    			<td style="padding-right:5px;">
			    			@if(($user->profile->skill == '')|| ($user->profile->skill == 'none'))
			    				<span style="color:red">Missing Info</span>
			    			@else
			    			{{$user->profile->skill}}&nbsp;
			    			@endif
			    			</td>
			    		</tr>
			    		<tr>
			    			<th style="padding-right:5px;"><b>Racquet:</b></th>
			    			<td style="padding-right:5px;">
			    			@if($user->profile->racquet == '')
			    				<span style="color:red">Missing Info</span>
			    			@else
			    				{{$user->profile->racquet}}&nbsp;
			    			@endif
		    				</td>
			    		</tr>
			    	</table>
		    	</td>
	    	</tr>
    		<tr>
    			<th style="padding-right:5px;"><b>About Me:</b></th>
    		</tr>
    		<tr>
    			<td colspan="2" style="padding-right:5px;">
    			@if($user->profile->bio == '')
    				<span style="color:red">Missing Info</span>
    			@else
    				{{$user->profile->bio}}&nbsp;
    			@endif
				</td>
    		</tr>
			<td class="expander"></td>	       
	 	 </tbody>
  	</table>	
		
@stop

@section('content')
	
	<ul style="text-align:left">
		<li class="text-primary"><i class="fa fa-star text-warning text-bold"></i>The Grand Prize Winner will receive two free divisions.
		<li class="text-primary"><i class="fa fa-star text-warning"></i>Two Runners-up will receive one free division.
		<li class="text-primary"><i class="fa fa-star text-warning"></i>Use our <a href="/refer">Refer-a-Friend</a> program to earn more chances to win.
		<li class="text-danger"><i class="fa fa-star text-warning text-bold"></i>Sweepstakes ends February 1, 2018.
		<li class="text-primary"><i class="fa fa-star text-warning"></i>Winners will be announced on February 7th, 2018 by email, on our website, and on the <a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="facebook">TXRA Facebook Page</a>.
	</ul>			      			
	<center>
		<a href="http://txra.org/contest-rules" class="text-muted">* Read complete contest rules. Terms and conditions apply.</a>
	</center>

	<table class="button success">
      	<tbody>      		
          	<tr>
             	<td>
             	<a href="http://txra.org/login">LOGIN NOW</a></td>
          	</tr>
    	</tbody>
	</table>
@stop

@section('footer')
	
@stop
