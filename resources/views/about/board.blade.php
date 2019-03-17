@extends('layouts.app')
@section('style')
    <style type="text/css">
    .social-twitter {
    	display: none;
    }
    .box-flip {
    	margin-bottom: 10px;
    	height: 260px;
    }

    ul,li { list-style-type: none;
        list-style-position:inside;
        margin:0;
        padding:0; 
        font-size: 8pt;
    }
    </style>
@stop
@section('content')		
	<section class="page-header page-header-xs">
		<div class="container">

			<h1><img src="{{asset('images/board/board.png')}}" height="24px"> BOARD OF DIRECTORS</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/about/board">Directors</a></li>
				<li><a href="/about/committees">Commitees</a></li>
				<li><a href="/election/process">Elections</a></li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">
					
					<p class="lead">The TXRA Board of Directors is committed to our members and the growth of racquetball in Texas from recreational play to international competition.</p>
					<p>Our mission is to provide racquetball opportunities for all levels of participation. We promote the sport with various marketing efforts. We expand our membership by recruiting at the grassroot level. We strive to provide many services for our members.</p>

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/mike_grisz.png')}}" alt="" />
											<h2>Mike Grisz</h2>
											<small>PRESIDENT</small>
										</div>
									</div>
								</div>
								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Mike Grisz</h4>									
										<ul>
											<li>Finance (Chair)</li>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
										</ul>
										<hr>

										{{-- <a target= "new" href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a> --}}
										<a href="{{ route('contact',array('to' => 'Mike Grisz'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/tom_doughty.png')}}" alt="" />
											<h2>Tom Doughty</h2>
											<small>VICE PRESIDENT</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Tom Doughty</h4>
										<ul>
											<li>Governance</li>
											<li>Communications</li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Tom Doughty'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/mitchell_mccoy.jpg')}}" alt="" />
											<h2>Mitchell McCoy</h2>
											<small>TREASURER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Mitchell McCoy</h4>
										<ul>
											<li>Finance</li>
											<li></li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/mitchell.mcoy.52" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Mitchell McCoy'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/julie_arnold.png')}}" alt="" />
											<h2>Julienne Arnold</h2>
											<small>SECRETARY</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Julienne Arnold</h4>
										<ul>
											<li>Awards</li>
											<li>Communications (Chair)</li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/julienne.arnold"  target="_blank" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Julienne Arnold'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/anita_pena.png')}}" alt="" />
											<h2>Anita Johnson-Florez</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Anita Johnson-Florez</h4>
										{{-- <ul>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
											<li></li>
										</ul> --}}
										<hr/>

										{{-- <a target= "new" href="http://m.me/" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a> --}}
										<a href="{{ route('contact',array('to' => 'Anita Johnson-Florez'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->


						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/jeff_franco.png')}}" alt="" />
											<h2>Jeff Franco</h2>
											<small>Board Member</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Jeff Franco</h4>
										{{-- <ul>
											<li>Awards</li>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
										</ul> --}}
										<hr/>

										{{-- <a target= "new" href="http://m.me/wendy.s.akins.1" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a> --}}
										<a href="{{ route('contact',array('to' => 'Jeff Franco'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->						
											
					
						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/jon_friedman.png')}}" alt="" />
											<h2>Jon Friedman</h2>
											<small>Board Member</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Jon Friedman</h4>
										{{-- <ul>
											<li>Awards</li>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
										</ul> --}}
										<hr/>

									{{-- 	<a target= "new" href="http://m.me/" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a> --}}
										<a href="{{ route('contact',array('to' => 'Jon Friedman'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->						
											

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/brad_giezentanner.png')}}" alt="" />
											<h2>Brad Giezentanner</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Brad Giezentanner</h4>
										<ul>
											<li>Communications</li>
											<li>Youth and Collegiate</li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/brad.giezentanner" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Brad Giezentanner'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/dale_gosser.jpg')}}" alt="" />
											<h2>Dale Gosser</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Dale Gosser</h4>
										<ul>
											<li>Awards</li>
											<li>Communications</li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/dale.gosser" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Dale Gosser'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/sandy_rios.png')}}" alt="" />
											<h2>Sandy Rios</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										{{-- <h4 class="nomargin">Sandy Rios</h4>
										<ul>
											<li>Governance</li>
											<li>Communications</li>
											<li></li>
										</ul> --}}
										<hr/>

										{{-- <a target= "new" href="http://m.me/" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a> --}}
										<a href="{{ route('contact',array('to' => 'Sandy Rios'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/mike_sorensen.png')}}" alt="" />
											<h2>Mike Sorensen</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Mike Sorensen</h4>
										<ul>
											<li>Awards</li>
											<li>Communications</li>
											<li>TIP Coordinator</li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/ShakeItForLife" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Mike Sorensen'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

											<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/bob_sullins.jpg')}}" alt="" />
											<h2>Bob Sullins</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">Bob Sullins</h4>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/bob.sullins" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Bob Sullins'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->	


						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/2019/david_weiser.jpg')}}" alt="" />
											<h2>David Weiser</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-info">
										<h4 class="nomargin">David Weiser</h4>
										<ul>
											<li></li>
											<li></li>
											<li></li>
										</ul>
										<hr/>

										<a target= "new" href="http://m.me/davidaweiser" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'David Weider'))}}" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-envelope"></i>
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->
				</div>
			</section>
			<!-- / -->


			<!-- CALLOUT -->
			<div class="callout callout-theme-color">
				<div class="container">

					<div class="row">
						<div class="col-md-9"><!-- title + shortdesc -->
							<h3>Call for Volunteers!</h3> 
							<h4>We have many committees that need your help, talent, and support.</h4><a href="{{ route('committees.index')}}" class="btn btn-primary btn-lg">Join Our Team</a>
						</div>
					</div>

				</div>
			</div>
			<!-- /CALLOUT -->
@stop