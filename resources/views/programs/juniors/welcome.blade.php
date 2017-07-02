@extends('layouts.app')
@section('style')
    <style type="text/css">
     .junior {
     	font-family: 'Comic Sans MS', cursive, sans-serif;
     	font-weight: 600;

     }
    </style>
@stop	
@section('content')		

	<!-- SLIDER -->
			<section id="slider" class="fullheight">
				<div class="overlay dark-5"><!-- dark overlay [0 to 9 opacity] --></div>

                <div class="slider-video">
                    <video poster="assets/images/demo/video/siren.jpg" preload="auto" loop autoplay muted>
                        <source src="{{ asset('video/jr_rball_practice.mp4')}}" type="video/mp4" />
                    </video>
                </div>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="slider-featured-text text-center">
								<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">
									<em class="weight-100">Texas <span class="junior">Jun<i class="fa fa-child"></i>or</span></em> 
									<em class="weight-100">Racquetball</em>
								</h1>
								<br/>
								<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">the next generation of racquetball greats</h2>
								<a class="btn btn-success btn-lg wow fadeInUp" data-wow-delay="1s" href="{{route('juniors.index')}}">GET INVOLVED</a>
							</div>				
						</div>
						<div class='credit'>
							<p class="text smaller">Video courtesy of Sabath Trejo Roldan</p>						
						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->

@stop