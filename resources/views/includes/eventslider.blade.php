	<!-- Texas Sanctioned Events -->
			<section>
				<div class="container">

					<div class="heading-titleX heading-borderX">
						<h4><i class="et-trophy text-warning"></i> <a href="{{route('events.index', array('type' => $event_type))}}">{{ $event_type }} Events</a></h4>
						<!--p class="font-lato size-14">Lorem ipsum dolor sit amet.</p-->
					</div>

					<!--
						RELATED CAROUSEL

						controlls-over		= navigation buttons over the image
						buttons-autohide 	= navigation buttons visible on mouse hover only

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-1
							.owl-padding-2
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
					<div class="text-center">
						<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "4", "autoPlay": 5000, "navigation": true, "pagination": false}'>

						@foreach($tournaments as $t)
							<!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											{{-- <a class="ico-rounded lightbox" href={{ asset("images/tournaments/logos/$t->logo") }} data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a> --}}
											
											<!-- details -->
											<a class="ico-rounded" href="{{ $t->url }}" target="tournament">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>
											<!-- TODO Custom tournament Page 
											<a class="ico-rounded" href="{{ route('events.show', array('id' => $t->id)) }}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>
											-->

										</span>
									</span>
									<img class="img-responsive" src="{{$t->logo }}" width="300" alt="">
								</figure>

								<!-- div info -->
								<div class="item-box-desc">
									<h4><a href="{{ $t->url }}" target="tournament"> {{ $t->name }}</a></h4>
									<span class="text">{{$t->start_date}} - {{$t->end_date}}<br/>
											@if( $t->club()->lat > 0)
												<a href="{{ 'https://www.google.com/maps?q=' . $t->club()->lat .','. $t->club()->lng }}" target="map">
													<i class="fa fa-map-marker text-danger"></i> {{$t->club()->name }}</a><br/>
													{{$t->club()->city }}, {{$t->club()->state }}		
											@else
												 {{$t->club()->name }}<br/>  
												 {{$t->club()->city }}, {{$t->club()->state }}
											@endif
										</span>
								</div>

							</div>
							<!-- /item -->
							@endforeach

							
						</div>
					</div>
				</div>
			</section>
