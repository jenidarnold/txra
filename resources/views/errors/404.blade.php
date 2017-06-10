<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Texas Racquetball Association</title>
		<meta name="keywords" content="Texas, racquetball, sport, racquet" />
		<meta name="description" content="" />
		<meta name="Author" content="Julienne Arnold" />

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
	</head>

	<style>
	.h1 { color:#fff !important;
	}

	</style>
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
	<body class="smoothscroll enable-animation" style="background-image: url('{{asset('images/court/empty.jpg')}} '); background-repeat: no-repeat; ">
		<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
		<div class="display-table">
			<div class="display-table-cell vertical-align-middle">
				<div class="container text-center">
					<div class="row ">
						<h1 class="bold font-raleway wow fadeInUp" style="color:#fff" data-wow-delay="0.4s">PAGE NOT FOUND</h1>
						<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" style="color:#fff" data-wow-delay=".6s">Sorry, The page you requested can not be found!</p>
						<a class="size-20 font-lato wow fadeInUp" style="color:#fff" href="/" data-wow-delay="1.9s"><i class="glyphicon glyphicon-menu-left margin-right-10 size-16"></i> Go back to TXRA homepage now!</a>					
					</div>
		
				</div>
			</div>
		</div>


	</body>


	<!-- JAVASCRIPT FILES -->
	<script type="text/javascript">var plugin_path = '/plugins/';</script>
	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.2.3.min.js') }}"></script>

	<!-- LAYER SLIDER -->
	<script type="text/javascript" src="{{ asset('plugins/slider.layerslider/js/layerslider_pack.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/view/demo.layerslider_slider.js') }}"></script>


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
</div>