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

		<!-- THEME CSS -->
		<link href="{{ asset('css/foundation-emails.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />

		<style>
			#header {
				height: 60px !important;
				color: #fff;
				background: #313131;
			}
			#footer {
    			color: rgba(255,255,255,0.6);
				background: #313131;
    		}
		</style>

	</head>


	<body class="enable-animation">


		<!-- wrapper -->
		<div id="wrapper">

			<!-- HEADER -->
			<div id="header" class="">
				<center>
					<img src="{{ asset('images/logos/txra_logo.png')}}" style="height:100px;display:inline;" alt="" />		
  					<h1>TEXAS RACQUETBALL ASSOCIATION</h1>
				</center>
			</div>
			<!-- /HEADER -->


			<!-- -->
			<section>
				<div class="container text-center">
					<center>
						<h3 class="margin-bottom-20 size-30">
						Hello, {{ $invite->full_name}}! 
						</h3>
						
						<h2>
						Activate your New TXRA Account
						</h2>

						<div style="max-width:550px; margin:auto; margin-top:60px;">							
							<a href="{{ route('invite.accept', $invite->token) }}">Click here</a> to activate!
						</div>
					</center>
				</div>
			</section>
			<!-- / -->




			<!-- -->
			<section class="noborder-bottom">
				<div class="container">
			
					<div style="max-width:550px; margin:auto;">


					</div>

				</div>
			</section>
			<!-- / -->



			<!-- FOOTER -->
			<footer id="footer" class="sticky">

				<div class="copyright">
					<div class="container">
						
						<span class="block" style="margin-top:20px">
							<center>&copy; All Rights Reserved, TXRA.org</center>
						</span>

					</div>
				</div>

			</footer>
			<!-- /FOOTER -->



		</div>
		<!-- /wrapper -->

</html>