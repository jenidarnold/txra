<footer id="footer">
	<div class="container">

		<div class="row text-center">
			<h6>
				<!-- Footer Logo -->			
				<a href="/welcome"><img src="{{ asset('images/logos/TXRA_full_logo.png')}}" class="hidden-md hidden-sm hidden-xs" style="max-height:90px; padding-top:5px;" alt="" /></a>
				<a href="/welcome"><img src="{{ asset('images/logos/TXRA_full_logo.png')}}" class="hidden-sm hidden-xs hidden-lg" style="max-height:80px; padding-top:5px;" alt="" /></a>
				<a href="/welcome"><img src="{{ asset('images/logos/TXRA_logo_only.png')}}" class="hidden-md hidden-lg" style="max-height:50px; padding-top:5px; display:inline;" alt="" /></a>
			</h6>
		</div>
		<div class="row">

			<div class="col-md-4 col-sm-4">
				
			
				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						{{-- <li class="footer-sprite address">
							5220 McKinney Avenue, Suite 200<br>
							Dallas, Texas<br>
							75205 USA<br>
						</li> --}}
						<li class="footer-sprite phone">
							Phone: 1-214-560-0510
						</li>
						<li class="footer-sprite email">
							<a href="/contact" title="Contact Us">{!! env('MAIL_TO_CONTACT') !!}</a>
						</li>
					</ul>
				</address>
				<!--/Contact Address -->

			</div>

			<div class="col-md-8 col-sm-6">

				<!-- Newsletter Form -->
				<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
				<p>Subscribe to our Newsletter to get important news</p>

				<form class="validate" action="{{ url('subscribe')}} " method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="subscription_id"  value="1">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit">Subscribe</button>
						</span>
					</div>
				</form>
				<!-- /Newsletter Form -->

				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="new" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://twitter.com/TXRballAssoc" target="new" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<!--a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a-->

					{{-- <a href="#" data-toggle="modal" data-target="#contactModal" class="social-icon social-icon-border pull-left" data-placement="bottom" title="Contact Us"> --}}
					<a href="{{ route('contact')}}" class="social-icon social-icon-border pull-left" data-placement="bottom" title="Contact Us">					
						<i class="fa fa-envelope"></i>
						<i class="fa fa-envelope"></i>
					</a>
				</div>
				<!-- /Social Icons -->
			</div>

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="{{ url('/terms-of-use')}}">Terms &amp; Conditions</a></li>
				<li>&bull;</li>
				<li><a href="{{ url('/privacy')}}">Privacy</a></li>
			</ul>
			&copy; All Rights Reserved, TXRA.ORG
		</div>
	</div>
</footer>