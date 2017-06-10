@extends('layouts.app')
@section('style')
    <style type="text/css">
    </style>
@stop
@section('content')		

		<section class="page-header page-header-xs">
				<div class="container">

					<h1>LOGIN</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">Login</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- LOGIN -->
						<div class="col-md-6 col-sm-6">

							<!-- login form -->
							<form action="{{ url('/auth/login') }}" method="post" class="sky-form boxed">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<header class="size-18 margin-bottom-20">
									I'm a returning member
								</header>
								
								<fieldset class="nomargin">

									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input required type="email" placeholder="Email address">
										<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
									</label>
								
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-lock"></i>
										<input required type="password" placeholder="Password">
										<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
									</label>

									<div class="clearfix note margin-bottom-30">
										<a class="pull-right" href="#">Forgot Password?</a>
									</div>
									
									<label class="checkbox weight-300">
										<input type="checkbox" name="checkbox-inline">
										<i></i> Keep me logged in
									</label>

								</fieldset>

								<footer>
									<button type="submit" class="btn btn-primary noradius pull-right"><i class="fa fa-check"></i> OK, LOG IN</button>
								</footer>

							</form>
							<!-- /login form -->

							<!-- ALERT -->
							<div class="alert alert-mini alert-danger margin-bottom-30">
								<strong>Oh snap!</strong> Login Incorrect!
							</div><!-- /ALERT -->

						</div>
						<!-- /LOGIN -->

						<!-- SOCIAL LOGIN -->
						<div class="col-md-6 col-sm-6">
							<form action="#" method="post" class="sky-form boxed">

								<header class="size-18 margin-bottom-20">
									Sign In using your favourite social network
								</header>
								
								<fieldset class="nomargin">

									<div class="row">
									
										<div class="col-md-8 col-md-offset-2">

											<a class="btn btn-block btn-social btn-facebook margin-bottom-10">
												<i class="fa fa-facebook"></i> Sign in with Facebook
											</a>

											<a class="btn btn-block btn-social btn-twitter margin-bottom-10">
												<i class="fa fa-twitter"></i> Sign in with Twitter
											</a>

											<a class="btn btn-block btn-social btn-google margin-bottom-10">
												<i class="fa fa-google-plus"></i> Sign in with Google
											</a>
									
										</div>
									</div>

								</fieldset>

								<footer>
									Don't have an account yet? <a href="/register"><strong>Click to register</strong></a>
								</footer>

							</form>

						</div>
						<!-- /SOCIAL LOGIN -->

					</div>

					
				</div>
			</section>
			<!-- / -->
@stop