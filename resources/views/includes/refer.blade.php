@section('style')
	<style>
	.well {
		margin-bottom: 0px !important;
	}

	</style>
@stop

	<div class="panel panel-success">

		<div class="panel-heading">	
			<div class="pull-right label label-primary text-center" style="margin-bottom: 0px">
				<span class="h5">REFERRALS<br/>
				{{ $refer->referrals($promo->id)->count()}}</span>
			</div>
			{{-- <h3 class="text-center">Invite your friends & win</h3> --}}
			<h4 class="text-center">Earn {{$promo->credit}} credits for every friend that signs up!</h4>
		</div>
		<div class="panel-body text-center">	
			<div class="row margin-bottom-20">	

				<h4>Share on Social Media</h4>

				<div class="fb-share-button col-xs-4 col-sm-2 col-sm-offset-3 " data-href="{{route('refer.invite', $refer->token) }}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(route('refer.invite', $refer->token)) }}&amp;src=sdkpreparse"  class="social-icon social-facebook fb-share-button" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
				</div>					
				<div class="col-xs-4 col-sm-2">
					<a href="fb-messenger://share/?link={{route('refer.invite', $refer->token) }}" 
					class="social-icon social-messenger" data-toggle="tooltip"  data-placement="top" title="Messenger">
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
					</a>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="#" class="social-icon social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
				</div>
			</div>
			<div class="row margin-bottom-20">
				<h4>Share your unique link</h4>
				<div class="input-group col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<a href="#" data-toggle="popover"  data-placement="top" data-content="Link copied to clipboard">
			    		<input id="link" type="text" onclick="copyLink();" class="form-control" name="link" placeholder="Your Unique Link" 
			    		value="{{route('refer.invite', $refer->token) }}">
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
			<div class="row">
				<h4>Invite your friends by email</h4>
				<form action="{{ route('refer.email', $refer->user_id) }}" method="post">
				    {{ csrf_field() }}
    				<div class="input-group col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				    	<input id="email" type="text" class="form-control" name="email" placeholder="Enter email addresses separated by commas">
				    	<span class="input-group-addon">
				    		<button class="btn btn-xs btn-secondary " type="submit">
				    			<i class="glyphicon glyphicon-envelope"></i>
			    			</button>
			    		</span>
				  	</div>
				</form>

			</div>

		</div>
		{{-- <div class="panel-footer">
			

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