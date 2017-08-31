
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Texas Racquetball Association</title>
		<meta name="keywords" content="Texas, racquetball, sport, racquet" />
		<meta name="description" content="" />
		<meta name="Author" content="Julienne Arnold" />
		<meta property="og:title" content="Texas Racquetball Association"/>
		<meta property="og:description" content="TXRA leads the Texas racquetball community in supporting the sport on the local, state, national, and international levels."/>
		<meta property="og:url" content="http://67.205.179.1"/>		
		<meta property="og:image" content="http://67.205.179.1/images/logos/txra_logo_og.png"/>
		<meta property="og:image:width" content="746"/>
		<meta property="og:image:height" content="746"/>
		<meta property="og:image:type" content="image/png" />


		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- LAYER SLIDER -->
		<link href="{{ asset('plugins/slider.layerslider/css/layerslider.css') }}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{ asset('css/essentials.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{ asset('css/header-1.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

		<style>
			.credit {
				color: #fff;
				opacity: .8;
				position: absolute; 
				bottom: 0;
				padding-left:10px;
				font-size: 8pt;
			}

		</style>
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="enable-animation bg-grey">


		<!-- wrapper -->
		<div id="wrapper">

			<!-- HEADER -->
			<div id="header" class="sticky transparent clearfix">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container"><!-- add .full-container for fullwidth -->

						<ul class="pull-right list-inline mobile-block list-social-icons margin-top-30 hidden-xs">
							<li>
								<a href="https://www.facebook.com/TXRA-Texas-Racquetball-Association-187625447927010/" target="new" class="social-icon social-icon-transparent social-icon-sm social-facebook pull-left" data-toggle="tooltip" data-placement="bottom" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/TXRballAssoc" target="new" class="social-icon social-icon-transparent social-icon-sm social-twitter pull-left" data-toggle="tooltip" data-placement="bottom" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#contactModal" class="social-icon social-icon-transparent social-icon-sm pull-left" data-placement="bottom" title="Contact Us">
									<i class="et-envelope"></i>
									<i class="et-envelope"></i>
								</a>
							</li>
						</ul>

						<!-- Logo --> 
						<a href="/welcome" class="hidden-xs hidden-sm"><img src="{{ asset('images/logos/txra_logo.png')}}" style="height:50px;display:inline;margin-top:10px" alt="" /></a>
						<a href="/welcome"><img src="{{ asset('images/logos/txra_logo.png')}}" class="hidden-md hidden-lg" style="height:50px; padding-top:5px; display:inline;" alt="" /></a>
					</div>
				</header>

			</div>
			<!-- /HEADER -->



			<!-- -->
			<section id="slider" class="fullheight" style="height:800px; background:url('{{asset('images/landing/restrung_bw.jpg')}}');">
				<div class="overlay dark-5"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container text-center">

							<h1 class="margin-bottom-20 size-40 margin-top-80">TEXAS RACQUETBALL ASSOCIATION</h1>
							<h4 class="size-30 font-lato text-muted"><i>This site is being restrung.</h4>
							<h4 class="size-30 font-lato text-muted"><i>Come back soon!</i></h4>
							
						<!-- Bordered Theme Style Countdown -->
							<div class="countdown circle" data-from="September 16, 2017 08:00:00"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
							<h1></h1>
							<h5 class="size-30 font-lato text-muted"><i>Subscribe for updates</i></h5>

							<div style="max-width:500px; margin:auto; padding-bottom:5px">

								<form class="validate nomargin" action="{{ url('subscribe') }}" method="post" data-success="Subscribed! Thank you!" data-toastr-position="top-right">
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

							</div>
						
						</div>
					</div>

				
	
			</section>
			<!-- / -->

			<!-- Photo Credit -->
			<div class="credit">
				<p class="text smaller">Photo courtesy of Eddie Vann a.k.a. String King</p>
			</div>


			<!-- MODAL -->
			<div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">CONTACT US</h4>
						</div>

						<!-- AJAX CONTACT FORM USING VALIDATE PLUGIN -->
						<form class="validate nomargin" action="php/contact.php" method="post">

							<!-- Modal Body -->
							<div class="modal-body">

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input type="text" value="" class="form-control required" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input type="email" value="" class="form-control required" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="contact:subject">Subject *</label>
												<input type="text" value="" class="form-control required" name="contact[subject][required]" id="contact:subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Department</label>
												<select class="form-control pointer" name="contact[department]">
													<option value="">--- Select ---</option>
													<option value="Board">Board</option>													
													<option value="Marketing">Marketing</option>
													<option value="Webdesign">Webdesign</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea maxlength="10000" rows="8" class="form-control required" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										
									</div>
								</div>

							</div>

							<!-- Modal Footer -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary pull-left"><i class="fa fa-check"></i> SEND MESSAGE</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- /MODAL -->


		</div>
		<!-- /wrapper -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/plugins/';</script>
		<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.2.3.min.js') }}"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-61761895-4', 'auto');
		  ga('send', 'pageview');
		</script>
	</body>
</html>
