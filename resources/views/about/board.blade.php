@extends('layouts.app')
@section('style')
    <style type="text/css">
    .social-twitter {
    	display: none;
    }
    .box-flip {
    	margin-bottom: 10px;
    	min-height: 260px;
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

			<h1>TXRA BOARD MEMBERS</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li class="active">Board of Directors</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	<!-- /PAGE HEADER -->

			<!-- -->
			<section>
				<div class="container">
					
					<p class="lead">The Board of the Texas Racquetball Association is committed to our members and the growth of racquetball in Texas from recreational play to international competition.</p>
					<p>Our mission is to provide racquetball opportunities for all levels of participation. We promote the sport with various marketing efforts. We expand our membership by recruiting at the grassroot level. We strive to provide many services for our members</p>

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="{{ asset('images/board/michael_kaplan.png')}}" alt="" />
											<h2>Michael Kaplan</h2>
											<small>PRESIDENT</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Michael Kaplan</h4>
										<small>PRESIDENT</small>
										<ul>
											<li></li>
											<li>Strategic Planning</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Michael Kaplan'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/sean_arnold.png')}}" alt="" />
											<h2>Sean Arnold</h2>
											<small>VICE PRESIDENT</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Sean Arnold</h4>
										<ul>
											<li>Governance</li>
											<li>Strategic Planning</li>
											<li></li>
										</ul>

										<hr>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Sean Arnold'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/mike_grisz.png')}}" alt="" />
											<h2>Mike Grisz</h2>
											<small>TREASURER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Mike Grisz</h4>									
										<ul>
											<li>Finance (Chair)</li>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
										</ul>
										<hr>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
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
											<img class="img-responsive" src="{{ asset('images/board/mitchell_mccoy.png')}}" alt="" />
											<h2>Mitchell McCoy</h2>
											<small>SECRETARY</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Mitchell McCoy</h4>
										<ul>
											<li>Finance</li>
											<li></li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
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
											<img class="img-responsive" src="{{ asset('images/board/wendy_akins.png')}}" alt="" />
											<h2>Wendy Akins</h2>
											<small>JUNIOR LIASON</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Wendy Akins</h4>
										<ul>
											<li>Awards</li>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Wendy Akins'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/julie_arnold.png')}}" alt="" />
											<h2>Julienne Arnold</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Julienne Arnold</h4>
										<ul>
											<li>Awards</li>
											<li>Communications (Chair)</li>
											<li></li>
										</ul>
										<hr/>

										<a href="http://m.me/julienne.arnold"  target="_blank" class="social-icon social-icon-sm social-facebook">
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
											<img class="img-responsive" src="{{ asset('images/board/tom_doughty.png')}}" alt="" />
											<h2>Tom Doughtry</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Tom Doughtry</h4>
										<ul>
											<li>Governance</li>
											<li>Communications</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Tom Doughtry'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/brad_giezentanner.png')}}" alt="" />
											<h2>Brad Giezentanner</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Brad Giezentanner</h4>
										<ul>
											<li>Communications</li>
											<li>Youth and Collegiate</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
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
											<img class="img-responsive" src="{{ asset('images/board/lance_gilliam.png')}}" alt="" />
											<h2>Lance Gilliam</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Lance Gilliam</h4>
										<ul>
											<li>Finance</li>
											<li>Governance</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Lance Gilliam'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/dale_gosser.png')}}" alt="" />
											<h2>Dale Gosser</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Dale Gosser</h4>
										<ul>
											<li>Communications</li>
											<li></li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
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
											<img class="img-responsive" src="{{ asset('images/board/john_oneill.png')}}" alt="" />
											<h2>John O'Neill</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">John O'Neill</h4>
										<ul>
											<li>Governance</li>
											<li>Strategic Planning</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'John O\'Neill'))}}" class="social-icon social-icon-sm social-linkedin">
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
											<img class="img-responsive" src="{{ asset('images/board/mike_sorensen.png')}}" alt="" />
											<h2>Mike Sorensen</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Mike Sorensen</h4>
										<ul>
											<li>Awards</li>
											<li>Communications</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
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
											<img class="img-responsive" src="{{ asset('images/board/terry_wenetschlaeger.png')}}" alt="" />
											<h2>Terry Wenetschlaeger</h2>
											<small>BOARD MEMBER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Terry Wenetschlaeger</h4>
										<ul>
											<li>Strategic Planning</li>
											<li>Youth and Collegiate</li>
											<li></li>
										</ul>
										<hr/>

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="{{ route('contact',array('to' => 'Terry Wenetschlaeger'))}}" class="social-icon social-icon-sm social-linkedin">
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
							<h3>Want to volunteer to work on a committee?</h3>
							<p>If so, click to sign up, and be part of our dynamic team!</p>
						</div>

						<div class="col-md-3"><!-- button -->
							<a href="{{ route('committees.index')}}" class="btn btn-primary btn-lg">Join Our Team</a>
						</div>

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->
@stop