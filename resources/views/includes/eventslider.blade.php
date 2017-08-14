	<!-- Texas Sanctioned Events -->
			<section>
				<div class="container">

					<div class="heading-title heading-border">
						<h3><span>{{ $event_type }}</span> Events</h3>
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
											<a class="ico-rounded" href="{{ route('events.show', array('id' => $t->id)) }}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src={{"http://www.r2sports.com/tourney/imageGallery/gallery/tourneyLogo/$t->logo"  }} width="200" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>{{ $t->name }}</h3>
									<ul class="nomargin" style="list-style: none;">
										<li>{{$t->start_date}} - {{$t->end_date}}</li>
										<li>{{$t->location}}</li>
										<li>
											<a href="{{ $t->url}}" target="tournament">Official Tournament Site</a>
										</li>
									</ul>
								</div>

							</div>
							<!-- /item -->
							@endforeach

							
						</div>
					</div>
				</div>
			</section>
