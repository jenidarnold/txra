@section('style')
	<style>
	.well {
		margin-bottom: 0px !important;
	}

	</style>
@stop

<div class="container">
	<div class="panel panel-success">

		<div class="panel-heading">	
			<div class="pull-right well text-center" style="margin-bottom: 0px">
				<span class="h5 text-primary">REFERRALS<br/>
				2</span>
			</div>
			<h3 class="text-center">Invite your friends & win</h3>
			<h4 class="text-center">Win 20 credits for every friend that signs up!</h4>
		</div>
		<div class="panel-body text-center">	
			<div class="row margin-bottom-20">	
				<div class="text-center">
					<h4>Share on Social Media</h4>
					<a href="#" class="social-icon social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					
					<a href="#" class="social-icon social-messenger" data-toggle="tooltip"  data-placement="top" title="Messenger">
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
						<img width="40px" src="{{ asset('images/icons/messenger.png')}}"></i>
					</a>

					<a href="#" class="social-icon social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
				</div>
			</div>
			<div class="row margin-bottom-20">
				<h4>Share your unique link</h4>
				<div class="input-group col-md-6 col-md-offset-3 col-sm-12">
			    	<span class="input-group-addon"><i class="fa fa-external-link"></i></span>
					<a href="#" data-toggle="popover"  data-placement="top" data-content="Link copied to clipboard">
			    		<input id="link" type="text" onclick="copyLink();" class="form-control" name="link" placeholder="Your Unique Link" value="mylink">
			    	</a>
			  	</div>
			</div>
			<div class="row">
				<h4>Invite your friends by email</h4>
				<form action="{{ route('invite') }}" method="post">
				    {{ csrf_field() }}
    				<div class="input-group col-md-6 col-md-offset-3 col-sm-12">
				    	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				    	<input id="email" type="text" class="form-control" name="email" placeholder="Emeter email addresses sepateed by commas">
				  	</div>
				</form>

			</div>

		</div>
		<div class="panel-footer">


		</div>
	</div>
	
</div>

@section('script')

	<script>
	function copyLink() {
		  var link = document.getElementById("link");
		  link.select();
		  document.execCommand("Copy");
		}

	</script

@stop