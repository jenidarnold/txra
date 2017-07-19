
			<section>
				<div class="container">

					<div class="row">

						<!-- POST ITEM -->
						<div class="blog-post-item col-md-4">
							<h2><a href="{{$trending->getUrl()}}">TRENDING</a></h2>
							<h4><a href="{{$trending->getUrl()}}">{{$trending->title}}</a></h4>
					
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i>
										<span class="font-lato">{{$trending->created_at}}</span>
									</a>
								</li>								
								<!--li class="comment">
									<a href="#">
										<i class="fa fa-comment-o"></i>
										<span class="font-lato">28</span>
									</a>
								</li-->
								<li>
	                                <a href="#">
	                                    <i class="fa fa-user"></i> 
	                                    <span class="font-lato">{{$trending->author}}</span>
	                                </a>
	                            </li>
							</ul>
{{-- 							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": 2, "autoPlay": 3000, "autoHeight": false, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<div>
									<img class="img-responsive" src="{{ asset('images/board/julie_arnold.png') }}" alt="">
								</div>	
								<div>
									<img class="img-responsive" src="{{ asset('images/board/tom_doughty.png') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/board/brad_giezentanner.png') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/board/mike_grisz.png') }}" alt="">
								</div>								
								<div>
									<img class="img-responsive" src="{{ asset('images/board/mitchell_mccoy.png') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/board/john_oneill.png') }}" alt="">
								</div>	
								<div>
									<img class="img-responsive" src="{{ asset('images/board/mike_sorensen.png') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/board/terry_wenetschlaeger.png') }}" alt="">
								</div>
							</div>
							<!-- /OWL SLIDER --> 
--}}

						  	<figure class="margin-bottom-20 ">
	                            <img class="img-responsive" src="{{asset('images/blog/'.$trending->id.'/'.$trending->image)}}" alt="{{$trending->title}} " >
	                        </figure>

							<p class="list-group-item-text"> {{substr(strip_tags($trending->content), 0, 200)}}... </p>

                       		<a href="{{$trending->getUrl()}}" class="btn btn-reveal btn-default">
                            	<i class="fa fa-plus"></i>
                            	<span>Read More</span>
                            </a>
						</div>
						<!-- /POST ITEM -->

						<!-- POST ITEM -->
						<div class="blog-post-item col-md-4">
							<h2><a href="{{$spotlight->getUrl()}}">PLAYER SPOTLIGHT</a></h2>
							<h4><a href="{{$spotlight->getUrl()}}">{{$spotlight->title}}</a></h4>
					
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i>
										<span class="font-lato">{{$spotlight->created_at}}</span>
									</a>
								</li>								
								<!--li class="comment">
									<a href="#">
										<i class="fa fa-comment-o"></i>
										<span class="font-lato">28</span>
									</a>
								</li-->
								<li>
	                                <a href="#">
	                                    <i class="fa fa-user"></i> 
	                                    <span class="font-lato">{{$spotlight->author}}</span>
	                                </a>
	                            </li>
							</ul>

{{-- 							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 8, "autoPlay": 3000, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/bob_sullins.jpg') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/ross_smith.png') }}" alt="">
								</div>
								<div>							
									<img class="img-responsive" src="{{ asset('images/awards/2017/richard_eisemann.jpg') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/julienne_arnold.jpg') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/brady_yelverton.jpg') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/shane_diaz.jpg') }}" alt="">
								</div>
								<div style='height:300px'>
									<img class="img-responsive" src="{{ asset('images/awards/2017/gael_trejo.jpeg') }}" alt="">
								</div>
								<div>
									<img class="img-responsive" src="{{ asset('images/awards/2017/leah_trejo.jpeg') }}" alt="">
								</div>
							</div>
							<!-- /OWL SLIDER --> --}}

						  	<figure class="margin-bottom-20 ">
	                            <img class="img-responsive" src="{{asset('images/blog/'.$spotlight->id.'/'.$spotlight->image)}}" alt="{{$spotlight->title}} " >
	                        </figure>

							<p class="list-group-item-text"> {{substr(strip_tags($spotlight->content), 0, 200)}}... </p>

                       		<a href="{{$spotlight->getUrl()}}" class="btn btn-reveal btn-default">
                            	<i class="fa fa-plus"></i>
                            	<span>Read More</span>
                            </a>
						</div>
						<!-- /POST ITEM -->

						<!-- POST ITEM -->
						<div class="blog-post-item col-md-4">
							<h2><a href="{{$tip->getUrl()}}">TIP OF THE DAY</a></h2>
							<h4><a href="{{$tip->getUrl()}}">{{$tip->title}}</a></h4>
					
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i>
										<span class="font-lato">{{$tip->created_at}}</span>
									</a>
								</li>								
								<!--li class="comment">
									<a href="#">
										<i class="fa fa-comment-o"></i>
										<span class="font-lato">28</span>
									</a>
								</li-->
								<li>
	                                <a href="#">
	                                    <i class="fa fa-user"></i> 
	                                    <span class="font-lato">{{$tip->author}}</span>
	                                </a>
	                            </li>
							</ul>

						  	<figure class="margin-bottom-20 ">
	                            <img class="img-responsive" src="{{asset('images/blog/'.$tip->id.'/'.$tip->image)}}" alt="{{$tip->title}} ">
	                        </figure>

							<p class="list-group-item-text"> {{substr(strip_tags($tip->content), 0, 200)}}... </p>

                       		<a href="{{$tip->getUrl()}}" class="btn btn-reveal btn-default">
                            	<i class="fa fa-plus"></i>
                            	<span>Read More</span>
                            </a>
						</div>
						<!-- /POST ITEM -->
						
				</div>
			</div>			
		</section>
		<!-- / -->


