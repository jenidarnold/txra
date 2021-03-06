@section('style')
	<style>
	.well {
		margin-bottom: 0px !important;
		background-color: #0C6296 !important;
		color: white !important;
	}
	</style>
@stop
	<style>
	.well {
		margin-bottom: 0px !important;
		background-color: #0C6296 !important;
		color: white !important;
	}
	</style>
	<div class="panel panel-info">
		<div class="panel-heading">	
			@if(isset($referrals))
			{{-- <div class="pull-right label label-success text-center" style="margin-bottom: 0px">
				<span class="h5">REFERRALS<br/>
				{{$referrals->count()}}</span>
			</div> --}}
			@endif
			{{-- <h4 class="text-center">Earn {{$promo->credit}} points for every friend that signs up!</h4> --}}
			<h3 class="text-center">Invite your friends to join TXRA.org</a></h3>
		</div>
		<div class="panel-body text-center">	
			<div class="row margin-bottom-20">	

				<h4>Share on Social Media</h4>

				<div class="fb-share-button col-xs-4 col-sm-2 col-sm-offset-3 " data-href="{{route('refer.register', $refer->token) }}" data-layout="button_count" data-size="large" data-mobile-iframe="true">

					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(route('refer.register', $refer->token)) }}&amp;src=sdkpreparse"  class="hide-mobile social-icon social-facebook fb-share-button" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="fb://sharer/sharer.php?u={{urlencode(route('refer.register', $refer->token)) }}&amp;src=sdkpreparse"  class="show-mobile social-icon social-facebook fb-share-button" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

				</div>					
				<div class="col-xs-4 col-sm-2">
					<a href="fb-messenger://share/?link={{route('refer.register', $refer->token) }}" 
					class="social-icon social-messenger" data-toggle="tooltip"  data-placement="top" title="Messenger">
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
					</a>
				</div>
				<div class="col-xs-4 col-sm-2">
					{{--*/ $tweet = 'Sign up to win the TXRA PICK-A-FREE-TOURNEY Sweepstakes! ' /*--}}
					{{--*/ $hashtags = 'sweepstakes,referafriend,texas,racquetball,txra'  /*--}}
					<!-- {{route('refer.register', $refer->token) }} -->
					<a href="https://twitter.com/intent/tweet?text={{$tweet}}&hashtags={{$hashtags}}&url={{route('refer.register', $refer->token) }}" class="social-icon social-twitter" target="twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
				</div>
			</div>			
			<div class="row">
				<h4>Share by Email</h4>
				<form action="{{ route('refer.email', $refer->user_id) }}" method="post">
				    {{ csrf_field() }}
				    <input type="hidden" name="user_id" value="{{$refer->user_id}}">
				    <input type="hidden" name="refer_link" value="{{route('refer.register', $refer->token) }}">
    				<div class="input-group col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				    	<input id="emails" type="text" class="form-control" name="emails" placeholder="Enter email addresses separated by commas">
				    	<span class="input-group-addon">
				    		<button class="btn btn-xs btn-secondary " type="submit">
				    			<i class="glyphicon glyphicon-envelope"></i>
			    			</button>
			    		</span>
				  	</div>
				</form>
			</div>
			<div class="row margin-bottom-20">
				<h4>Share your Unique Link</h4>
				<div class="input-group col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<a href="#" data-toggle="popover"  data-placement="top" data-content="Link copied to clipboard">
			    		<input id="link" type="text" onclick="copyLink();" class="form-control" name="link" placeholder="Your Unique Link" 
			    		value="{{route('refer.register', $refer->token) }}">
			    	</a>
			    	<span class="input-group-addon">
			    		<a href="#" data-toggle="popover"  data-placement="top" data-content="Link copied to clipboard">
				    		<button class="btn btn-xs btn-secondary" type="button">
				    			<i class="fa fa-external-link"></i>
			    			</button>
		    			</a>
	    			</span>					
			  	</div>
			</div>
			

		</div>
		{{-- <div class="panel-footer">
			<div class="row">
				<div class="col-xs-12 margin-bottom-10">
					<h4 class="text-center text-primary">For every {{$promo->credit}} friends that sign up, earn an extra ticket into the<br/> 
					<a class="text-success" href="/sweepstakes">PICK-A-FREE-TOURNEY SWEEPSTAKES</a></h4>
				</div>
			</div>
			<div class ="row countTo-sm text-center box-blue">
				<div class="col-xs-6 col-sm-3 col-sm-offset-2 well well-sm">
					<i class="fa fa-share-alt text-info"></i>
					<br/>			
					<span class="countTo" data-speed="3000">{{$referrals->count()}}</span>
					<h5 class="text-white bold">MY REFERRALS</h5>
				</div>

				<div class="col-xs-6 col-sm-3 col-sm-offset-2 well well-sm">
					<i class="fa fa-ticket text-warning"></i>
					<br/>
					<span class="countTo" data-speed="3000">{{$referrals->sum('completed') / $promo->credit}}</span>
					<h5 class="text-white bold">EXTRA TICKETS</h5>
				</div>
			</div>
			@if($referrals->count()>0)
			<div class="row margin-top-10">
				<div class="col-xs-12 col-sm-offset-2 col-sm-8"> 
					<h6 class="text-info text-left">Only profiles that are 100% complete will count towards earning extra tickets.</h6>
					<table class="table table-condensed table-striped">
						<tr>
							<th>Friend</th>
							<th>Accepted On</th>
							<th class="text-right">Profile %</th>
						</tr>						
							@foreach ($referrals as $r)						
								<td class="text-primary">
									<a href="{{ route('members.show', $r->user_accept_id)}}" target="member">{{$r->accepter()->first()->full_name}}</a>
								</td>
								<td>
									{{$r->created_at->format('m/d/Y')}}
								</td>
								<td class="text-right">
									{{$r->progress}}%
								</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
			@endif			
		</div> --}}
	</div>
	
@section('script')

	<script>
		function copyLink() {
		  var link = document.getElementById("link");
		  link.select();
		  document.execCommand("Copy");		 
		}
		
	</script>
@stop