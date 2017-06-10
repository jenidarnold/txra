@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')

<section class="page-header page-header-xs">
	<div class="container">

		<!-- breadcrumbs -->
		<ol class="breadcrumb breadcrumb-inverse">
			<li><a href="/welcome">HOME</a></li>
			<li><a href="{{ route('members.listing')}} ">JUNIORS</a></li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->


			<!-- REVOLUTION SLIDER -->
			<div class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullscreenbanner" data-height="600" data-shadow="0" data-navigationStyle="preview1">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="assets/images/demo/thematics/restaurant/slider_1-min.jpg">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/thematics/restaurant/slider_1-min.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption font-khausan-script customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="230"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								Smarty Restaurant
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="350"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>


						</li>

						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="assets/images/demo/thematics/restaurant/slider_2-min.jpg">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/thematics/restaurant/slider_2-min.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption font-khausan-script customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="230"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								Our Chief's Choice
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="350"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>


						</li>

						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="assets/images/demo/thematics/restaurant/slider_3-min.jpg">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/thematics/restaurant/slider_3-min.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="230"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								SMARTY RESTAURANT
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="320"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>
						</li>

					</ul>

					<div class="tp-bannertimer"><!-- progress bar --></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->


			
			<!-- Welcome -->
			<section>
				<div class="container">

					<div class="text-center margin-top-80 margin-bottom-100 clearfix">
						<h1 class="font-khausan-script size-50 weight-300 nomargin-bottom">Welcome! <span>Junior</span> Racquetball Players.</h1>
						<hr />
						<h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-400 size-25">For Ages 2 and Up!</h2>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive" src="assets/images/demo/thematics/restaurant/chef_1-min.jpg" alt="img" />
							<h3 class="margin-top-10">State Junior Team</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
							<a href="#" class="btn btn-default">JOIN THE TEAM</a>
						</div>

						<div class="col-sm-4">
							<img class="img-responsive" src="assets/images/demo/thematics/restaurant/chef_2-min.jpg" alt="img" />
							<h3 class="margin-top-10">Our Coaches</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
							<a href="#" class="btn btn-default">VIEW COACHES</a>
						</div>

						<div class="col-sm-4">
							<img class="img-responsive" src="assets/images/demo/thematics/restaurant/restaurant-min.jpg" alt="img" />
							<h3 class="margin-top-10"> </h3>
							<p>
								Phone: +1 650-999-0000 <br />
								Address: 1600 Amphitheatre Parkway <br />
								Mountain View, CA 94043 <br />
							</p>
							<a href="#reservation" class="btn btn-success scrollTo">JOIN TODAY</a>
						</div>
					</div>

				</div>
			</section>
			<!-- /Welcome -->
			
		

			<!-- Local Programs -->
			<section class="alternate">
				<div class="container">

					<div class="row">
					
						<div class="col-sm-6 text-center-xs">

							<h2 class="font-khausan-script size-50 weight-300 nomargin-bottom "><span>Local Programs</span></h2>
							<h3 class="weight-400 size-25">MORE ENERGY &amp; POWER</h3>
							
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<p class="size-11"><b>Note:</b> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					
						</div>
						
						<div class="col-sm-6">
							
							<div class="row lightbox" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/a-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/a-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/e-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/e-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/f-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/f-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/g-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/g-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/h-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/h-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/i-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/i-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/j-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/j-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/k-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/k-min.jpg" alt="" />
									</a>
								</div>

								<div class="col-sm-4 col-xs-6">
									<a class="thumbnail" href="assets/images/demo/thematics/restaurant/l-min.jpg">
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/l-min.jpg" alt="" />
									</a>
								</div>

							</div>
							
						</div>

					</div>

				</div>
			</section>
			<!-- /Healthy -->



			<!-- Parallax -->
			<section class="parallax parallax-1" style="background-image: url('assets/images/demo/thematics/restaurant/slider_3-min.jpg');">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="font-khausan-script nomargin weight-300"><span>Our Menu</span></h3>
						<p class="font-lato weight-300 lead nomargin-top">YOU'LL LOVE IT. VARIOUS FOODS.</p>
					</div>

				</div>
			</section>
			<!-- /Parallax -->





			<!-- Menu -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-sm-6">
							
							<h2>New This Year</h2>
							<ul class="list-unstyled">

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/a-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/a-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>CRISPY SCOTTISH</span></h5>
									<span class="label label-success pull-right">POPULAR</span>
									<p class="nomargin size-12">Alba White Truffle, Robiolo Emulsion</p>
								</li>

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/e-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/e-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>MAINE LOBSTER SALAD</span></h5>
									<p class="nomargin size-12">Glazed Sunchoke, Parsley Salad</p>
								</li>

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/f-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/f-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>SWEETBREAD AND PORCINI</span></h5>
									<p class="nomargin size-12">Grilled Celery Blue Mountain</p>
								</li>

							</ul>
							
						</div>

						<div class="col-sm-6">

							<h2>Party Specialities</h2>
							<ul class="list-unstyled">

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/g-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/g-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>JADE TIGER ABALONE</span></h5>
									<p class="nomargin size-12">Fennel Mousseline, Sea Urchin, Finger Lime</p>
								</li>

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/h-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/h-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>FOIE GRAS BALLOTINE</span></h5>
									<span class="label label-success pull-right">CHEF SELECTION</span>
									<p class="nomargin size-12">Fingerling Potatoes, Ossetra Caviar</p>
								</li>

								<li class="restaurant-menu-item border-bottom-dashed relative clearfix margin-bottom-40">
									<a class="pull-left thumbnail nomargin-bottom lightbox" href="assets/images/demo/thematics/restaurant/i-min.jpg" data-plugin-options='{"type":"image"}'>
										<img class="img-responsive" src="assets/images/demo/thematics/restaurant/i-min.jpg" width="50" alt="" />
									</a>
									<span class="pull-right size-17">$32<sup>00</sup></span>
									<h5 class="margin-bottom-3"><span>CHILLED SHIGOKU OYSTERS</span></h5>
									<p class="nomargin size-12">Hawaian Hearts of Palm, Romaine Lettuce</p>
								</li>

							</ul>

						</div>

					</div>

					<div class="text-center margin-top-40">
						<a href="#" class="btn btn-default">VIEW DETAILED MENU</a>
					</div>

				</div>
			</section>
			<!-- /Menu -->





			<!-- Parallax -->
			<section class="parallax parallax-2" style="background-image: url('assets/images/demo/video/back.jpg');">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="font-khausan-script nomargin weight-300"><span>Junior Events</span></h3>
						<p class="font-lato weight-300 lead nomargin-top">YOU DON'T WANT TO MISS OUR EVENTS</p>
					</div>

				</div>
			</section>
			<!-- /Parallax -->





			<!-- Events -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-60 clearfix">
						<h2 class="weight-300 nomargin-bottom">UPCOMING <strong>EVENTS</strong></h2>
					</header>

					<ul class="list-unstyled">

						<li class="clearfix border-bottom-dotted relative margin-bottom-10">
							<a class="clearfix size-20 block relative padding-10" href="#">
								<span class="pull-right text-black size-14">29 June 2015 / 09:00am - 12:00 pm</span>
								HALLOWEEN MAX PARTY
							</a>
						</li>

						<li class="clearfix border-bottom-dotted relative margin-bottom-10">
							<a class="clearfix size-20 block relative padding-10" href="#">
								<span class="pull-right text-black size-14">29 June 2015 / 09:00am - 12:00 pm</span>
								NAKED SENSATION
							</a>
						</li>

						<li class="clearfix border-bottom-dotted relative margin-bottom-10">
							<a class="clearfix size-20 block relative padding-10" href="#">
								<span class="pull-right text-black size-14">29 June 2015 / 09:00am - 12:00 pm</span>
								HOUSE PARTY FOR EVERYONE
							</a>
						</li>

						<li class="clearfix border-bottom-dotted relative margin-bottom-10">
							<a class="clearfix size-20 block relative padding-10" href="#">
								<span class="pull-right text-black size-14">29 June 2015 / 09:00am - 12:00 pm</span>
								HALLOWEEN MAX PARTY
							</a>
						</li>

					</ul>

				</div>
			</section>
			<!-- /Events -->




			<!-- Parallax -->
			<section class="parallax padding-xlg parallax-3" style="background-image: url('assets/images/demo/thematics/restaurant/parallax-min.jpg');">
				<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin font-khausan-script"><span>LESSONS & CLINICS</span></h3>
						<p class="font-lato weight-300 lead nomargin-top">JOIN A NOW</p>
					</div>

				</div>

			</section>
			<!-- /Parallax -->




			<!-- Reservation -->
			<section id="reservation" class="alternate">
				<div class="container">

					<header class="text-center margin-bottom-60 clearfix">
						<h2 class="weight-300 nomargin-bottom">JUNIOR <strong>SIGNUP</strong></h2>
					</header>

					<form class="validate" action="php/contact.php" method="post" data-success="Reservation sent! Thank you!" data-toastr-position="bottom-right">
						<div class="row">
							<div class="col-md-4">
								<input type="text" id="reservation_name" name="reservation_name" class="form-control required" placeholder="Name*">
							</div>

							<div class="col-md-4">
								<input type="email" id="reservation_email" name="reservation_email" class="form-control required" placeholder="Email*">
							</div>

							<div class="col-md-4">
								<input type="text" id="reservation_phone" name="reservation_phone" class="form-control required" placeholder="Phone*">
							</div>

						</div>
						<div class="row">

							<div class="col-md-4">
								<input type="text" id="reservation_date" name="reservation_date" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" placeholder="Reservation Date*">
							</div>

							<div class="col-md-4">
								<input type="text" id="reservation_hour" name="reservation_hour" class="form-control required timepicker" value="11 : 00 : PM" placeholder="Reservation Hour*">
							</div>

							<div class="col-md-4">
								<select id="reservation_people" name="reservation_people" class="form-control required">
									<option value="1">1 Person</option>
									<option value="2" selected="selected">2 People</option>
									<option value="3">3 People</option>
									<option value="4">4 People</option>
									<option value="5">5 People</option>
									<option value="6">6 People</option>
									<option value="7">7 People</option>
									<option value="8">8 People</option>
									<option value="9">9 People</option>
									<option value="10">10 People</option>
									<option value="12">12 People</option>
									<option value="15">15 People</option>
									<option value="20">20 People</option>
									<option value="25">25 People</option>
									<option value="30">30 People</option>
								</select>
							</div>

						</div>

						<button class="btn btn-success" type="submit">SUBMIT</button>

					</form>

				</div>
			</section>
			<!-- /Reservation -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


@stop