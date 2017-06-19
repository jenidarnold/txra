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
						<div class="owl-carousel owl-padding-1 nomargin buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": "6", "autoPlay": 3500, "navigation": true, "pagination": false}'>

						@foreach($tournaments as $t)
							<!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href={{ asset("images/tournaments/logos/$t->logo") }} data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="{{ route('events.show', array('id' => $t->id)) }}">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src={{ asset("images/tournaments/logos/$t->logo") }} width="200" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>{{ $t->name }}</h3>
									<ul class="nomargin" style="list-style: none;">
										<li>6/06/2017 - 6/07/2017</li>
										<li>Round Rock, TX</li>
										<li>
											<a href="r2sports.com/?TID=21674">Tournament Information</a>
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
