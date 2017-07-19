
	<h2><a href="{{$post->getUrl()}}">{{$title }}</a></h2>
	<h4><a href="{{$post->getUrl()}}">{{$post->title}}</a></h4>

	<ul class="blog-post-info list-inline">
		<li>
			<a href="#">
				<i class="fa fa-clock-o"></i>
				<span class="font-lato">{{ date_format($post->created_at, "D, d M Y H:i:s T") }}</span>
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
                <span class="font-lato">{{$post->author}}</span>
            </a>
        </li>
	</ul>

	@if ($post->image_count() > 1)
		<!-- OWL SLIDER -->
	<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": {{$post->image_count()}}, "autoPlay": 3000, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>

		@foreach(new \DirectoryIterator("images/blog/$post->id") as $fileinfo)
			@if (!$fileinfo->isDot())
				<div>
					<img class="img-responsive" src="{{ asset($fileinfo->getPathname()) }}" alt="">
				</div>
			@endif
		@endforeach								
	</div>
	<!-- /OWL SLIDER -->
	@else
	  	<figure class="margin-bottom-20 ">
            <img class="img-responsive" src="{{asset('images/blog/'.$post->id.'/'.$post->image)}}" alt="{{$post->title}} " >
        </figure>
    @endif

	<p class="list-group-item-text"> {{substr(strip_tags($post->content), 0, 200)}}... </p>

		<a href="{{$post->getUrl()}}" class="btn btn-reveal btn-default">
    		<i class="fa fa-plus"></i>
    		<span>Read More</span>
    	</a>



