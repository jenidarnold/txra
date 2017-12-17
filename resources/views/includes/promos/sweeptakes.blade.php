

{{-- <div class="row text-center">
	<div class="col-xs-12">
		<h3 class="text-info">Sign Up to Win a Free Tournament Entry</h3>
	</div>
</div> --}}

<div class="row">
	<div class="col-sm-4 col-md-3">
		@include('includes.promos.promo_box', array('show_link' => false))   
	</div>
	<div class="col-xs-12 col-sm-8 col-md-9">
	 	<h4 class="text-primary">How to participate:</h4>
	 	<ul class="list-unstyled list-icons text-left">
			<li class="text-primary"><i class="fa fa-star text-warning"></i> Create a TXRA account, and complete your profile. 
			<li class="text-primary"><i class="fa fa-star text-warning"></i>If you already have an account, just complete your profile.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>All eligible profiles will be entered in to a drawing for a chance to win a FREE ENTRY into a TXRA sanctioned tournament of your choice.
			<li class="text-primary"><i class="fa fa-star text-warning text-bold"></i>One Grand Prize Winner will receive two free divisions.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Two runner-ups will receive one free division.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Use our <a href="/refer">Refer-a-Friend</a> program to earn more chances to win.
			<li class="text-danger"><i class="fa fa-star text-warning text-bold"></i>Sweepstakes ends February 1, 2018.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Winners will be announced on February 7th, 2018 by email, on our website, and on the <a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="facebook">TXRA Facebook Page</a>.
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<a href="/register"><button class="btn btn-success btn-block">I want to Create an account and Enter Now!</button></a>
	</div>
	<div class="col-xs-12 col-sm-6">
		@if(Auth::guest())
			<a href="/login"><button class="btn btn-info btn-block">I have an account. Login and Complete My Profile.</button></a>
		@else
			<a href="{{ route('members.show', array('id' =>Auth::user()->id ))}}"><button class="btn btn-info btn-block">I have an account. Complete My Profile.</button></a>
		@endif
	</div>
</div>

<div class="row text-center margin-top-20">
	<div class="col-xs-12">
		<h6><a href="/contest-rules" class="text-muted">* Read complete contest rules. Terms and conditions apply.</a></h6>
	</div>
</div>