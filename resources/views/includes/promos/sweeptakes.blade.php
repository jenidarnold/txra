

{{-- <div class="row text-center">
	<div class="col-xs-12">
		<h3 class="text-info">Sign Up to Win a Free Tournament Entry</h3>
	</div>
</div> --}}

<div class="row">
	<div class="col-sm-4 col-md-3 box-color text-center">
		<div class="box-icon box-danger box-icon-center box-icon-round box-icon-transparent box-icon-large box-icon-content">
			<div class="box-icon-title">
				<i class="fa fa-gift text-danger"></i>
				<h2 class="text-white margin-bottom-0">SIGN UP TO</h2>
			</div>
				<span class="h1 bold">WIN</span><br/>
				<span class="h3">FREE ENTRY TOURNAMENT</span><br/>
				<span class="h5">and other great prizes</span><br/>			
		</div>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-9">
	 	<h4 class="text-primary">How to participate:</h4>
	 	<ul class="list-unstyled list-icons text-left">
			<li class="text-primary"><i class="fa fa-star text-warning"></i> Create a TXRA account, and complete your profile. 
			<li class="text-primary"><i class="fa fa-star text-warning"></i>If you already have an account, just complete your profile.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>All eligible profiles will be entered in to a drawing for a chance to win a FREE ENTRY into a TXRA sanctioned tournament of your choice.
			<li class="text-primary"><i class="fa fa-star text-warning text-bold"></i>Three winners will receive the FREE ENTRY prize!
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Multiple winners will receive other great prizes.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Use our <a href="/refer">Refer-a-Friend</a> program to earn more chances to win.
			<li class="text-danger"><i class="fa fa-star text-warning text-bold"></i>Sweepstakes ends February 1, 2018.
			<li class="text-primary"><i class="fa fa-star text-warning"></i>Winners will be announced on February 7th, 2018 by email and posted here on our website and on the <a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="facebook">TXRA Facebook Page</a>.
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
		<h6><a href="promo-terms" class="text-muted">terms and conditions apply</a></h6>
	</div>
</div>