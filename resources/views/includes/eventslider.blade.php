	<!-- Texas Sanctioned Events -->
			<section>
				<div class="container">

					<div class="heading-title heading-border">
						<h3><a href="{{route('events.index', array('type' => $event_type))}}">{{ $event_type }} Events</a></h3>
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
						<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "6", "autoPlay": 5000, "navigation": true, "pagination": false}'>

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

									<img class="img-responsive" src="{{$t->logo }}" width="200" alt="">
								</figure>

								<!-- div info -->
								<div class="item-box-desc">
									<h4>{{ $t->name }}</h4>
									<h6>{{$t->start_date}} - {{$t->end_date}}</li></h6>
									<h6>{{$t->location}}</h6>
									{{-- <h6><a href="{{ $t->url}}" target="tournament"><img height="18px" src="{{asset('images/logos/r2sports.gif')}}"> Official Touranment Site</a></h6> --}}
								</div>

							</div>
							<!-- /item -->
							@endforeach

							
						</div>
					</div>
				</div>
			</section>
