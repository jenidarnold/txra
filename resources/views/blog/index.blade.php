@extends('layouts.news')
@section('body')
    @if($last->total() == 0)
        <div class="text-center">
            <h5>Sorry, there are no articles under {{$category}}</h5>
        </div>
    @else
  
        <div class="row">           
            @foreach($last as $post)
            <!-- POST ITEM -->
            <div class="blog-post-item col-sm-12 col-md-12">
            @if ($post->image_count() > 1)
                <!-- OWL SLIDER -->
                <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items": {{$post->image_max()-1}}, "autoPlay": 6000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
                @if(file_exists("images/blog/$post->id/lead"))
                    @php ($imagepath = "images/blog/$post->id/lead")
                @else
                    @php ($imagepath = "images/blog/$post->id")
                @endif
                @foreach(new \DirectoryIterator($imagepath) as $fileinfo)
                    @if (!$fileinfo->isDot())
                        <div>
                            <img class="img-responsive" height="200px" src="{{ asset($fileinfo->getPathname()) }}" alt="">
                        </div>
                    @endif
                @endforeach                  
                </div>
                <!-- /OWL SLIDER -->
           @elseif ($post->image_count() == 1)
                <figure class="margin-bottom-20">                       
                    <!-- details -->                
                    <img class="thumbnail img-responsive1"  style="max-height:200px" src="{{asset($post->image_path().$post['image'])}}" alt="{{$post['title']}} " >                             
                </figure>
            @else
                <figure class="margin-bottom-20 ">
                    <img class="thumbnail img-responsive1"  style="max-height:100px" src="{{asset('images/logos/txra_full_logo_og.png')}}" alt="{{$post['title']}} " >
                </figure>
            @endif

                <h2><a href="{{$post->getUrl()}}">{{$post['title']}}</a></h2>

                <ul class="blog-post-info list-inline">
                    <li>
                        <a href="#">
                            <i class="fa fa-clock-o"></i> 
                            <span class="font-lato">{{$post['created_at']->format('m/d/y')}}</span>
                        </a>
                    </li>
                    <!--li>
                        <a href="#">
                            <i class="fa fa-comment-o"></i> 
                            <span class="font-lato">28 Comments</span>
                        </a>
                    </li-->
                    <li>
                        <i class="fa fa-folder-open-o"></i> 
                        @foreach($post->categories as $c)
                            <a class="category" href="{{ route('news.category', array('id' => $c->id, 'category' => $c->category))}}">
                                <span class="font-lato">{{ $c->category}}</span>
                            </a>
                        @endforeach
                    </li>
                    <li>
                        <a href="{{ route('members.show', array('id' => $post['author_id']))}}">
                            <i class="fa fa-user"></i> 
                            <span class="font-lato">{{ \App\Post::find($post['id'])->author()->first()["full_name"] }}</span>
                        </a>
                    </li>
                </ul>

                <p class="list-group-item-text"> {{substr(strip_tags($post['content']), 0, 250)}} ...
                    <a href="{{$post->getUrl()}}" class="text-info small margin-top-10">
                        <span>Read More</span>
                    </a>
                </p>
            </div>
            <!-- /POST ITEM -->
          @endforeach         
        </div>
            <!-- PAGINATION -->           
                <div class="text-center">
                    <ul class="pagination pagination-lg pagination-simple">
                    {{$last->links()}}
                    <!-- Pagination Default -->             
                    </ul>
                    <!-- /Pagination Default -->

                </div>
            <!-- /PAGINATION -->

    @endif

@stop