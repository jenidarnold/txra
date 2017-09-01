
	<h4 style="margin-bottom:0px"><i class="fa {{$icon}} text-warning"></i> <a href="{{$post->getUrl()}}">{{$title }}</a></h4>
	<hr style="margin-top:2px; margin-bottom:5px;"/>
	<h5 style="margin-bottom:5px"><a href="{{$post->getUrl()}}">{{$post->title}}</a></h5>

	<ul class="blog-post-info list-inline" style="margin-bottom:5px; padding-bottom:0px; border-bottom:none">
		{{-- <li>
			<a href="#">
				<i class="fa fa-clock-o"></i>
				<span class="font-lato">{{$post->created_at->format('m-d Y h:i')}}</span>
			</a>
		</li> --}}								
		<!--li class="comment">
			<a href="#">
				<i class="fa fa-comment-o"></i>
				<span class="font-lato">28</span>
			</a>
		</li-->
		<li>
            <a href="{{route('members.show', $post->author['id'])}}">
                <span class="font-lato">By {{$post->author["first_name"] . " " . $post->author["last_name"]}}</span>
            </a>
        </li>
	</ul>

	@if ($post->image_count() > 1)
		<!-- OWL SLIDER -->
	<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": {{$post->image_count()}}, "autoPlay": 6000, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>

		@foreach(new \DirectoryIterator("images/blog/$post->id") as $fileinfo)
			@if (!$fileinfo->isDot())
				<div>
					<img class="thumbnail img-responsive" src="{{ asset($fileinfo->getPathname()) }}" alt="">
				</div>
			@endif
		@endforeach								
	</div>
	<!-- /OWL SLIDER -->
	@else
	  	<figure class="margin-bottom-10 ">
            <img class="thumbnail img-responsive" src="{{asset('images/blog/'.$post->id.'/'.$post->image)}}" alt="{{$post->title}} " >
        </figure>
    @endif

	<p class="list-group-item-text"> {{substr(strip_tags($post->content), 0, 200)}}... </p>
	<br/>
	<a href="{{$post->getUrl()}}" class="btn btn-reveal btn-info btn-sm">
		<i class="fa fa-plus"></i>
		<span>Read More</span>
	</a>



